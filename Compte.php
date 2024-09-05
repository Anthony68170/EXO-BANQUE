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
    return $this -> _libell;
    }

    public function setSolde($solde){
    return $this -> _solde;
    }

    public function setDevise($devise){
    return $this -> _devise;
    }

    public function setTitulaire($tiutlaire){
    return $this -> _titulaire;
    }

    public function __toString(){
    return $this->_libell . " : " . $this->_solde . "€. (" . $this->_devise . ") " . $this->_titulaire . ": ";
    }
    
    // Méthode pour créditer le compte
    public function crediterCompte(){
        echo "Crédit de " .$this->$titulaire;
        foreach ($variable as $key => $value) {
            # code...
        }
    }

        // Méthode pour déditer le compte
        public function dediterCompte(){
            echo "Dédit de " .$this->$titulaire;
            foreach ($variable as $key => $value) {
                # code...
            }
        }
}


// Sur un compte bancaire, on doit pouvoir :
// Créditer le compte de X euros
// Débiter le compte de X euros
// Effectuer un virement d'un compte à l'autre.