<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">
     <link rel="stylesheet" href="{{ URL::asset('css/page.css') }}">
    <title>Pannier</title>
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
    <h2 class="m-5 d-flex justify-content-center">Votre pannier</h2>
    <div class="container my-5">
      <div class="row">
        <div class="col-6">
          <div class="row tesi p-3">
            <div class="col-6">
              <img class="img-fluid" src="images/r.jpg" alt="">
            </div>
            <div class="col-6">
              <h4></h4>
              <h5>Price: </h5>
              <button type="button" class="btn btn-secondary">Acheter</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-12">
          <div class="row tesi p-3">
            <div class="col-6">
              <img class="img-fluid" src="images\0011194_tori-elite-katana.jpeg" alt="">
            </div>
            <div class="col-6">
              <h4 id="nomproduit">Nom du produit</h4>
              <h5 id="prix">Price: 500€</h5>
              <button type="button" class="btn btn-secondary">Acheter</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/js/pannier.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
  </body>
</html>