<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Exe cinema</title>
</head>

<body class="uk-width-4-5 uk-margin-auto ">


    <header class="uk-margin-large-top">
        <h1 class="uk-heading-divider"> <i class="fa-solid fa-film fa-bounce"></i></i> POO Cinema</h1>
    </header>


    <main>


        <p>
            Vous avez en charge de gérer différentes entités autour de la thématique du cinéma. <br>
            Les films seront identifiés par leur titre, leur date de sortie en France, leur durée (en minutes) ainsi que
            leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film (synopsis)
            pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre
            cinématographique (science-fiction, aventure, action, ...). <br>
            Votre application devra recenser également les acteurs de chacun des films. On désire connaître le
            nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) joué
            par l’acteur dans le(s) film(s) concerné(s). <br>
            Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de savoir où
            le mettre en place !
        </p>

        <h3>Attention!</h3>

        <ul>
            <li>
                Le rôle (par exemple "James Bond") ne doit être instancié qu'une seule fois (dans la mesure où
                e rôle a été incarné par plusieurs acteurs)
            </li>
        </ul>
        <p>On doit pouvoir</p>

        <ul>
            <li>Lister la liste des acteurs ayant incarné tel rôle</li>
            <li>Lister le casting d'un film (Dans Star Wars, Han Solo a été incarné par Harison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)</li>
            <li>Lister les films par genre (exemple : dans le genre SF il y a X films : Star Wars, Blade Runner, ...)</li>
            <li>Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)</li>
            <li>Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</li>
        </ul>

        <?php

        spl_autoload_register(function ($class_name) {
            require 'class/' . $class_name . '.php';
        });


        $sNeill = new Acteur('Neill', 'Sam', 'M', '1947-08-14');
        $kReeves = new Acteur('Reeves', 'Keanu', 'M', '1960-01-26');
        $mMikkelsen = new Acteur('Mikkelsen', 'Mads', 'M', '1970-05-20');
        $mMarvin = new Acteur('Scribe', 'Marvin', 'M', '2000-06-27');
        $mMartin = new Acteur('King', 'Martin', 'M', '1999-01-10');

        $stevenSpiel = new Realisateur('Speilberg', 'Steven', 'M', '1946-12-18');
        $guyYves = new Realisateur('Guy', 'Yves', 'M', '1900-02-08');
        $baboFabrice = new Realisateur('Babo', 'Fabrice', 'M', '1990-02-08');

        $sf = new Genre('Science-fiction');
        $avt = new Genre('Aventure');
        $cmd = new Genre('Comédie');
        $drame = new Genre('drame');

        $jPark = new Film('Jurrassic Park', '1993-06-11', 128, $stevenSpiel, 'Les dinos go graou è_é.', $sf);
        $ouioui = new Film('Oui oui', '1810-06-11', 10, $stevenSpiel, 'haha les blagues ou quoi ???!!!.', $cmd);
        $nonnon = new Film('Non Non', '2010-06-11', 20, $baboFabrice, 'aie coup dur pour Guilllaume :/ .', $drame);
        $kiddo = new Film('King Kiddo', '2022-01-11', 20, $baboFabrice, 'La cafete du cora.', $drame);

        $DrGrant = new Role('Dr.Grant');
        $superMan = new Role('Superman');
        $guigou = new Role('Guigou');

        $c1 = new Casting($DrGrant, $sNeill, $jPark);
        $c2 = new Casting($DrGrant, $kReeves, $jPark);
        $c3 = new Casting($superMan, $mMikkelsen, $ouioui);
        $c3 = new Casting($guigou, $mMikkelsen, $nonnon);






        ?>

        <section>
            <h2 class="uk-margin-medium-top"><i class="fa-solid fa-video fa-beat-fade"></i>Réalisateur</h2>
            <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
                <?php
                $stevenSpiel->showReal();
                $baboFabrice->showReal();
                ?>
            </div>
        </section>

        <section>
            <h2 class="uk-margin-medium-top"><i class="fa-solid fa-video fa-beat-fade"></i>Acteur</h2>
            <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
                <?php
                $mMikkelsen->showFilmo();
                $sNeill->showFilmo();
                ?>
            </div>
        </section>
        <section>
            <h2 class="uk-margin-medium-top"><i class="fa-solid fa-video fa-beat-fade"></i>Genre</h2>
            <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
                <?php
                $sf->showGenre();
                $drame->showGenre();
                ?>
            </div>
        </section>
        <section>
            <h2 class="uk-margin-medium-top"><i class="fa-solid fa-video fa-beat-fade"></i>Rôle</h2>
            <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
                <?php
                $DrGrant->showRole();
                ?>
            </div>
        </section>
        <section>
            <h2 class="uk-margin-medium-top"><i class="fa-solid fa-video fa-beat-fade"></i>Casting</h2>
            <div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
                <?php
                $jPark->showCasting();
                ?>
            </div>
        </section>




    </main>

    <footer class="uk-margin-small-top">

        <p class="uk-text-center"><i class="fa-solid fa-thumbs-up fa-spin"></i> le footer ou quoi ?? <i class="fa-solid fa-thumbs-up fa-spin"></i></p>


    </footer>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>
</body>

</html>