# Basic Calculator Laravel 8 

Installation
Laravel 8.x:


composer require murad/calculator

After updating composer, add the ServiceProvider to the providers array in config/app.php

murad\calculator\CalculatorServiceProvider::class,


add file in 

"murad\\calculator\\": "vendor/murad/calculator/src"

for example

   "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/",
            "murad\\calculator\\": "vendor/murad/calculator/src"
        }
    },

#composer dumpautoload
#php artisan serve
