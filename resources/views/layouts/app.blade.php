<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <title>Lara-Todos</title>
</head>
<body>
  @include('inc.navbar')
  <div class="container">
    @include('inc.messages')
    @yield('content')
  </div>

  <footer class="bg-dark text-light text-center">
    <p>Copyright &copy; 2018 Lara-Todos</p>
  </footer>
</body>
</html>