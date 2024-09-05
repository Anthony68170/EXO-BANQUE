<!-- CODE INDEX -->

<?php

// INTEGRER LES DONNEES DES CLASSES PRECEDEMMENT DEFINIES
include "Compte.php";
include "Titulaire.php";

// CREER les OBJETS

// titulaire
$titulaire1 = new Titulaire("Hubert", "REEVES");

// compte
$compte1 = new Compte($libell, 2454, "euros", $titulaire1);



// On doit pouvoir :
// Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes appartenant à celui(celle)-ci.
// Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du titulaire du compte.

