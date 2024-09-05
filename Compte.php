<!-- CODE COMPTE -->
<?php

Class Compte{
    private $_libell;
    private $_solde;
    private $_devise;
    private $_titulaire;
}

public function __construct($libell, $solde, $devise, $titulaire){
    $this->_libell = $libell;
    $this -> _solde = $solde;
    $this -> _devise = $devise;
    $this -> _titulaire = $titulaire;
    $titulaire -> ajouterCompte($this);
}