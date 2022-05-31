<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/page.css') }}">
    <title>Store</title>
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
    <h2>Nos Produits</h2>
    <div id="card">
        <div class="container border border-2 py-3 rounded-3  my-3 ">
            <div class="row">
                <div class="col-6">
                    <div class="container">
                        <a href=""><img src="./images/test.avif" class="miniature rounded-3" alt=""></a>
                    </div>
                </div>
                <div class="col-6">
                    <a href="" class="liens-card">
                        <h4 id="nom">Nom du produit</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero impedit neque, beatae fugit porro enim modi quis saepe totam eum accusamus quasi expedita ullam quod animi, ut distinctio quia?
                        </p>
                        <h4 id="pri">Price</h4>
                        <p>500€</p>
                    </a>
                    <button type="submit" class="btn btn-secondary">Ajouter aux panier</button>
                </div>
            </div>
        </div>
        <div class="container border border-2 py-3 rounded-3 my-3">
            <div class="row">
                <div class="col-6">
                    <div class="container">
                        <a href=""><img src="./images/blanc.avif" class="miniature rounded-3" alt=""></a>
                    </div>
                </div>
                <div class="col-6">
                    <a href="" class="liens-card">
                        <h4>Nom du produit</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero impedit neque, beatae fugit porro enim modi quis saepe totam eum accusamus quasi expedita ullam quod animi, ut distinctio quia?
                        </p>
                        <h4>Price</h4>
                        <p>500€</p>
                    </a>
                    <button type="submit" class="btn btn-secondary">Ajouter aux panier</button>
                </div>
            </div>
        </div>
        <div class="container border border-2 py-3 rounded-3 my-3">
            <div class="row">
                <div class="col-6">
                    <div class="container">
                        <a href=""><img src="./images/bambou.jpg" class="miniature rounded-3" alt=""></a>
                    </div>
                </div>
                <div class="col-6">
                    <a href="" class="liens-card">
                        <h4>Katana au bambou pour entrainement</h4>
                        <p>
                            Ce katana possède une lame à gorge aiguisée, un manche tressé 
                            noir et marron orné d'un Komainu argenté, une garde (Tsuba) alvéolée style 
                            ailes de libellule et un magnifique fourreau (Saya) en bois avec 
                            revêtement résistant et motif écailles de serpent.
                        </p>
                        <h4>Price</h4>
                        <p>750€</p>
                    </a>
                    <button type="submit" class="btn btn-secondary">Ajouter aux panier</button>
                </div>
            </div>
        </div>
    </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>