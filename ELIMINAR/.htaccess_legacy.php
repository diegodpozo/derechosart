# ----------------------------------------------------------------------
# SEGURIDAD ESTRICTA (OPTIMIZADA) - DERECHOS ART CONSULTAS
# ----------------------------------------------------------------------

# 1. DESACTIVAR EL LISTADO DE DIRECTORIOS
Options -Indexes

# 2. BLOQUEO DE ARCHIVOS SENSIBLES POR EXTENSION
# Bloquea archivos ocultos (.env, .git, etc.), backups y temporales, composer.json/lock
# Se hace excepción para /.well-known/ (SSL, verificación de dominios)
<FilesMatch "^(?:\.(?!well-known).*|.*\.(?:bak|config|sql|log|ini|sh|inc|swp|dist)|composer\.(?:json|lock))$">
    Require all denied
</FilesMatch>

# 3. BLOQUEO DE ATAQUES COMUNES (WORDPRESS, ETC)
RewriteEngine On

# Bloquear intentos de acceso a WordPress y otros escaneos
RewriteCond %{REQUEST_URI} ^/wp-.* [NC,OR]
RewriteCond %{REQUEST_URI} ^/xmlrpc\.php [NC,OR]
RewriteCond %{REQUEST_URI} ^/phpmyadmin [NC,OR]
RewriteCond %{REQUEST_URI} ^/\.env [NC,OR]
RewriteCond %{REQUEST_URI} ^/backup [NC,OR]
RewriteCond %{REQUEST_URI} ^/inicializar_db\.php [NC]
RewriteRule ^(.*)$ - [F,L]

# 3b. BLOQUEO DE RUTAS CRÍTICAS DETECTADAS EN LOGS
RewriteCond %{REQUEST_URI} ^/\.git [NC,OR]
RewriteCond %{REQUEST_URI} ^/_ignition/execute-solution [NC,OR]
RewriteCond %{REQUEST_URI} ^/\.aws [NC,OR]
RewriteCond %{REQUEST_URI} ^/aws\.env [NC,OR]
RewriteCond %{REQUEST_URI} ^/\.env\.(production|local|save|bak) [NC,OR]
RewriteCond %{REQUEST_URI} ^/(admin|backend)/\.env [NC,OR]
RewriteCond %{REQUEST_URI} ^/config(\.php|\.php\.bak|\.js|\.json.*) [NC,OR]
RewriteCond %{REQUEST_URI} ^/aws(-config|\.config)\.js [NC,OR]
RewriteCond %{REQUEST_URI} ^/phpinfo(\.php.*)? [NC]
RewriteRule ^(.*)$ - [F,L]

# 4. BLOQUEAR ACCESO DIRECTO A CUALQUIER .PHP (EXCEPTO INDEX.PHP Y LAS CARPETAS QUIMEY/COPIA)
RewriteCond %{REQUEST_URI} !quimey [NC]
RewriteCond %{REQUEST_URI} !copia [NC]
RewriteCond %{REQUEST_FILENAME} \.php$ [NC]
RewriteCond %{REQUEST_FILENAME} !index\.php [NC]
RewriteRule ^ - [F,L]

# 5. PROTEGER CARPETAS DE CODIGO
RewriteCond %{REQUEST_URI} !quimey [NC]
RewriteCond %{REQUEST_URI} !copia [NC]
RewriteRule ^(config|src|vendor)/ - [F,L]

# 6. RUTEO AMIGABLE (URLs limpias)
RewriteCond %{REQUEST_URI} !quimey [NC]
RewriteCond %{REQUEST_URI} !copia [NC]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [L,QSA]

# 7. CACHE DE NAVEGADOR (OPTIMIZACION DE RENDIMIENTO)
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresDefault "access plus 1 month"
    ExpiresByType image/x-icon "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 month"
    ExpiresByType image/png "access plus 1 month"
    ExpiresByType image/gif "access plus 1 month"
    ExpiresByType image/svg+xml "access plus 1 month"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
    ExpiresByType font/ttf "access plus 1 year"
    ExpiresByType font/otf "access plus 1 year"
    ExpiresByType font/woff "access plus 1 year"
    ExpiresByType font/woff2 "access plus 1 year"
</IfModule>

# 8. COMPRESION GZIP
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/xml
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE application/xml
    AddOutputFilterByType DEFLATE application/xhtml+xml
    AddOutputFilterByType DEFLATE application/rss+xml
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE application/x-javascript
</IfModule>
