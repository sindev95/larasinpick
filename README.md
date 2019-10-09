# sinlarapick

This is a simple helper package to add jQuery ui datepicker in Laravel apps.

# Installing

Require the package with composer using the following command :

```
composer require sindev/laravel-datepicker
```

# Usage
You can use it in your routes like this :
```php
Route::get('/', function () {
    $datepicker = \Larapick::Init();
    return view('welcome',compact('datepicker'));
});

```

and in your view you need to add the datepicker scripts

```html
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<body>
    {!! $datepicker->datepicker() !!}
    {!! $datepicker->scripts() !!}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>
```
