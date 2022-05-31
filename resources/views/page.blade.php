<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/page.css') }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active  mt-2 mx-3" aria-current="page" href="/">Acceuil</a>
                        <a class="nav-link  mt-2 mx-3" href="/tamien">Store</a>
                        <a class="nav-link  mt-2 mx-3 justify-content-end" href="/panier">Votre pannier </a>
                        <a class="nav-link justify-content-end" href="#"><img src="asset/image3.png" class="w-50 h-80" alt=""></a>
                        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                            @if (Route::has('login'))
                                @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                
                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                                    {{-- <a href="{{ url('/dashboard') }}" class="">Dashboard</a> --}}
                                @else
                                    <a href="{{ route('login') }}" class="">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="">Register</a>
                                    @endif
                                @endauth
                            @endif
                    </div>
                </div>
            </div>
        </nav>
    </header> 
    <div class="container border border-2 py-3 rounded-3 mt-3">
        <div class="container rounded-3 mb-5">
            <img src="./images/katana.jpg" class="akhi" alt="">
        </div>
        <div class="container my-3">
            <h4 class="d-flex justify-content-center text-center my-3">Titre</h4>
            <h6 class="my-3 d-flex justify-content-center text-center">Price</h6>
            <p class="d-flex justify-content-center text-center my-3">
                4 000€
            </p>
            <div class="d-flex justify-content-evenly">
                <button type="button" class="btn btn-secondary px-5">Acheter</button>
                <button type="submit" class="btn btn-secondary" onclick="">Ajouter aux panier</button>
            </div>
            <p id="acheté" class="d-flex justify-content-center text-center my-3"></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>