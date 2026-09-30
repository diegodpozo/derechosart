# DEPLOY A HOSTINGER VIA FTP CON CURL (SIN FILEZILLA).
# USO:
#   .\deploy.ps1 public_html/src/helpers.php
#   .\deploy.ps1 public_html/vistas/paginas/inicio.php public_html/vistas/encabezado.php
#   .\deploy.ps1 public_html/src/helpers.php -Probar          (SOLO VALIDA CONEXION, NO SUBE NADA)
#
# LAS CREDENCIALES SE LEEN DE ftp-credentials.ini (FORMATO NETRC). NO SE SUBE A GIT.
# NO DESPLEGAR A PRODUCCION SIN ORDEN EXPRESA DEL USUARIO.

[CmdletBinding()]
param(
    [Parameter(Mandatory = $true, Position = 0)]
    [string[]]$Archivos,

    [switch]$Probar
)

$ErrorActionPreference = 'Stop'
$ROOT = Split-Path -Parent $MyInvocation.MyCommand.Path
$CRED = Join-Path $ROOT 'ftp-credentials.ini'
$BASE_FTP = '/domains/derechosart.com.ar/public_html'

if (-not (Test-Path -LiteralPath $CRED)) {
    Write-Error "No existe ${CRED}. Copia ftp-credentials.example.ini como ftp-credentials.ini y completa host/usuario/contrasena."
}

# PARSEA EL NETRC (SOPORTA COMENTARIOS CON #, ESPACIOS O TABS COMO SEPARADOR).
$lines = Get-Content -LiteralPath $CRED | Where-Object { $_ -notmatch '^\s*#' -and $_.Trim() -ne '' }
$machine = $login = $password = $null
foreach ($line in $lines) {
    $parts = $line -split '\s+'
    switch ($parts[0]) {
        'machine'  { $machine  = $parts[1] }
        'login'    { $login    = $parts[1] }
        'password' { $password = ($line -replace '^password\s+', '').Trim() }
    }
}

if (-not $machine -or -not $login -or -not $password) {
    Write-Error "ftp-credentials.ini incompleto: faltan machine/login/password. La contrasena debe estar en la linea 'password'."
}
if ($password -match 'CAMBIAR_AQUI|CONTRASENA') {
    Write-Error "La contrasena en ftp-credentials.ini sigue siendo el placeholder. Reemplazala por la contrasena real de FTP."
}

# VALIDA QUE LAS RUTAS ESTEN DENTRO DE public_html (NO PERMITIR SUBIR COSAS FUERA).
foreach ($a in $Archivos) {
    $rel = ($a -replace '\\', '/').TrimStart('/')
    if (-not $rel.StartsWith('public_html/')) {
        throw "La ruta debe estar dentro de public_html: $rel"
    }
}

if ($Probar) {
    Write-Host "Probando conexion FTP (no sube nada)..."
    curl.exe -sS --netrc-file $CRED --connect-timeout 30 --max-time 60 ("ftp://$machine/$BASE_FTP/")
    if ($LASTEXITCODE -ne 0) { throw "Fallo la conexion FTP (exit $LASTEXITCODE). Revisa credenciales." }
    Write-Host "Conexion OK."
    exit 0
}

foreach ($a in $Archivos) {
    $rel = ($a -replace '\\', '/').TrimStart('/')
    $local = Join-Path $ROOT ($rel -replace '/', '\')
    if (-not (Test-Path -LiteralPath $local)) { throw "No existe local: $local" }

    $remoto = $rel.Substring('public_html/'.Length)   # quita el prefijo public_html/
    $url = "ftp://$machine/$BASE_FTP/$remoto"

    Write-Host "Subiendo $rel ..."
    curl.exe -sS --netrc-file $CRED --connect-timeout 30 --max-time 300 --ftp-create-dirs -T $local $url
    if ($LASTEXITCODE -ne 0) { throw "Fallo upload de $rel (exit $LASTEXITCODE)." }

    # VERIFICACION: DESCARGA EL REMOTO Y COMPARA HASH.
    $tmp = Join-Path $env:TEMP ('deploy_check_' + [IO.Path]::GetFileName($local))
    $localHash = (Get-FileHash -LiteralPath $local -Algorithm SHA256).Hash
    curl.exe -sS --netrc-file $CRED --connect-timeout 30 --max-time 300 -o $tmp $url
    if ($LASTEXITCODE -ne 0) { throw "Fallo al descargar $rel para verificar (exit $LASTEXITCODE)." }
    $remoteHash = (Get-FileHash -LiteralPath $tmp -Algorithm SHA256).Hash
    Remove-Item -LiteralPath $tmp -Force

    if ($localHash -eq $remoteHash) {
        Write-Host "OK  $rel (verificado, hash coincide)"
    }
    else {
        throw "DIFERENCIA DE HASH en ${rel}: local $localHash vs remoto $remoteHash"
    }
}
Write-Host "Deploy completo."