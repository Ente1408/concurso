# *Landing Page para Concurso de Automóviles*

Este proyecto es una *Landing Page* desarrollada en *Laravel* para un concurso de una compañía de automóviles. Permite a los usuarios registrarse, selecciona un ganador al azar cuando hay al menos 5 usuarios y permite descargar los datos en un archivo Excel.

---

## *Requisitos previos*
Antes de comenzar, asegúrate de tener instalados los siguientes componentes en tu máquina:

1. *PHP*: Versión 8.0 o superior. Puedes verificar tu versión con el comando:   

2. *Composer*: Gestor de dependencias de PHP. Puedes verificar si está instalado con:

3. *Base de datos MySQL: Asegúrate de tener un servidor MySQL en funcionamiento. Puedes usar **XAMPP, **MAMP* o instalar MySQL directamente.

4. *Node.js y npm* (opcional): Si deseas compilar los archivos de frontend (CSS, JS), necesitarás Node.js y npm.

---

## *Paso 1: Clonar el repositorio*
1. Abre una terminal o línea de comandos en la carpeta donde quieras montar el proyecto.
2. Clona el repositorio del proyecto desde GitHub:
   git clone https://github.com/Ente1408/concurso.git
   
3. Navega al directorio del proyecto:
   cd concurso
   

---

## *Paso 2: Instalar dependencias de PHP*
1. Ejecuta el siguiente comando para instalar todas las dependencias de PHP definidas en el archivo composer.json:
   composer install
   
---

## *Paso 3: Configurar la base de datos*
1. Abre el archivo .env en el directorio raíz del proyecto y configura las credenciales de tu base de datos MySQL:
   env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=concurso
   DB_USERNAME=root
   DB_PASSWORD=
   

   - DB_DATABASE: Nombre de la base de datos que usarás para el proyecto.
   - DB_USERNAME y DB_PASSWORD: Usuario y contraseña de tu servidor MySQL.

2. Crea la base de datos en MySQL. Puedes hacerlo desde la línea de comandos de MySQL:
   CREATE DATABASE concurso;

3. Ejecuta las migraciones para crear las tablas necesarias:
   php artisan migrate

4. (Opcional) Si deseas cargar datos de prueba (departamentos y ciudades de Colombia), ejecuta el siguiente comando:
   php artisan db:seed --class=DepartmentsAndCitiesSeeder
   

## *Paso 4: Configurar el frontend (opcional)*
Si deseas compilar los archivos de frontend (CSS, JS), sigue estos pasos:

1. Instala las dependencias de Node.js:
   npm install

2. Compila los archivos de frontend:
   npm run dev
   

   Esto generará los archivos compilados en el directorio public/build.

---

## *Paso 5: Ejecutar el servidor de desarrollo*
1. Inicia el servidor de desarrollo de Laravel con el siguiente comando:
   bash
   php artisan serve
   

2. Abre tu navegador y accede a la siguiente URL:
   
   http://127.0.0.1:8000
   

   Aquí verás la *Landing Page* del concurso.

---

## *Paso 6: Probar las funcionalidades*
1. *Registro de usuarios*:
   - Accede a la página principal y completa el formulario de registro con datos válidos.
   - Los datos se guardarán en la base de datos.

2. *Selección del ganador*:
   - Una vez que haya al menos 5 usuarios registrados, accede a la URL http://127.0.0.1:8000/winner para ver al ganador seleccionado al azar.

3. *Descarga de datos en Excel*:
   - Accede a la URL http://127.0.0.1:8000/export para descargar un archivo Excel con los datos de los usuarios registrados.

---

## *Paso 7: Detener el servidor*
Para detener el servidor de desarrollo, simplemente presiona Ctrl + C en la terminal donde se está ejecutando.

