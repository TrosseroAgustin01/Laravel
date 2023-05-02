# Laravel

Todo lo que son migraciones, controladores y factories tienen su origen en los modelos es decir no tiene sentido tener una migración, un factory sino existe un modelo.

Así que una forma facil de crear todo seria partir del modelo con un comando tipo:
´´´
php artisan make:model Post -mcf
´´´
Lo que dice es creame un modelo Post, además su migración, además su controlador y además su factory.
Con esto podriamos evitar algún error de dedo.

Adicionalmente como todos los controladores o generalmente van a tener los mismos métodos de: listar, crear, actualizar y borrar podemos agregar algo asi:
´´´
php artisan make:model Post -mcf --resource
´´´
Lo que hace adicionalmente es crear los métodos básicos de un crud en el controllador