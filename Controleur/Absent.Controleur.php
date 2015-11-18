<?php
//On inclut le mod�le �tudiant
include(dirname(__FILE__).'/../modeles/EtudiantModel.php');
 //On inclut le mod�le Seance
include(dirname(__FILE__).'/../modeles/SeanceModel.php');
//On inclut le mod�le Cours
include(dirname(__FILE__).'/../modeles/CoursModel.php');


//========Recup�ration des donn�es mod�les==============================
	//Etudiant
$absent = recuperer_liste_etudiant(); //r�cup�re la liste des �tudiants de �tudiant
	//Seance
$seance = recuperer_liste_seance(); //r�cup�re la liste des s�ances de seance
$date_debut= recuperer_date_debut(); //r�cup�re la date d�but de seance
$date_fin = $date_debut + 7; //date_fin une semaine apr�s date d�but
	//Cours
$nom_cours=recuperer_liste_nom_cours(); //Recup�ration du nom du cours
$type_cours=recuperer_type_cours(); //Recup�ration d'un type de cours : CM,TD,TP
	
//On inclut la vue 
include(dirname(__FILE__).'/../vues/AbsentVue.php');
?>