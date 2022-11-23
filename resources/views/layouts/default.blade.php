<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yeild('titile')</title>
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
  background-color: #1d2630;
  color: #f3f3f3;
}

h1 {
  margin-top: 20px;
  margin-left: 20px;
}

.component-body {
  margin: 20px;
}
</style>

</html>