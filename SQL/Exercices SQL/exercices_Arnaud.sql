Exercice 1 :

CREATE VIEW vinyl_details AS
    SELECT v.nom AS nom_vinyl, p_nom AS nom_piste, p_duree
    FROM vinyl AS vinyl
    INNER JOIN pistes AS p ON v.idVinyl = p.idVinyl
    ORDER BY nom_vinyl;

Exercice 2 : 

CREATE VIEW vinyl_general AS
   SELECT v.*, c.nom AS nom_categorie, g.nom AS nom_groupe FROM vinyl AS v 
   INNER JOIN categories_musique AS c ON c.idCategorie=v.idCategorie
   INNER JOIN groupes AS g ON g.idGroupe=v.idGroupe
   ORDER BY nom_groupe;

Exercice 3 :

CREATE VIEW groupe_details AS
    SELECT g.nom AS nom_groupe, m.nom AS nom_musicien, m.prenom AS prenom_musicien FROM groupe AS g
    INNER JOIN musiciens_groupe AS mg ON mg.idGroupe = g.idGroupe
    INNER JOIN musiciens AS m ON m.idMusicien = mg.idMusicien
    ORDER BY nom_groupe;

Exercice 4 :

CREATE VIEW commandes_details AS
   SELECT v.nom, v.Prix_Ht AS Prix_Vinyl, c.montant_HT AS Montant_HT_Commande, c.date_commande, c.status_commande, v.annee_sortie, v.disponible  FROM Vinyl AS v
   INNER JOIN articles_commande AS ac ON ac.idVinyl = v.idVinyl
   INNER JOIN commandes AS c ON ac.idCommande = c.idCommande
   ORDER BY c.date_commande DESC;

Exercice 5 : 

DELIMITER $$
CREATE PROCEDURE totalVinyls()
BEGIN
    SELECT COUNT(idVinyl) AS total FROM vinyls;
END $$
DELIMITER ;


CALL totalVinyls();

Exercice 6 : 

DELIMITER $$
CREATE PROCEDURE promoCLient()
BEGIN
    SELECT c.nom FROM clients AS c
    INNER JOIN promo_parrainage AS pp ON c.idCLient = pp.idCLient
    WHERE pp.utilise = 0
    ORDER BY c.nom ASC;
END $$
DELIMITER ;

Exercice 7 : 

DELIMITER $$
CREATE PROCEDURE vinylsTriPrix(IN prix_min double(6,2), IN prix_max double(6,2))
BEGIN
    SELECT * FROM vinyl 
    WHERE prix_ht >= prix_min AND prix_ht <= prix_max;
END $$
DELIMITER ;

-----------------------------------------------------------------------------------

DELIMITER $$
CREATE PROCEDURE vinylsTriPrix(IN prix_min double(6,2), IN prix_max double(6,2))
BEGIN
    SELECT * FROM vinyl 
    WHERE prix_ht BETWEEN prix_min AND prix_max;
END $$
DELIMITER ;

Exercice 9 : 

DELIMITER $$
CREATE PROCEDURE vinylsGroupesTriAnnee(IN type VARCHAR(10),IN annee YEAR)
BEGIN
    IF type = 'vinyls' THEN
        SELECT * FROM vinyl WHERE annee_sortie = annee;
    ELSEIF type = 'groupes' THEN
        SELECT * FROM groupes WHERE date_creation = annee;
    ELSE
        SELECT "Erreur : le type retourné est incorrect" AS erreur;
    END IF;
    END $$
DELIMITER ;

Exercice 10 : 

DELIMITER $$
CREATE PROCEDURE vinylsGroupesTriAnnee(IN type VARCHAR(10),IN annee_debut YEAR, IN annee_fin YEAR)
BEGIN
    IF type = 'vinyls' THEN
        IF annee_fin IS NOT NULL AND annee_debut < annee_fin THEN
            SELECT * FROM vinyl WHERE annee_sortie BETWEEN annee_debut AND annee_fin;
        ELSE
            SELECT * FROM vinyl WHERE annee_sortie = annee_debut;
        END IF;
    ELSEIF type = 'groupes' THEN
        IF annee_fin IS NOT NULL AND annee_debut < annee_fin THEN
            SELECT * FROM groupes WHERE date_creation BETWEEN annee_debut AND annee_fin;
        ELSE
            SELECT * FROM groupes WHERE date_creation = annee_debut;
        END IF;
    ELSE
        SELECT "Erreur : le type retourné est incorrect" AS erreur;
    END IF;
END $$
DELIMITER ;

CALL vinylsGroupesTriAnnee('vinyls',2020,NULL);

Exercice 11 : 

BEGIN
    -- déclaration des variables --
    DECLARE totalVinyls INT;
    DECLARE totalMusiciens INT;
    DECLARE totalPistes INT;
    DECLARE totalAuteurs INT;
    DECLARE totalCategories INT;
    DECLARE totalDatas INT;

    -- assignation des variables depuis des requêtes SQL --
    SELECT COUNT() INTO totalVinyls FROM vinyl;
    SELECT COUNT() INTO totalMusiciens FROM musiciens;
    SELECT COUNT() INTO totalPistes FROM pistes;
    SELECT COUNT() INTO totalAuteurs FROM auteurs;
    SELECT COUNT(*) INTO totalCategories FROM categories_musique;

    -- assignation de la variable hors requêtes SQL --
    SET totalDatas = totalVinyls+totalMusiciens+totalPistes+totalAuteurs+totalCategories;

    -- pn retourne le résultat --
    SELECT CONCAT('Total datas :',totalDatas) AS total;
END

