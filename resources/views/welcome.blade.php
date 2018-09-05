<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>SPA Forum</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        <div id="app">
            <app-component><app-component/>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>