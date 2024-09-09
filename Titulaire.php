<!-- CODE titulaire -->
<?php

class Titulaire{
    private string $_prenom;
    private string $_nom;
    private string $_dateNaissance; // cette propriété n'est pas un string mais un objet date
    private string $_ville;
    private array $_comptes; // TABLEAU des COMPTES bancaires

// $dateNaiissance à la ligne 12 est un string 
    public function __construct($prenom, $nom, $dateNaissance, $ville){// Initialiser propriétés du TITULAIRE
        $this -> _prenom = $prenom;
        $this -> _nom = $nom;
        $this -> _dateNaissance = $dateNaissance; // je transforme le string injecté en argument en objet date 
        $this -> _ville = $ville;
        
//Stock les comptes du titulaire
        $this->_comptes = array();// le TABLEAU A INITILALISER VIDE de livre est à la base un tableai vide
    }

    public function calculAge(){ //https://stackoverflow.com/questions/676824/how-to-calculate-the-difference-between-two-dates-using-php
// UTILISER DateTimme NOW et DateInterval / je fais une soustraction entre l'objet date de naissance et date du jour 
        $dateNaissance = new DateTime($this -> _dateNaissance);
        $aujourdhui = new DateTime(); // https://www.phpfacile.com/apprendre_le_php/dates_avec_classe_datetime
        $age = $dateNaissance ->diff($aujourdhui) ;// $interval = $datetime1->diff($datetime2);
        return $age->y;
    } // https://www.php.net/manual/en/datetime.diff.php
// MOEDELE EXEMPLE CALCUL DIFFERENCE ENTRE 2 DATES
// $datetime1 = new DateTime('2009-10-11 12:12:00');
// $datetime2 = new DateTime('2009-10-13 10:12:00');
// $interval = $datetime1->diff($datetime2);
// echo $interval->format('%Y-%m-%d %H:%i:%s');

    public function ajouterCompte($compte){ // NOmmer la function
        $this -> _comptes[] = $compte; // ici on créé un TABLEAU VIDE pour cette fonction
    } // en lui demandant d'enregistrer UNE LISTRE DES COMPTES


    public function afficherComptes(){ //PARCOURIR LES COMPTES DU TITULAIRE
        // cete fonction fait ne boucle avec foreach sur les comptes du titulaire 
        echo "Compte(s) de " .$this->__toString(); // Afficher la phrase de présentation de l'afficahge des comptes du titulaire
        foreach ($this -> _comptes as $compte) { // Pour parcourir chaque compte du tableau
            # code...
        }
            echo $compte->__toString(); //Afficher le tableau des COMPTES du titulaire
    } //__toString pour appeler/afficher UN titulaire

    public function getPrenom(){
        return $this->_prenom;
    }
    public function getNom(){
        return $this->_nom;
    }

    public function getdateNaissance($age){
        return $this->_nom;
    }
    public function __toString(){ //toSTRING RETOURNE PRENOM ET NOM par la function public
        return $this->_prenom . " " . $this->_nom;
    }

}




