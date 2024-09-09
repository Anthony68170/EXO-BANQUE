<!-- CODE COMPTE -->
<?php

Class Compte{
    private $_libell;
    private $_solde;
    private $_devise;
    private $_titulaire;
    
    public function __construct($libell, $solde, $devise, $titulaire){
        $this->_libell = $libell;
        $this -> _solde = $solde;
        $this -> _devise = $devise;
        $this -> _titulaire = $titulaire;
        $titulaire -> ajouterCompte($this); // Pour ajouter un compte à la liste (au tableau)
    }

//GETTERS
    public function getLibell(){
        return $this -> _libell;
    }

    public function getSolde(){
        return $this -> _solde;
    }

    public function getDevise(){
        return $this -> _devise;
    }

    public function getTitulaire(){
        return $this -> _titulaire;
    }

// SETTERS
    public function setLibell($libell){
    $this -> _libell;
    }

    public function setSolde($solde){
    $this -> _solde;
    }

    public function setDevise($devise){
    $this -> _devise;
    }

    public function setTitulaire($tiutlaire){
    $this -> _titulaire;
    }

    public function __toString(){
        return $this->_libell . " : " . $this->_solde . " " . $this->_devise . " (Client : " . $this->_titulaire . ")";
    }
    
// Méthode CREDITER le compte
    public function crediterCompte($somme){
        $this -> _solde + $somme;
        echo "Votre compte est crédité de " . $somme . " " . $this->_devise;
        }
    

// Méthode DEBITER le compte
    public function dediterCompte($somme){
        if ($this -> _solde > $somme){
            $this -> _solde - $somme
        }
        ;
        return $result;
        echo "Votre compte est crédité de " . $somme . " " . $this->_devise;
        }
    

    // public function dediterCompte($deb){
    //     if $this ->solde = $deb{
    //     }

    //     echo "Votre compte est crédité de " . $deb . " " . $this->_devise;
    //     else {
    //         # code...
    //     }
    //     }

// Méthode SOLDE a calculer 
        // public function calculSolde($libell){ // Il faut utiliser un "setter" parce qu'il faut modifier l'objet
        //     $this ->solde =     $solde;
        // }

// Méthode VIREMENT vers le compte d'un titulaire
        // public function virementCompte ($libell){
            
        // }
}


// Sur un compte bancaire, on doit pouvoir :
// Créditer le compte de X euros
// Débiter le compte de X euros
// Effectuer un virement d'un compte à l'autre.

