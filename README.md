# user

Clase de Usuario para Laravel

## Instalacion

Via Composer

``` bash
$ composer require sargilla/user
```

## Uso

- Agregar el provider en config/app.php
```php
	Sargilla\User\Providers\GuestUserServiceProvider::class,
```
- La variable $logueado ($user->check()) y el objeto "user" estaran disponibles en todas las vistas

- Si no hay un usuario creado lo crea para evitar la excepción. 

## Testing

``` bash
$ composer test
```

## Seguridad

Si encuentra problemas de seguridad envie un correo a sargilla@gmail.com

## Basado en 
Laracasts design patterns:
- https://laracasts.com/series/whip-monstrous-code-into-shape
- https://laracasts.com/series/whip-monstrous-code-into-shape/episodes/19

## Creditos

Santiago Argilla sargilla@gmail.com


