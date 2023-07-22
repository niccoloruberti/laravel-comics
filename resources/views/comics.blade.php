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
    <!-- footer -->
    <div class="background">
        <footer>
            <!-- sezione comics, merchandise, subscription, shop locator, power visa -->
            <div class="acquisti">
                <div>
                    <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}">
                    <span>digital comics</span>
                </div>
                <div>
                    <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}">
                    <span>dc merchandise</span>
                </div>
                <div>
                    <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}">
                    <span>subscription</span>
                </div>
                <div>
                    <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}">
                    <span>comic shop locator</span>
                </div>
                <div>
                    <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}">
                    <span>dc power visa</span>
                </div>
            </div>
            <div class="container">
            <!-- sezione link utili -->
            <div class="link-utili">
                <!-- dc comics -->
                <div>
                    <ul>
                        <h3>dc comics</h3>
                        <li>Characters</li>
                        <li>Comics</li>
                        <li>Movies</li>
                        <li>TV</li>
                        <li>Games</li>
                        <li>Videos</li>
                        <li>News</li>
                    </ul>
                </div>
                <!-- shop -->
                <div>
                    <ul>
                        <h3>shop</h3>
                        <li>Shop DC</li>
                        <li>Shop DC Collectibles</li>
                    </ul>
                </div>
                <!-- dc -->
                <div>
                    <ul>
                        <h3>dc</h3>
                        <li>Terms Of Use</li>
                        <li>Privacy policy (New)</li>
                        <li>Ad Chioces</li>
                        <li>Advertising</li>
                        <li>Jobs</li>
                        <li>Subscriptions</li>
                        <li>Talent Workshops</li>
                        <li>CPSC Certificates</li>
                        <li>Ratings</li>
                        <li>Shop Help</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <!-- sites -->
                <div>
                    <ul>
                        <h3>sites</h3>
                        <li>DC</li>
                        <li>MAD Magazine</li>
                        <li>DC Kids</li>
                        <li>DC Universe</li>
                        <li>DC Power Visa</li>
                    </ul>
                </div>
            </div>
            <!-- dc logo -->
            <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}">
            </div>
            <!-- sezione collegamenti social -->
            <div class="social">
                <!-- sign up -->
                <div>
                    <button>sign-up now!</button>
                </div>
                <!-- social -->
                <div>
                    <span>follow us</span>
                    <img src="{{Vite::asset('resources/img/footer-facebook.png')}}">
                    <img src="{{Vite::asset('resources/img/footer-twitter.png')}}">
                    <img src="{{Vite::asset('resources/img/footer-youtube.png')}}">
                    <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}">
                    <img src="{{Vite::asset('resources/img/footer-periscope.png')}}">
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
