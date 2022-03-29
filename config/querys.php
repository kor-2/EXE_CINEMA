<?php

require 'connect.php';

/* affichage films */

$filmsSQL = $db->prepare('
SELECT 
    titre,
    DATE_FORMAT(sortie, "%Y") AS sortie,
    TIME_FORMAT(SEC_TO_TIME(duree * 60),  "%H H %i min") AS duree ,
    note
FROM films
');

$filmsSQL->execute();
$films = $filmsSQL->fetchAll();

/* affichage d'un films */

$detailFilms = $db->prepare('
SELECT 
    f.titre, 
    DATE_FORMAT(f.sortie, "%Y") AS sortie,
    TIME_FORMAT(SEC_TO_TIME(f.duree * 60),  "%H : %i") AS duree ,
    r.prenom,
    r.nom
FROM films f
INNER JOIN realisateurs r ON f.id = r.id
WHERE f.id = 1
');

$detailFilms->execute();
$detFilms = $detailFilms->fetchAll();
/* liste des realisateurs */
$realQuery = $db->prepare('
SELECT 
    nom,
    prenom,
    bd_date
FROM realisateurs 
');

$realQuery->execute();
$realisateurs = $realQuery->fetchAll();

/* affichage d'un realisateur */
$detailReals = $db->prepare('
SELECT 
    CONCAT(r.prenom,\' \',r.nom) AS nom,
    r.bd_date,
    f.titre, 
    DATE_FORMAT(f.sortie, "%Y") AS date_
FROM films f
INNER JOIN realisateurs r ON f.id_realisateur = r.id
WHERE f.id_realisateur = 1
');

$detailReals->execute();
$detReals = $detailReals->fetchAll();
