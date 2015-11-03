<?php
	include('./DAO/DAO.class.php');
	include('./DAO/ProfDAO.class.php');
	include('./DAO/CoursDAO.class.php');
	include('./DAO/MatiereDAO.class.php');
	include('./DAO/TypeDAO.class.php');
	
	$profdao = new ProfDAO();
	$coursdao = new CoursDAO();
	$matieredao = new MatiereDAO();
	$typedao = new TypeDAO();
	
	$prof = $profdao->getProfByEmail('Pierre.LAROCHE@aol.fr');
	$ArrayCours = $coursdao->getCoursByProf($prof);
	foreach($ArrayCours as $row){
		
		$ArrayType[] = $typedao->getTypeByNoTypeOfCours($row->getNo_type());
		$ArrayMatiere[] = $matieredao->getMatiereByNoMatiereOfCours($row->getNo_matiere());
	}
?>
<html>
	<head>
		<title>Cours</title>
	</head>
	<body>
		<?php
			$i = 0;
			foreach($ArrayCours as $row){
				
				echo "<button type=\"button\">" . $ArrayMatiere[$i]->getNom() . " " . $ArrayType[$i]->getNom() . "</button>";
				$i++;
			}
		?>
	</body>
</html>