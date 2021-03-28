<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>AFPA DWWM Mission 7 - Accueil</title>
</head>

<body>

    <!-- le menu de la page -->
    <?php include('menu.php'); ?>

    <div class="container">
        <div class="row my-3">
            <div class="col">
                <h1>A lire</h1>
                <p>
                    Cette mission 7 de la formation AFPA "Développeur Web & Web Mobile" consiste à réaliser les TP du cours&nbsp;
                    <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql" 
                    target="_blank">Concevez votre site web avec PHP et MySQL</a> 
                    sur OPENCLASSROOMS puis d'améliorer le TP Blog à l'aide du cours&nbsp;
                    <a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php"
                    target="_blank">Adoptez une architecture MVC en PHP</a>
                </p>

                <h2>Participants (par ordre alphabétique) à cette mission :</h2>
                <ul>
                    <li>
                        <p><a href="https://github.com/chlo06" target="_blank">Fernandez-Garcia Chloé</a></p>
                    </li>
                    <li>
                        <p><a href="https://github.com/Christophe-Mannebarth" target="_blank">Mannebarth Christophe</a></p>
                    </li>
                    <li>
                        <p><a href="https://github.com/quentinM22" target="_blank">Meunier Quentin</a></p>
                    </li>
                </ul>

                <h2>Code source sur github :</h2>
                <ul>
                    <li>
                        <p><a href="https://github.com/Christophe-Mannebarth/afpa-dwwm_mission7_projet-PHP-SQL-MVC" target="_blank">
                        afpa-dwwm_mission7_projet-PHP-SQL-MVC </a></p>
                    </li>
                </ul>

                <h2>Identifiants utilisés pour les accès aux parties protégées des TP:</h2>
                <ul>
                    <li>
                        <p>Administrateur (TP Blog et TP Espace membres): ID = Chris / MDP = chris123</p>
                    </li>
                    <li>
                        <p>Utilisateur lambda (TP Espace membres): ID = bob / MDP = bob123</p>
                    </li>
                </ul>

                <h2>Voici les TP de ces cours:</h2>
                <p>Liste&nbsp;<a href="./liste_travaux.php">des travaux pratiques</a> réalisés par l'équipe <a href="https://github.com/Digi-Geeks" target="_blank">DIGI GEEKS</a></p>

                <h2>Détails concernant le cours PHP et MySQL:</h2>
                <p>
                    Blogs, réseaux sociaux, sites e-commerce, API… Grâce à&nbsp;PHP, 
                    nous pouvons développer toutes sortes de sites web !
                </p>
                <p>
                    Le langage PHP a justement été conçu pour créer des sites "vivants" (on parle de 
                    <em>sites dynamiques</em>). 
                    Si vous voulez apprendre à créer vous aussi des <strong>sites web dynamiques</strong>, 
                    c'est votre jour de chance : vous êtes sur un cours pour vrais débutants en PHP !<br>
                    L'essentiel, c'est de lire en entier les chapitres dans l'ordre. 
                    Après, ça passe tout seul et vous vous étonnerez bientôt de ce que vous êtes capable de faire !&nbsp;
                </p>
                <p>À la fin de ce cours, vous serez capable de :</p>
                <ul>
                    <li>
                        <p>installer votre environnement de développement (serveur web, logiciel de gestion de bases
                            de données) ;</p>
                    </li>
                    <li>
                        <p>écrire des instructions en PHP ;</p>
                    </li>
                    <li>
                        <p>respecter les conventions d'écriture de code ;</p>
                    </li>
                    <li>
                        <p>programmer des fonctions ;</p>
                    </li>
                    <li>
                        <p>enregistrer des données dans un fichier ;</p>
                    </li>
                    <li>
                        <p>stocker des données dans les sessions et les cookies ;</p>
                    </li>
                    <li>
                        <p>transmettre des données ;</p>
                    </li>
                    <li>
                        <p>communiquer avec la base de données en SQL ;</p>
                    </li>
                    <li>
                        <p>écrire des fonctions SQL basiques ;</p>
                    </li>
                    <li>
                        <p>utiliser les expressions régulières en PHP.</p>
                    </li>
                </ul>
                <p><strong>Prérequis : </strong>pour utiliser PHP, il faut connaître au préalable les langages HTML et CSS.</p>
                <p>
                    Ces langages ne vous disent rien ? Dans ce cas, je vous invite d'abord à suivre mon&nbsp;
                    <a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3" 
                    target="_blank">cours sur la création de site web en HTML5 et CSS3</a> avant de revenir ici!
                </p>
                <p><strong>Outils nécessaires :</strong></p>
                <ul>
                    <li>
                        <p>Un éditeur de code comme Visual Studio Code</p>
                    </li>
                    <li>
                        <p>Sous Windows, il faut installer <a href="https://wampserver.aviatechno.net/"
                                target="_blank" rel="noopener noreferrer nofollow">WAMP</a></p>
                    </li>
                    <li>
                        <p>Sous Mac, il faut installer <a href="https://www.mamp.info/fr/downloads/"
                                target="_blank" rel="noopener noreferrer nofollow">MAMP</a></p>
                    </li>
                    <li>
                        <p>Sous Linux, il faut installer <a href="https://www.apachefriends.org/fr/index.html"
                                target="_blank" rel="noopener noreferrer nofollow">XAMPP</a></p>
                    </li>
                </ul>
                
                <h2>Détails concernant le cours MVC:</h2>
                <p>Vous connaissez les bases de la programmation en PHP ? 
                Vous avez peut-être déjà lu Concevez votre site web PHP et MySQL...
                et vous vous demandez comment aller plus loin ?</p>

                <p>Comment font les professionnels ? Quelle structure de code adoptent-ils ?</p>

                <p>Ils utilisent des concepts de programmation plus avancés, 
                comme <strong>MVC</strong>, la <strong>Programmation Orientée Objet (POO)</strong> et bien d'autres choses... 
                Ce sont des techniques que nous allons découvrir pas à pas dans ce cours, 
                sur la base d'un projet concret que nous allons améliorer progressivement.</p>

                <p>Vous avez déjà fait vos premiers pas en PHP à 4 pattes... 
                Félicitations, il est maintenant temps d'apprendre à marcher pour de bon !</p> 
            </div>
        </div>
    </div>
    <!-- le pied de la page -->
    <?php include('pieddepage.php'); ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
    <script src="./js/research.js"></script>
</body>

</html>