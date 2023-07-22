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
    <main class="bg-dark py-5">
        <div class="container">
            <div class="row">
                @foreach($comicsThumb as $comic)
                    <div class="col-2 my-3">
                        <div class="card-content h-100 w-100 d-flex flex-column align-items-center">
                            <img src="{{ $comic['thumb'] }}">
                            <h3 class=" mt-2 text-center text-white text-uppercase w-100"> {{ $comic['title'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center">
            <button>load more</button>
        </div>
    </main>
</body>

</html>
