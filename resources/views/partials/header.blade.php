<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content d-flex justify-content-around align-items-center">
                        <div class="logo py-3">
                            <img src= "{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
                        </div>
                        <nav class="navbar navbar-expand">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">characters</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName () === 'comics' ? 'fw-bold active' : '' }}" href="/">comics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">movies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">tv</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">games</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">collectibles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">videos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">fans</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">news</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">shop</a>
                                </li>
                            </ul>
                        </nav>
                        <input class="form-control me-2 h-25 w-25" type="search" placeholder="Search" aria-label="Search">
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>