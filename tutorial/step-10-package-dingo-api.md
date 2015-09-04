#Laravel-5-Starter Tutorial for Package dingo/api

## Configuration

### Step 1.Require  package in  composer.json and run `composer update`:
```php
    "dingo/api": "1.0.*@dev",
```

### Step 2. In `config/app.php` add the ServiceProvider to the providers array
```
    Dingo\Api\Provider\LaravelServiceProvider::class
```

And if you want to use the facade to log messages, add this to your facades in `config/app.php`:

```
'api' => Dingo\Api\Facade\API,
'apiroute' => Dingo\Api\Facade\Route
```

### step 3. Copy the package config to  local config with the publish command:

```
php artisan vendor:publish --provider="Dingo\Api\Provider\LaravelServiceProvider"
```

### Step 4. More configure if needed
      ...
## Usage

## Requirements
- [ Laravel-frame ](https://github.com/laravel/laravel.git)
- [dingo/api](https://github.com/dingo/api.git)

# Authored By  [followtheart](https://github.com/followtheart)
