<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title><?= $title ?></title>
        <link href="./public/css/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <!-- le menu de la page -->
        <div class="bg-dark">
            <div class="container">
                <div class="row">
                    <nav class="col navbar navbar-expand-lg navbar-dark">
                        <a class="navbar-brand" href="index.php">
                            <img src="./public/images/logo.png" width="50" height="50" alt="Info Logo" />
                            Stage AFPA 2021 DWWM - Mission 7
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="navbarContent" class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="../index.php">Accueil</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="../liste_travaux.php">Travaux</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <?= $content ?>

        <!-- le pied de page -->
        <div class="bg-light mt-5">
            <div class="container">
            <div class="row pt-4 pb-3">
                <div class="col">
                <ul class="list-inline text-center">
                    <li class="list-inline-item"><a href="#">À propos</a></li>
                    <li class="list-inline-item">&middot;</li>
                    <li class="list-inline-item"><a href="#">Vie privée</a></li>
                    <li class="list-inline-item">&middot;</li>
                    <li class="list-inline-item"><a href="#">Conditions d'utilisations</a></li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
            integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
            integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
        </script>
    </body>
</html>
