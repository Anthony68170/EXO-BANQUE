<!-- CODE titulaire -->
<?php

class Titulaire{
    private string $_prenom;
    private string $_nom;
    private string $_dateNaissance;
    private string $_ville;
    private array $_comptes; // TABLEAU des COMPTES bancaires

    public function __construct($prenom, $nom,){// Initialiser propriétés du TITULAIRE
        $this -> _prenom = $prenom;
        $this -> _nom = $nom;
        
        //Stock les livres de l'auteur
        $this->_livres = array();// le TABLEAU A INITILALISER VIDE de livre est à la base un tableai vide
    }
}