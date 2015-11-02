<?php
	include('.\Model\Section.class.php');
	//======================================Classe SectionDAO======================================
	class SectionDAO extends DAO{
	
		private $connexion;
		private $ArraySection = array();
		
		public function __construct(){
			
			$instance = new Connexion();
			$this->connexion = $instance->getConnexion();
		}
		
		public function getListe(){
			
			$req = $this->connexion->prepare('SELECT * FROM SECTION');
			$req->execute();
			while($row = $req->fetch()){
				
				$section = new Section($row['no_section'], $row['nom'], $row['date_debut'], $row['date_fin']);
				$ArraySection[] = $section;
			}
			return $ArraySection;
		}
		
		public function getSectionByNoSectionOfMatiere($no_Section){
			
			$req = $this->connexion->prepare('SELECT * FROM SECTION WHERE no_section = ?');
			$req->bindValue(1, $no_Section, PDO::PARAM_STR);
			$req->execute();
			$row = $req->fetch();
			$section = new Section($row['no_section'], $row['nom'], $row['date_debut'], $row['date_fin']);
			return $section;
		}
	}
?>