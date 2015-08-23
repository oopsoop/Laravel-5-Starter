#Laravel-5-Starter Tutorial for xxx

## Configuration

### Step 1.Require  package in  composer.json and run `composer update`:
```php
    "xxx/xxx": "xxx.xx.*"
```

### Step 2. In `config/app.php` add the ServiceProvider to the providers array
```
xxx\xxx\ServiceProvider::class,
```

And if you want to use the facade to log messages, add this to your facades in `config/app.php`:

```
'xxx' => xxx\xxx\Facade::class,
```

### step 3. Copy the package config to  local config with the publish command:

```
php artisan vendor:publish
```

### Step 4. More configure if needed
      ...
## Usage

## Requirements
- [ Laravel-frame ](https://github.com/laravel/laravel.git)
- [...]()

# Authored By  [followtheart](https://github.com/followtheart)
