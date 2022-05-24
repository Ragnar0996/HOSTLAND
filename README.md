Agrego archivo llamado hostland.sql con el script para la creación de las tablas en un DB llamada hostland, la cual es necesario crear antes de ejecutar el script.

En el archivo .env del proyecto, deberá agregar las credenciales correspondientes a su DB para poder realizar la conexión.

Para generar la tabla de ejemplo que agregaron, tuve un error "ParseError syntax error, unexpected '|', expecting variable", al buscarlo, encontré que era por la versión de PHP, tengo la versión 7.4.23 y debía actualizar a la versión 8. Hice esta actualización, pero algo falló y mi servidor ya no arranco, por lo que no pude concluir con las pruebas.

Los estilos utilizados fueron los proporcionados por las plantillas de Jetstream y Tailwindcss.