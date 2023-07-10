<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## El proyecto está creado en la versión 10 de Laravel

## Instalación y requerimientos
- versión de php >= 8
- mysql
- postman
- composer (opcional)

#### ejecutar los siguientes comandos

- git clone https://github.com/daniel9610/test-dvp-back.git   // clonar el proyecto
- composer install                                            // instalar las dependencias
-  * Crear un archivo con el nombre .env y copiar el contenido del archivo .env.example, cambiar las variables de conexión a la base de datos
- php artisan key:generate
- php artisan migrate --seed

## End-points disponibles

- localhost:8000/api/tickets // tipo post // Crea un ticket nuevo 
ejemplo de body en la solicitud:
{
    "user_id":"5",
    "status":0,
    "description":"test description"
} 
- localhost:8000/api/tickets/{ticket_id} // tipo get // Muestra el detalle de un ticket 
- localhost:8000/api/tickets // tipo get // Lista todos los tickets disponibles paginados de a 20 
- localhost:8000/api/tickets/{ticket_id} // tipo put o patch // Edita o actualiza la información de un ticket
Ejemplo de body en la solicitud:
{
    "user_id":"5",
    "status":1,
    "description":"test updated"
} 

- localhost:8000/api/tickets/{ticket_id} // tipo delete // Elimina un ticket 
