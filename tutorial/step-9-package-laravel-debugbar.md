#Laravel-5-Starter Tutorial for  Laravel-debugbar

## Configuration

### Step 1.Require this package with composer:

```
composer require barryvdh/laravel-debugbar
```


### Step 2. In `config/app.php` add the ServiceProvider to the providers array
> If you use a catch-all/fallback route, make sure you load the Debugbar ServiceProvider before your own App ServiceProviders.


```
Barryvdh\Debugbar\ServiceProvider::class,
```

And if you want to use the facade to log messages, add this to your facades in app.php:

```
'Debugbar' => Barryvdh\Debugbar\Facade::class,
```


### step 3. Copy the package config to your local config with the publish command:

```
php artisan vendor:publish
```

### Step 4. More configure in `config/debugbar.php`

## Usage
You can now add messages using the Facade (when added), using the PSR-3 levels (debug, info, notice, warning, error, critical, alert, emergency):

```php
Debugbar::info($object);
Debugbar::error('Error!');
Debugbar::warning('Watch out…');
Debugbar::addMessage('Another message', 'mylabel');
```

And start/stop timing:

```php
Debugbar::startMeasure('render','Time for rendering');
Debugbar::stopMeasure('render');
Debugbar::addMeasure('now', LARAVEL_START, microtime(true));
Debugbar::measure('My long operation', function() {
    // Do something…
});
```

Or log exceptions:

```php
try {
    throw new Exception('foobar');
} catch (Exception $e) {
    Debugbar::addException($e);
}
```

There are also helper functions available for the most common calls:

```php
// All arguments will be dumped as a debug message
debug($var1, $someString, $intValue, $object);

start_measure('render','Time for rendering');
stop_measure('render');
add_measure('now', LARAVEL_START, microtime(true));
measure('My long operation', function() {
    // Do something…
});
```

If you want you can add your own DataCollectors, through the Container or the Facade:

```php
Debugbar::addCollector(new DebugBar\DataCollector\MessagesCollector('my_messages'));
//Or via the App container:
$debugbar = App::make('debugbar');
$debugbar->addCollector(new DebugBar\DataCollector\MessagesCollector('my_messages'));
```

By default, the Debugbar is injected just before `</body>`. If you want to inject the Debugbar yourself,
set the config option 'inject' to false and use the renderer yourself and follow http://phpdebugbar.com/docs/rendering.html

```php
$renderer = Debugbar::getJavascriptRenderer();
```

Note: Not using the auto-inject, will disable the Request information, because that is added After the response.
You can add the default_request datacollector in the config as alternative.

### Enabling/Disabling on run time
You can enable or disable the debugbar during run time.

```php
\Debugbar::enable();
\Debugbar::disable();
```

NB. Once enabled, the collectors are added (and could produce extra overhead), so if you want to use the debugbar in production, disable in the config and only enable when needed.

## Requirements
- [ Laravel-frame ](https://github.com/laravel/laravel.git)
- [laravel-debugbar](https://github.com/barryvdh/laravel-debugbar.git)


# Authored By  [followtheart](https://github.com/followtheart)
