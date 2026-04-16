Plan: CSRF hardening, logging y tests

Resumen
- Estado actual: CSRF agregado a formulario público, validación en ApiController y UbicacionController, JS usa fetchWithCsrf. Logs persistentes en public_html/logs/csrf_audit.log. Tests PHP ligeros creados y ejecutados (pasaron).

Objetivo
- Completar auditoría de endpoints, migrar logs a BD opcional, y añadir tests E2E reproducibles.

Tareas
- audit-csrf-endpoints: Revisar todos los controladores y añadir validarCSRF a todos los endpoints que modifican estado; actualizar vistas y JS que envían POST/PUT/DELETE.
- migrate-csrf-logs-to-db: Crear tabla csrf_audit (timestamp, ip, uri, user_agent, payload_hash) y guardar logs en DB además del archivo.
- add-e2e-tests-playwright: Finalizar instalación de Playwright y escribir tests E2E (formulario público, login, AJAX protegido).
- improve-cookie-settings: Verificar y endurecer SameSite/Secure/HttpOnly en sesiones y cookies en producción.

Cómo retomar
- El plan está guardado en este archivo. Recomendado commitear y pushear al control de versiones.

Notas
- Los tests PHP actuales asumen que la APP está accesible en BASE_URL.
- Los cambios ya están en el workspace; push al repo cuando quieras.
