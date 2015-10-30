<?php
	include('DAO\DAO.class.php');
	include('DAO\ProfDAO.class.php');
	include('DAO\CoursDAO.class.php');
	include('DAO\TypeDAO.class.php');
	include('DAO\MatiereDAO.class.php');
	include('DAO\SectionDAO.class.php');
	include('DAO\SeanceDAO.class.php');
	
	$profdao = new ProfDAO();
	$coursdao = new CoursDAO();
	$typedao = new TypeDAO();
	$matieredao = new MatiereDAO();
	$sectiondao = new SectionDAO();
	$seancedao = new SeanceDAO();
	
	$ArrayProf = $profdao->getListe();
	$prof = $profdao->getProfByEmail('Pierre.LAROCHE@aol.fr');
	$ArrayCours = $coursdao->getCoursByNoProf($prof->getNo_prof());
	foreach($ArrayCours as $row){
		
		$type = $typedao->getTypeByNoTypeOfCours($row->getNo_type());
		$matiere = $matieredao->getMatiereByNoMatiereOfCours($row->getNo_matiere());
		$section = $sectiondao->getSectionByNoSectionOfMatiere($matiere->getNo_section());
		echo $row->getNo_cours() . " " . $prof->getNom() . " " . $type->getNom() . " " . $matiere->getInitiales() . " " . $section->getNom() . ".</br>";
		echo $matiere->getNom() . " (" . $row->getNo_cours() . ") :</br>";
		$ArraySeance = $seancedao->getSeanceByNoCours($row->getNo_cours());
		foreach($ArraySeance as $row2){
			
			echo $row2->getNo_seance() . " : " . $row2->getNo_ordre() . " groupe : " . $row2->getNo_groupe() . "." . $row2->getNo_sous_groupe() . ".</br>";
		}
		echo '</br>';
	}
?>