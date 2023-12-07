# practica-3
 
Pasos para iniciar el Backend (Laravel):

1. Navega a la carpeta "apiPerfil" en tu terminal:

   cd apiPerfil

2. Copia el archivo ".env.example" y renómbralo como ".env":

   cp .env.example .env

3. Abre el archivo ".env" y configura la variable "APP_URL" con la dirección IP de tu servidor o el dominio en el que se ejecutará la API. Por ejemplo:

   APP_URL=http://tu-direccion-ip-o-dominio

4. Configura también las credenciales de tu base de datos en el archivo ".env", incluyendo "DB_HOST", "DB_PORT", "DB_DATABASE", "DB_USERNAME" y "DB_PASSWORD".

5. Instala las dependencias de Composer:

   composer install

6. Genera una clave de aplicación única:

   php artisan key:generate

7. Ejecuta las migraciones para crear las tablas de la base de datos:

   php artisan migrate

8. Opcionalmente, puedes ejecutar los seeders para poblar la base de datos con datos de ejemplo:

   php artisan db:seed

9. Inicia el servidor Laravel:

   php artisan serve --host {tuIPv4 desde ipconfig}
   ej:
   php artisan serve --host 192.196.155.144

10. El backend estará disponible en la dirección que configuraste en "APP_URL". Por defecto, estará en http://localhost:8000/.

Pasos para iniciar el Frontend (React Native):

1. Navega a la carpeta "front-perfil" en tu terminal:

   cd front-perfil

2. Asegúrate de tener Node.js y npm (o yarn) instalados en tu sistema.

3. Abre el archivo "api.js" en la carpeta "src" y configura la variable "API_URL" con la dirección IP o dominio donde se encuentra tu backend Laravel. Por ejemplo:

   const API_URL = "http://tu-direccion-ip-o-dominio";

4. Instala las dependencias del proyecto:

   npm install

   O si prefieres usar yarn:

   yarn install

5. Si estás usando un emulador de Android o iOS, asegúrate de configurar el entorno de desarrollo según la plataforma que desees:

   - Para Android: Instala Android Studio, crea un dispositivo virtual y configura las variables de entorno necesarias. Luego, ejecuta:

     npx react-native run-android

   - Para iOS: Asegúrate de tener Xcode instalado en tu sistema y ejecuta:

     npx react-native run-ios

6. La aplicación de React Native se compilará e iniciará en tu emulador o dispositivo físico.

7. La aplicación se conectará al backend de Laravel que configuraste en "API_URL" y estará lista para su uso.

¡Listo! Ahora deberías tener tanto el backend en Laravel como el frontend en React Native en funcionamiento. Asegúrate de haber realizado los pasos de configuración adecuados en los archivos ".env" y "api.js" para que ambos se comuniquen correctamente.
