nombre de la Universidad y Carrera:

-Universidad Politecnica Territorial del Estado Aragua Federico Brito Figueroa "UPT Aragua"

-P.N.F Informatica

-Seccion: 1

-Trayecto: 2

-FASE III

Nombres completos de los integrantes:

-Josvay Alejandra Paez Olivo C.I:
31.756.424

-Kevin Rafael Lugo Martinez C.I:
31.363.841

Enunciado asignado:

-Enunciado 4: Escuela

Instrucciones breves para ejecutar el proyecto:

1-Abrir una terminal dentro de la carpeta del proyecto

2-Ejecutar este comando para descargar las dependencias necesarias de Laravel: composer install

3-Configurar el archivo .env, usamos este comando para hacerlo mas facil: cp .env.example .env

4-Generamos la "Llave Maestra" con este comando: php artisan key:generate

5-Preparamos la Base de Datos:

Dentro de la carpeta database, creamos un archivo nuevo vacío llamado database.sqlite

6-Creamos las tablas (Migraciones) con: php artisan migrate

7-Ver el proyecto:

Ejecuta el comando: php artisan serve

Abre en el navegador: http://127.0.0.1:8000/estudiantes
