# Basic Calculator Laravel 8 

Installation
Laravel 8.x:

############### Step 01 ##############

#composer require murad/calculator

############### Step 02 ##############
After updating composer, add the ServiceProvider to the providers array in config/app.php

murad\calculator\CalculatorServiceProvider::class,

############### Step 03 ##############

add file in composer.json at autoload,psr-4 section


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
    
 ############### Step 04 ##############
#composer dumpautoload

#php artisan serve

############### Step 05 ##############

Finally Browse the website

http://localhost:8000/calculator

http://localhost:8000/subtract/5/2

http://localhost:8000/subtract/5/2

keep watching on 

https://www.youtube.com/easyitsolutions
https://www.facebook.com/easyitsolutionsbd

more query please contact: 
skype: muradbd.info
