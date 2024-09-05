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
        $this -> _dateNaissance = $dateNaissance;
        $this -> _ville = $ville;
        
        //Stock les comptes du titulaire
        $this->_comptes = array();// le TABLEAU A INITILALISER VIDE de livre est à la base un tableai vide
    }

    public function ajouterCompte($_comptes){
$this -> _comptes[] = $compte;
    }
    public function afficherComptes(){ //PARCOURIR LES COMPTES DU TITULAIRE
        // cete fonction fait ne boucle avec foreach sur les comptes du titulaire 
        echo "Compte(s) de " .$this->$titulaire; // Afficher la phrase de présentation de l'afficahge des comptes
        foreach ($this -> _comptes as $compte) { // Pour parcourir chaque compte du tableau
            # code...
            echo _comptes->__toString($compte); //Afficher le tableau COMPTES du titulaire
        }

        public function getPrenom(){
            return $this->_prenom;
          }
          public function getNom(){
            return $this->_nom;
          }
          public function __toString(){ //TOSTRING RETOURNE PRENOM ET NOM par la function public
            return $this->_prenom . " " . $this->_nom;
            }
    }
}