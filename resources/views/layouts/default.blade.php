<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo App</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
  <h1>@yield('title')</h1>
  <div class="component-body">
    @yield('content')
  </div>
</body>

<style>
  body {
    font-size: 16px;
    width: 100vw;
    min-height: 100vh;
    box-sizing: border-box;
  }

</style>

</html>