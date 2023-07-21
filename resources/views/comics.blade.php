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
    <!-- main -->
    <main class="bg-dark py-5">
        <div class="container">
            <div class="row">
                @foreach($comicsThumb as $comic)
                    <div class="col-2 my-3">
                        <div class="card h-100">
                            <img src="{{ $comic['thumb'] }}">
                            <h3> {{ $comic['title'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
