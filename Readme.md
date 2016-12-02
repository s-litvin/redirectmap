# Redirect map for Laravel

Package based on decorating exceptions for HttpNotFound. It will redirect to url if it checked in table "redirect_map".
### Installation
Redirectmap requires Laravel 5.0.

Install this package through Composer:
```sh
$ composer require litvin/redirectmap
```
OR manually edit your project's composer.json file to require **litvin/redirectmap**.
```php
"require": {
    "litvin/redirectmap": "0.*"
}
````
```sh
$ composer update
```

Open `config/app.php` and add a new item to the providers array. 
```php
    'providers' => [
        ...
        Litvin\Redirectmap\ServiceProvider::class,
    ]
```

Publish components. It will be add `config\builder\tb-definitions\redirect_map.php` and migrations.

```sh
$ php artisan vendor:publish --provider="Litvin\Redirectmap\ServiceProvider" --tag="redirect_map"
```
Apply migrations
```sh
$ php artisan migrate
```

After that, you need to configurate `\config\builder\admin.php` redirects in admin panel by adding:
```php
'menu' => array(
    ...
   array(
        'title' => 'Переадресация',
        'link'  => '/redirect_map',
        'check' => function() {return true;}
        )
    ...
)
```

Verify the deployment by navigating to admin panel and adding redirects.

