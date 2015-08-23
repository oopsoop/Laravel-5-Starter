#Laravel-5-Starter Tutorial for Admin Package sleeping-owl Configure

## Configuration

### Step 1.Require  package in  composer.json and run `composer update`:(using dev-development branch)
```php
    "sleeping-owl/admin": "dev-development#49a3a4ccd1b2a60fe7f05c1441be6bae7ff2cc27"
```

### Step 2. In `config/app.php` add the ServiceProvider to the providers array
```php
SleepingOwl\Admin\AdminServiceProvider::class,
SleepingOwl\AdminLteTemplate\AdminLteTemplateServiceProvider::class,
```

And if you want to use the facade to log messages, add this to your facades in `config/app.php`:

```
'Admin'         => SleepingOwl\Admin\Admin::class,
'AdminAuth'     => SleepingOwl\AdminAuth\Facades\AdminAuth::class,
'Column'        => SleepingOwl\Admin\Columns\Column::class,
'ColumnFilter'  => SleepingOwl\Admin\ColumnFilters\ColumnFilter::class,
'Filter'        => SleepingOwl\Admin\Filter\Filter::class,
'AdminDisplay'  => SleepingOwl\Admin\Display\AdminDisplay::class,
'AdminForm'     => SleepingOwl\Admin\Form\AdminForm::class,
'AdminTemplate' => SleepingOwl\Admin\Templates\Facade\AdminTemplate::class,
'FormItem'      => SleepingOwl\Admin\FormItems\FormItem::class,
```

### step 3. Copy the package config to  local config with the publish command:

```
php artisan vendor:publish
php artisan admin:install
```

## Usage

## Requirements
- [ Laravel-frame ](https://github.com/laravel/laravel.git)
- [sleeping-owl/admin](https://github.com/sleeping-owl/admin.git)

# Authored By  [followtheart](https://github.com/followtheart)
