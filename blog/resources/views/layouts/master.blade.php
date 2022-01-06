<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>My Blog - Home</title>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/app.js"></script>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/font-awesome.min.css" rel="stylesheet" />
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        @include('partials.header')
        @yield('content')
        @include('partials.widgets')
        @include('partials.footer')
    </body>
</html>
