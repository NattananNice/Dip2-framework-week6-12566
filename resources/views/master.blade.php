<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blade-@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    @include('layout.navbar')

    <div class="container text-center">
      <div class="row">
        <div class="col-md-4">
          <ul class="list-group text-start">
            <li class="list-group-item active" aria-current="true">Menu</li>
            <li class="list-group-item"><a href="{{ url('home') }}" class="text-decoration-none">Home</a></li>
            <li class="list-group-item"><a href="{{ url('about') }}" class="text-decoration-none">About</a></li>
            <li class="list-group-item"><a href="{{ url('contact') }}" class="text-decoration-none">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
