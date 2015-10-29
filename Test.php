<?php
	include('DAO\DAO.class.php');
	include('DAO\ProfDAO.class.php');
	include('DAO\CoursDAO.class.php');
	include('DAO\TypeDAO.class.php');
	include('DAO\MatiereDAO.class.php');
	
	$profdao = new ProfDAO();
	$coursdao = new CoursDAO();
	$typedao = new TypeDAO();
	$matieredao = new MatiereDAO();
	
	$ArrayProf = $profdao->getListe();
	$prof = $profdao->getProfByEmail('Pierre.LAROCHE@aol.fr');
	$ArrayCours = $coursdao->getCoursByNoProf($prof->getNo_prof());
	foreach($ArrayCours as $row){
		
		$type = $typedao->getTypeByNoTypeOfCours($row->getNo_type());
		$matiere = $matieredao->getMatiereByNoMatiereOfCours($row->getNo_matiere());
		echo $row->getNo_cours() . " " . $prof->getNom() . " " . $type->getNom() . " " . $matiere->getInitiales() . ".</br>";
	}
?>