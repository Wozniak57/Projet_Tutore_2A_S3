<?php
//On inclut le modèle étudiant
include(dirname(__FILE__).'/../modeles/EtudiantModel.php');
 //On inclut le modèle Seance
include(dirname(__FILE__).'/../modeles/SeanceModel.php');
//On inclut le modèle Cours
include(dirname(__FILE__).'/../modeles/CoursModel.php');


//========Recupération des données modèles==============================
	//Etudiant
$absent = recuperer_liste_etudiant(); //récupère la liste des étudiants de étudiant
	//Seance
$seance = recuperer_liste_seance(); //récupère la liste des séances de seance
$date_debut= recuperer_date_debut(); //récupère la date début de seance
$date_fin = $date_debut + 7; //date_fin une semaine après date début
	//Cours
$nom_cours=recuperer_liste_nom_cours(); //Recupération du nom du cours
$type_cours=recuperer_type_cours(); //Recupération d'un type de cours : CM,TD,TP
	
//On inclut la vue 
include(dirname(__FILE__).'/../vues/AbsentVue.php');
?>