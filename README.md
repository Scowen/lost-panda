Project: Lost Panda
============================

I don't know what it is or what it's gonna do, it's just gonna be a 
thing I do for a bit.

SETUP
-------------

### Composer

Navigate to the root of the project, run the commands:

~~~
composer global require "fxp/composer-asset-plugin:~1.1.1"
composer update
~~~


### Database

Create the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=DBNAME',
    'username' => 'USERNAME',
    'password' => 'PASSWORD',
    'charset' => 'utf8',
];
```

### Migrations

Navigate to the root of the project, run the command: 

~~~
./yii migrate
~~~


