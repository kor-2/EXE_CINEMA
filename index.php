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
        <h1 class="uk-heading-divider uk-text-center"> <i class="fa-solid fa-film fa-bounce"></i></i> PDO Cinema <i class="fa-solid fa-film fa-bounce"></i></i></h1>
    </header>


    <main>


        <p>
            Je vous invite à aller voir ceci et à produire le même type de manipulations avec votre BDD cinéma par exemple :
        </p>


        <ul>
            <li>afficher la liste des films</li>
            <li>afficher le détail d'un film</li>
            <li>afficher la liste des réalisateurs</li>
            <li>afficher le détail d'un réalisateur (avec sa filmographie)</li>
        </ul>

        <h2 class="uk-heading-divider uk-text-center"> <i class="fa-solid fa-hands-asl-interpreting fa-spin"></i> Resultat <i class="fa-solid fa-hands-asl-interpreting fa-spin"></i></h2>

        <?php
        function formaterDateFr(string $date)
        {
            $d = new DateTime($date);
            $day = datefmt_create('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

            return datefmt_format($day, $d);
        }

        require 'config/connect.php';
        /* ------AFFICHAGE FILMS------ */
        echo '<h3> Liste des films </h3>';
        foreach ($films as $film) {
            echo '<p>'.$film['titre'].' sortie en '.$film['sortie'].' il dure '.$film['duree'].' il est noté '.$film['note'].'/5 </p>';
        }
        /* ------AFFICHAGE D'UN FILM------ */

        echo '<h3> Détails d\'un film </h3>';

        foreach ($detFilms as $detFilm) {
            echo '<p>'.$detFilm['titre'].' sortie en '.$detFilm['sortie'].' il dure '.$detFilm['duree'].' il est réalisé par '.$detFilm['prenom'].' '.$detFilm['nom'].'</p>';
        }

        echo '<h3> Liste des réalisateurs </h3>';

        foreach ($realisateurs as $real) {
            echo '<p>'.$real['prenom'].' '.$real['nom'].' né le '.formaterDateFr($real['bd_date']).'</p>';
        }

        echo '<h3> Détails d\'un réalisateurs </h3>';

        echo '<h4> Réalisateur avec l\'id => 1</h4>';
        foreach ($detReals as $real) {
            echo '<p>'.$real['titre'].' '.$real['date_'].'</p>';
        }

        ?>
        
       




    </main>

    <footer class="uk-margin-small-top">

        <p class="uk-text-center"><i class="fa-solid fa-thumbs-up fa-spin"></i> le footer ou quoi ?? <i class="fa-solid fa-thumbs-up fa-spin"></i></p>


    </footer>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>
</body>

</html>