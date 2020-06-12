<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>personaggi</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header>
     @include('header')
    </header>
    <main>
     @yield('contenuto')
    </main>
    <footer>
     @include('footer')
    </footer>

  </body>
</html>
