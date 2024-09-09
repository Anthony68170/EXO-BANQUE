<!-- CODE INDEX -->

<?php

// INTEGRER LES DONNEES DES CLASSES PRECEDEMMENT DEFINIES
include "Compte.php";
include "Titulaire.php";

// CREER les OBJETS

// titulaires
$titulaire1 = new Titulaire("Hubert", "REEVES", 13/10/1932, "Paris");
$titulaire2 = new Titulaire("Jean-Michel", "JARRE", 24/8/1948, "Lyon");
$titulaire3 = new Titulaire("Herbert", "LEONARD", 25/02/1945, "Strasbourg");
$titulaire4 = new Titulaire("Bruce", "SPRINGSTEEN", 23/9/1949, "New Jersey");

// comptes
$compte1 = new Compte("Compte courant", 244, "euros", $titulaire1);
$compte2 = new Compte("Compte courant", 874, "euros", $titulaire2);
$compte3 = new Compte("Compte courant", 400, "fraancs suisse", $titulaire3);
$compte4 = new Compte("Compte courant", 8690.54, "dollars", $titulaire4);

// var_dump($compte2);
// var_dump($titulaire2);
// var_dump($dateNaissance);



// On doit pouvoir :
// Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes appartenant à celui(celle)-ci.
// Afficher toutes les informations d'un compte bancaire, notamment le nom / prénom du titulaire du compte.

