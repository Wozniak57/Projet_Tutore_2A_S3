<?php
	include('DAO\DAO.class.php');
	include('DAO\ProfDAO.class.php');
	include('DAO\CoursDAO.class.php');
	include('DAO\TypeDAO.class.php');
	
	$profdao = new ProfDAO();
	$coursdao = new CoursDAO();
	$typedao = new TypeDAO();
	
	$ArrayProf = $profdao->getListe();
	$prof = $profdao->getProfByEmail('Pierre.LAROCHE@aol.fr');
	$ArrayCours = $coursdao->getCoursByNoProf($prof->getNo_prof());
	foreach($ArrayCours as $row){
		
		$type = $typedao->getTypeByNoTypeOfCours($row->getNo_type());
		echo $row->getNo_cours() . " " . $prof->getNom() . " " . $type->getNom() . " " . $row->getNo_matiere() . ".</br>";
	}
?>