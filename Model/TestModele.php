<?php
	include('Prof.class.php');
	include('Cours.class.php');
	include('Type.class.php');
	include('Matiere.class.php');
	include('Seance.class.php');
	include('Section.class.php');
	include('Sous_groupe.class.php');
	include('Etudiant.class.php');
	include('Absent.class.php');
	
	echo ("Prof(s) : </br>");
	$prof = new Prof(1, "Laroche", "Pierre", "Pierre.LAROCHE@aol.fr", 0);
	echo ($prof->getNo_prof() . "</br>");
	echo ($prof->getNom() . "</br>");
	echo ($prof->getPrenom() . "</br>");
	echo ($prof->getEmail() . "</br>");
	echo ($prof->getEnvoiCodes() . "</br>");
	echo ($prof . "</br>");
	
	echo ("Cour(s) : </br>");
	$cour = new Cours(1, 1, 1, 1);
	echo ($cour->getNo_cours() . "</br>");
	echo ($cour->getNo_prof() . "</br>");
	echo ($cour->getNo_type() . "</br>");
	echo ($cour->getNo_matiere() . "</br>");
	echo ($cour . "</br>");
	
	echo ("Type(s) : </br>");
	$type = new Type(1, "CM");
	echo ($type->getNo_type() . "</br>");
	echo ($type->getNom() . "</br>");
	echo ($type . "</br>");
	
	echo ("Matiere(s) : </br>");
	$matiere = new Matiere(1, "Base de données", "BdD", 1, 1);
	echo ($matiere->getNo_matiere() . "</br>");
	echo ($matiere->getNom() . "</br>");
	echo ($matiere->getInitiales() . "</br>");
	echo ($matiere->getNo_module() . "</br>");
	echo ($matiere->getNo_section() . "</br>");
	echo ($matiere . "</br>");
	
	echo ("Seance(s) : </br>");
	$seance = new Seance(1, "21/10/2015", 1, 1, 1, 1, 1);
	echo ($seance->getNo_seance() . "</br>");
	echo ($seance->getDate_debut() . "</br>");
	echo ($seance->getNo_cours() . "</br>");
	echo ($seance->getNo_ordre() . "</br>");
	echo ($seance->getNo_section() . "</br>");
	echo ($seance->getNo_groupe() . "</br>");
	echo ($seance->getNo_sous_groupe() . "</br>");
	echo ($seance . "</br>");
	
	echo ("Section(s) : </br>");
	$section = new Section(1, "2A-S3", 1, 1);
	echo ($section->getNo_section() . "</br>");
	echo ($section->getNom() . "</br>");
	echo ($section->getDate_debut() . "</br>");
	echo ($section->getDate_fin() . "</br>");
	echo ($section . "</br>");
	
	echo ("Sous-groupe(s) : </br>");
	$Sous_groupe = new Sous_groupe(1, 1, 1);
	echo ($Sous_groupe->getNo_section() . "</br>");
	echo ($Sous_groupe->getNo_groupe() . "</br>");
	echo ($Sous_groupe->getNo_sous_groupe() . "</br>");
	echo ($Sous_groupe . "</br>");
	
	echo ("Etudiant(s) : </br>");
	$etudiant = new Etudiant(1, "Bresson", "Guillaume", 1, 0, 5, 1, 1);
	echo ($etudiant->getNo_etudiant() . "</br>");
	echo ($etudiant->getNom() . "</br>");
	echo ($etudiant->getPrenom() . "</br>");
	echo ($etudiant->getBourse() . "</br>");
	echo ($etudiant->getAbandon() . "</br>");
	echo ($etudiant->getNo_section() . "</br>");
	echo ($etudiant->getNo_groupe() . "</br>");
	echo ($etudiant->getNo_sous_groupe() . "</br>");
	echo ($etudiant . "</br>");
	
	echo ("Absent(s) : </br>");
	$absent = new Absent(1, 1, 3, "Cookies");
	echo ($absent->getNo_etudiant() . "</br>");
	echo ($absent->getNo_seance() . "</br>");
	echo ($absent->getAbsence() . "</br>");
	echo ($absent->getJustificatif() . "</br>");
	echo ($absent . "</br>");
?>