<?php

// ici c'est pour l'inscription. On peut en avoir un modele aussi pour la connexion, la gestion du stock, et des fournisseurs.


// on crée une classe enfant de la classe BDD(elle permet de se connecter a la base de données)
class inscriptionModele extends BDD{

    public function __construct(){
        parent :: __construct(); // reprend le constructeur de la classe parent, qui établit la connexion avec la bd.
        // le parent a l'attribut bdd qui contient cette connexion a la BD
    }


//on crée une fonction pour insérer un user
    public function insertUser($tab){
        //$tab contient toutes les données de l'user : nom, prenom, mail etc..
        try{
        //on crée notre requete et on la prepare

            $rqt = "INSERT INTO Utilisateur (nom, prenom, mail, pseudo, mdp) VALUES (:nom, :prenom, :mail, :pseudo, :mdp)";
            $select = $this->bdd->prepare($rqt);

            //on remplace les champs dans notre requete
            $select->bindParam(':nom', $tab['nom']);
            $select->bindParam(':prenom', $tab['prenom']);
            $select->bindParam(':mail', $tab['mail']);
            $select->bindParam(':pseudo', $tab['pseudo']);
            $select->bindParam(':mdp', password_hash($tab['mdp'], PASSWORD_DEFAULT)); // il faut veiller a garder cette structure pour comparer après

            if($select->execute()) {
                return true; // en cas de succès dans l'exécution
            } else {
                echo("Erreur lors de l'exécution de la requête");
            }


        }catch(PDOException $e){
            echo "Erreur PDO : " . $e->getMessage();
        }catch(Exception $e){
            echo "Erreur : " . $e->getMessage();
        }


    }

}

?>