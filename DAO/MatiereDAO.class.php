<?php
	include('.\Model\Matiere.class.php');
	//======================================Classe MatiereDAO======================================
	class MatiereDAO extends DAO{
	
		private $connexion;
		private $ArrayMatiere = array();
		
		public function __construct(){
			
			$instance = new Connexion();
			$this->connexion = $instance->getConnexion();
		}
		
		public function getListe(){
			
			$req = $this->connexion->prepare('SELECT * FROM MATIERE');
			$req->execute();
			while($row = $req->fetch()){
				
				$matiere = new Matiere($row['no_matiere'], $row['nom'], $row['initiales'], $row['no_module'], $row['no_section']);
				$ArrayMatiere[] = $matiere;
			}
			return $ArrayMatiere;
		}
		
		public function getMatiereByNoMatiereOfCours($no_matiere){
			
			$req = $this->connexion->prepare('SELECT * FROM MATIERE WHERE no_matiere = ?');
			$req->bindValue(1, $no_matiere, PDO::PARAM_STR);
			$req->execute();
			$row = $req->fetch();
			$matiere = new Matiere($row['no_matiere'], $row['nom'], $row['initiales'], $row['no_module'], $row['no_section']);
			return $matiere;
		}
	}
?>