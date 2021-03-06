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
    <h2 id="a">Nouveaut??</h2>
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
                        <p>4 000???</p>
                    </a>
                <a href="page.html"> <button type="submit" class="btn btn-secondary">Ajouter aux panier</button></a>
                </div>
            </div>
        </div>

         
        <div id="histoire">
            <h3>Histoire</h3>
        <p class="histoire">Le katana (??? ou ??????????) est un sabre (arme blanche courbe ?? un seul tranchant) de plus de 60 cm. 
            Par extension, le terme katana sert souvent ?? d??signer l'ensemble des sabres japonais 
            (tachi, uchigatana, etc.).

            Symbole de la caste des samoura??s, le katana est une arme de taille 
            (dont on utilise le tranchant) et d'estoc (dont on utilise la pointe). 
            Il est port?? gliss?? dans la ceinture, tranchant dirig?? vers le haut ?? la 
            ceinture du c??t?? gauche (vers le bas aussi si le porteur est un cavalier). 
            L'ensemble wakizashi-katana s'appelle le daish??.
            <br><br>
            Durant certaines p??riodes plus calmes de l'histoire japonaise,
             le katana avait plus un r??le d'arme d'apparat que d'arme r??elle. 
             Sa production d??passe celle du tachi pendant l'??poque de Muromachi (apr??s 1392).
            <br><br><br></p>
            <h3>Description</h3>
            <p>
            Le katana est un nihonto (sabre japonais) courbe qui se porte gliss?? dans 
            l???obi (ceinture) tranchant vers le haut, ?? la diff??rence du tachi, l'??p??e de cavalerie.
            <br><br>
            Le katana a une taille de lame sup??rieure ?? deux shaku (deux fois 30,2 cm) soit 60 cm 
            mais cette longueur peut varier selon les p??riodes et techniques de guerre. Il se manie 
            g??n??ralement ?? deux mains, mais certaines techniques, comme la technique ?? deux sabres de 
            Miyamoto Musashi, ou des techniques impliquant l'utilisation du fourreau, supposent le maniement 
            ?? une main. Sa poign??e (tsuka), suivant le climat politique, variait entre la largeur de deux ou 
            trois mains. La tsuka commence par une garde (tsuba) qui prot??ge la main, et se termine par une 
            extr??mit?? utilis??e pour porter des coups (tsuka-gashira ou kashira). Le poids d'un katana standard 
            varie de 800 grammes ?? 1 300 grammes.
        </p>
        <h3>Fabrication</h3>
        <p>Termin??e en biseau, 
            la lame du katana est traditionnellement forg??e ?? partir d'un acier 
            brut nomm?? tamahagane, transform?? en acier composite. Dur pour l'enveloppe,
             et plus souple pour le c??ur, ils sont chacun feuillet??s de nombreuses fois, 
             puis intimement soud??s l'un ?? l'autre ?? la forge. Ensuite, en recouvrant d'un
              m??lange d'argile isolant le dos et les flancs, la lame subit une ?? trempe s??lective ??,
               qui conf??rera ?? l'arme les qualit??s combin??es de duret?? du tranchant ainsi que de r??sistance 
               aux chocs pour l'ensemble. Le processus complexe de cr??ation du katana est d?? ?? la mauvaise qualit?? 
               du minerai disponible au Japon avant l'??poque moderne.
            <br> <br>
            L'??tape suivante est le polissage, effectu?? par un togishi qui aff??te la lame en r??v??lant les 
            structures cristallines ?? l'aide de pierres volcaniques ?? grain d??croissant.</p>
        </div>
        
<script src="js\temer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>