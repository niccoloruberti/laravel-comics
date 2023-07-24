<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <!-- header -->
    @include ('partials.header')
    <!-- jumbotron -->
    <div class="jumbotron">
        <button>current series</button>
    </div>
    <!-- main -->
    <main>
        @yield('content')
    </main>
    <!-- footer -->
    @include ('partials.footer')
</body>

</html>
