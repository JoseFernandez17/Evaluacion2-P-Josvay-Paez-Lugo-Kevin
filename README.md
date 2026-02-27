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

1-Abrir la terminal: Abre una terminal(Git Bash por comodidad) dentro de la carpeta del proyecto

2-Instalar dependencias: Ejecuta este comando para descargar las carpetas necesarias de Laravel: composer install

3-Configurar el archivo .env: Busca el archivo .env.example, cambiale el nombre a .env

Abre ese archivo .env y asegurate de que diga: DB_CONNECTION=sqlite

4-Crear la Base de Datos:

Dentro de la carpeta database, crea un archivo nuevo vacio llamado database.sqlite

5-Prepara la aplicacion: Ejecuta estos dos comandos en orden:

php artisan key:generate

php artisan migrate:fresh --seed

6-Ver el proyecto:

Ejecuta el comando:php artisan serve

Abre en el navegador: http://127.0.0.1:8000/estudiantes
