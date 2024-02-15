CREATE TRIGGER ApresModificationStatut AFTER UPDATE ON utilisateurs
 FOR EACH ROW BEGIN

IF OLD.statut != NEW.statut THEN
    INSERT INTO historiquestatututilisateurs
    (idUtilisateur, ancienStatut, nouveauStatut)
    VALUES (NEW.idUtilisateur, OLD.statut, NEW.statut);
END IF;

END