# Redirect map for Laravel

Package based on decorating exceptions for HttpNotFound. It will redirect to url if it checked in table "redirect_map".
### Installation
Redirectmap requires Laravel 5.0.

Add dependencies to `composer.json`
```sh
"Litvin\\Redirectmap\\": "packages/litvin/redirectmap/src",
```

Publish components

```sh
$ php artisan vendor:publish --provider="Litvin\redirectmap\ServiceProvider" --tag="redirect_map"
```
Run migrations
```sh
$ php artisan migrate
```

Verify the deployment by navigating to admin panel and adding redirects.

