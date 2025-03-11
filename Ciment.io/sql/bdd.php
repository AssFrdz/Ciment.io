<?php

class BDD{

    protected $bdd;

    public function __construct(){
        try{
            $this->bdd = new PDO("mysql:host=localhost;dbname=ciment_io", "root","");
        }catch(PDOException $e){
            echo "Erreur de connexion PDO : " . $e->getMessage();
        }
    }

    


}


?>