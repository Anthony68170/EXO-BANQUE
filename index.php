<!-- CODE INDEX -->

<?php

// INTEGRER LES DONNEES DES CLASSES PRECEDEMMENT DEFINIES
include "Compte.php";
include "Titulaire.php";

// CREER les OBJETS

// titulaires

$titulaire1 = new Titulaire("Hubert", "REEVES", "10/13/1932", "Paris");
$titulaire2 = new Titulaire("Jean-Michel", "JARRE", "08/24/1948", "Lyon");
$titulaire3 = new Titulaire("Herbert", "LEONARD", "02/25/1945", "Strasbourg");
$titulaire4 = new Titulaire("Bruce", "SPRINGSTEEN", "09/23/1949", "New Jersey");

// comptes
$compte1 = new Compte("Compte courant", 244, "euros", $titulaire1);
$compte2 = new Compte("Compte courant", 874, "euros", $titulaire2);
$compte3 = new Compte("Compte courant", 400, "francs suisse", $titulaire3);
$compte4 = new Compte("Compte courant", 8690.54, "dollars", $titulaire4);


// effectuer un virement
$compte1 -> virement(100, $compte2);

// afficher le nouveau solde
echo "Nouveau solde de" . $titulaire1 ;
echo "Nouveau solde de" . $titulaire2 ;

// var_dump($compte2);
// var_dump($titulaire2);
// var_dump($dateNaissance);
// var_dump($solde);



// On doit pouvoir :
// Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes appartenant à celui(celle)-ci.
// Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du titulaire du compte.

// § $taux à la place du £dollar / POUR LA DEVISE

