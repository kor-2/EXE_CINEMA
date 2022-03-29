/* -------------------A---------------------- */

SELECT 
    f.titre, 
    DATE_FORMAT(f.sortie, "%Y") AS date_sortie,
    TIME_FORMAT(SEC_TO_TIME(f.duree * 60),  "%H : %i") AS duree ,
    r.nom
FROM films f
INNER JOIN realisateurs r ON f.id = r.id
WHERE f.id = 1

/* -------------------B---------------------- */
/* 2h15 = 135 min */

SELECT f.titre
FROM films f
WHERE f.duree > 135 
ORDER BY f.duree DESC

/* -------------------C---------------------- */

SELECT f.titre, DATE_FORMAT(f.sortie, "%Y") AS date_
FROM films f
WHERE f.id_realisateur = 1
ORDER BY date_ DESC

/* -------------------D---------------------- */
SELECT g.nom, COUNT(c.id_film) AS nb_film
FROM categoriser c
INNER JOIN genre g ON c.id_genre = g.id
GROUP BY g.nom 
ORDER BY nb_film DESC
/* -------------------E---------------------- */

SELECT r.nom, COUNT(f.id_realisateur) AS nb_film
FROM realisateurs r
INNER JOIN films f ON r.id = f.id_realisateur
GROUP BY r.nom 
ORDER BY nb_film DESC


/* -------------------F---------------------- */

SELECT f.titre ,a.nom, a.prenom, a.sexe
FROM casting c
INNER JOIN acteurs a ON c.id_acteur = a.id
INNER JOIN films f ON c.id_film = f.id
WHERE f.id = 1

/* -------------------G---------------------- */

SELECT f.titre, r.nom , DATE_FORMAT(f.sortie, "%Y") AS date_
FROM casting c
INNER JOIN role r ON c.id_role = r.id
INNER JOIN films f ON c.id_film = f.id
WHERE c.id_acteur = 2

/* -------------------H---------------------- */
SELECT CONCAT(r.prenom,' ',r.nom) AS nom
FROM realisateurs r
INNER JOIN acteurs a ON r.prenom = a.prenom 

/* -------------------I---------------------- */
SELECT f.titre, FLOOR(DATEDIFF(NOW(),f.sortie)/365) AS sortie
FROM films f
WHERE sortie < 5
ORDER BY sortie DESC


/* -------------------J---------------------- */

SELECT a.sexe, COUNT(a.id) AS nb
FROM acteurs a
WHERE a.sexe IN ('Homme', 'Femme')
GROUP BY a.sexe

/* -------------------K---------------------- */

SELECT a.nom, FLOOR(DATEDIFF(NOW(),a.bd_date)/365) AS age
FROM acteurs a
WHERE age > 50
ORDER BY age DESC



/* -------------------L---------------------- */

SELECT CONCAT(a.prenom, ' ',a.nom) AS acteur, COUNT(c.id_acteur) AS nb_film
FROM acteurs a
INNER JOIN casting c ON a.id = c.id_acteur
GROUP BY a.id
HAVING nb_film >= 3