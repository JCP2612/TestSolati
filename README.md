Estructura del Proyecto app: Contiene el código principal de la aplicación, modelos, controladores, etc. database: Contiene las migraciones y seeders para la base de datos. public: Carpeta raíz del servidor web. resources: Contiene las vistas, assets (CSS, JS, imágenes), etc. routes: Define las rutas de la aplicación.

URL para las vistas: http://127.0.0.1:8000/scuderias


Tecnologías Utilizadas Laravel: Framework PHP para desarrollo web version 11. Bootstrap: Framework CSS para diseño responsivo. MySQL: Base de datos para almacenar información de los cócteles, usuarios y favoritos. Jquery

Requisitos Servidor web: Apache. PHP: Versión compatible con Laravel 11. Composer: Para gestionar las dependencias. npm (opcional)

Instalación Clonar el repositorio: Bash git clone [https://github.com/JCP2612/AppCocktail](https://github.com/JCP2612/TestSolati)

Instalar dependencias: Bash cd tu-proyecto composer install npm install

Configurar la base de datos: Copiar el archivo .env.example a .env y ajustar las credenciales de la base de datos. Ejecutar las migraciones: Bash php artisan migrate

Iniciar el servidor de desarrollo: Bash php artisan serve
