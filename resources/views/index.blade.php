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
    <h2 id="a">Nouveauté</h2>
        <div class="container border border-2 py-3 rounded-3 my-3">
            <div class="row">
                <div class="col-6">
                    <div class="container">
                        <a href=""><img src="./images/katana.jpg" class="miniature rounded-3" alt=""></a>
                    </div>
                </div>
                <div class="col-6">
                    <a href="" class="liens-card">
                        <h4>Pack de 5 Katana</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero impedit neque, beatae fugit porro enim modi quis saepe totam eum accusamus quasi expedita ullam quod animi, ut distinctio quia?
                        </p>
                        <h4>Price</h4>
                        <p>4 000€</p>
                    </a>
                <a href="page.html"> <button type="submit" class="btn btn-secondary">Ajouter aux panier</button></a>
                </div>
            </div>
        </div>

         
        <div id="histoire">
            <h3>Histoire</h3>
        <p class="histoire">Le katana (刀 ou かたな?) est un sabre (arme blanche courbe à un seul tranchant) de plus de 60 cm. 
            Par extension, le terme katana sert souvent à désigner l'ensemble des sabres japonais 
            (tachi, uchigatana, etc.).

            Symbole de la caste des samouraïs, le katana est une arme de taille 
            (dont on utilise le tranchant) et d'estoc (dont on utilise la pointe). 
            Il est porté glissé dans la ceinture, tranchant dirigé vers le haut à la 
            ceinture du côté gauche (vers le bas aussi si le porteur est un cavalier). 
            L'ensemble wakizashi-katana s'appelle le daishō.
            <br><br>
            Durant certaines périodes plus calmes de l'histoire japonaise,
             le katana avait plus un rôle d'arme d'apparat que d'arme réelle. 
             Sa production dépasse celle du tachi pendant l'époque de Muromachi (après 1392).
            <br><br><br></p>
            <h3>Description</h3>
            <p>
            Le katana est un nihonto (sabre japonais) courbe qui se porte glissé dans 
            l’obi (ceinture) tranchant vers le haut, à la différence du tachi, l'épée de cavalerie.
            <br><br>
            Le katana a une taille de lame supérieure à deux shaku (deux fois 30,2 cm) soit 60 cm 
            mais cette longueur peut varier selon les périodes et techniques de guerre. Il se manie 
            généralement à deux mains, mais certaines techniques, comme la technique à deux sabres de 
            Miyamoto Musashi, ou des techniques impliquant l'utilisation du fourreau, supposent le maniement 
            à une main. Sa poignée (tsuka), suivant le climat politique, variait entre la largeur de deux ou 
            trois mains. La tsuka commence par une garde (tsuba) qui protège la main, et se termine par une 
            extrémité utilisée pour porter des coups (tsuka-gashira ou kashira). Le poids d'un katana standard 
            varie de 800 grammes à 1 300 grammes.
        </p>
        <h3>Fabrication</h3>
        <p>Terminée en biseau, 
            la lame du katana est traditionnellement forgée à partir d'un acier 
            brut nommé tamahagane, transformé en acier composite. Dur pour l'enveloppe,
             et plus souple pour le cœur, ils sont chacun feuilletés de nombreuses fois, 
             puis intimement soudés l'un à l'autre à la forge. Ensuite, en recouvrant d'un
              mélange d'argile isolant le dos et les flancs, la lame subit une « trempe sélective »,
               qui conférera à l'arme les qualités combinées de dureté du tranchant ainsi que de résistance 
               aux chocs pour l'ensemble. Le processus complexe de création du katana est dû à la mauvaise qualité 
               du minerai disponible au Japon avant l'époque moderne.
            <br> <br>
            L'étape suivante est le polissage, effectué par un togishi qui affûte la lame en révélant les 
            structures cristallines à l'aide de pierres volcaniques à grain décroissant.</p>
        </div>
        
<script src="js\temer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>