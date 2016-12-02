# Redirect map for Laravel

Package based on decorating exceptions for HttpNotFound. It will redirect to url if it checked in table "redirect_map".
### Installation
Redirectmap requires Laravel 5.0.
Install this package through Composer. Edit your project's composer.json file to require **litvin/redirectmap**.
```sh
"require": {
    "litvin/redirectmap": "0.*"
}
````

Next, add requires to composer from the terminal:
```sh
composer require litvin/redirectmap:0.*
```
... or update all composer requires:
```sh
composer update
```

Open `config/app.php` and add a new item to the providers array. 
```sh
    'providers' => [
        ...
        Litvin\Redirectmap\ServiceProvider::class,
    ]
```

Publish components. It will be add `config\builder\tb-definitions\redirect_map.php` and migrations.

```sh
$ php artisan vendor:publish --provider="Litvin\redirectmap\ServiceProvider" --tag="redirect_map"
```
Apply migrations
```sh
$ php artisan migrate
```

Verify the deployment by navigating to admin panel and adding redirects.

