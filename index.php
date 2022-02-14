<h1>POO Cinema</h1>

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



<h2>Resultat</h2>
<?php

require 'class/Film.php';
require 'class/Genre.php';
require 'class/Personne.php';
require 'class/Role.php';

$sNeill = new Acteur('Neill', 'Sam', 'M', '1947-08-14');
$kReeves = new Acteur('Reeves', 'Keanu', 'M', '1960-01-26');
$mMikkelsen = new Acteur('Mikkelsen', 'Mads', 'M', '1970-05-20');

$stevenSpiel = new Realisateur('Speilberg', 'Steven', 'M', '1946-12-18');
$guyYves = new Realisateur('Guy', 'Yves', 'M', '1900-02-08');

$sf = new Genre('Science-fiction');
$avt = new Genre('Aventure');
$cmd = new Genre('Comédie');

$jPark = new Film('Jurrassic Park', '1993-06-11', 128, $stevenSpiel, 'Les dinos go graou è_é.', $sf, [$encodeSN = serialize($sNeill), $encodeKR = serialize($kReeves)]);

$a1 = strval($sNeill);
$a2 = strval($mMikkelsen);
$DrGrant = new Role('Dr.Grant', [$a1, $a2]);

echo $DrGrant->showRole();
echo $sNeill->showFilmo();
echo $kReeves->showFilmo();
echo $stevenSpiel->showReal();
echo $sf->showGenre();

//$ouioui = new Film('oui oui', '1810-06-11', 10, $guyYves, 'haha les blagues ou quoi ???!!!.', $sf, [strval($mMikkelsen), strval($kReeves)]);
/*
echo $sNeill.'<br>';
$encodeSN = serialize($sNeill);
echo $encodeSN.'encode<br>';
$unser = unserialize($encodeSN);
echo "$unser <br>";
echo gettype($unser);
*/
