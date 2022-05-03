<html>
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>@yield('title')</title>
 <link rel="stylesheet" href="{{asset('css/app.css')}}">
 </head>
 <body>
 @include('layouts.partials.header')
 <main>
 @yield('content')
 </main>
 @include('layouts.partials.footer')
 </body>
</html>
