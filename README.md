# alquilando-backend

Backend. Implementación de un servicio API RESTful sobre el recurso 'users' con PHP Laravel.

**endpoints**
 * GET /users 
 * POST /users 
 * GET /users/{user}
 * PUT /users/{user}
 * DELETE /users/{user}

## Contexto de implementación
 - PHP 7.4.13 
 - MySql 5.7.4 
 - Laragon 4.0.16
 - Laravel 8.4.4
 - phpMyAdmin 5.0.4
 - Postman 7.36.0 (Testeo de escritorio)
 - VSCode 1.51.1

## Traza de implementación
```
php artisan make:migration usuario --create=usuarios
php artisan migrate
php artisan make:seeder UsuarioSeeder
php artisan db:seed
php artisan make:model Usuario
php artisan make:controller UsuarioController --api
php artisan make:request CreateUsuarioRequest
php artisan make:request UpdateUsuarioRequest
```

## Instrucciones de instalación
1. Clonar proyecto: [users-back-demo](https://github.com/maximo-perez-villalba/users-back-demo).
2. Creación manual de la base de datos 'users'.
3. Ejecutar en consola:
```
php artisan migrate
php artisan db:seed
php artisan serve
```
