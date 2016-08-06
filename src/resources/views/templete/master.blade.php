<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>

        <div>@include('templete.header')</div>

        <div>@yield('content')</div>

        <div>@include('templete.footer')</div>

    </body>
</html>
