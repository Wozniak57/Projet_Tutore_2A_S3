<?php
	include('.\Model\Cours.class.php');
	//======================================Classe CoursDAO======================================
	class CoursDAO extends DAO{
	
		private $connexion;
		private $ArrayCours = array();
		
		public function __construct(){
			
			$instance = new Connexion();
			$this->connexion = $instance->getConnexion();
		}
		
		public function getListe(){
			
			$req = $this->connexion->prepare('SELECT * FROM COURS');
			$req->execute();
			while($row = $req->fetch()){
				
				$cours = new Cours($row['no_cours'], $row['no_prof'], $row['no_type'], $row['no_matiere']);
				$ArrayCours[] = $cours;
			}
			return $ArrayCours;
		}
		
		public function getCoursByNoProf($no_prof){
			
			$req = $this->connexion->prepare('SELECT * FROM COURS WHERE no_prof = ?');
			$req->bindValue(1, $no_prof, PDO::PARAM_STR);
			$req->execute();
			while($row = $req->fetch()){
				
				$cours = new Cours($row['no_cours'], $row['no_prof'], $row['no_type'], $row['no_matiere']);
				$ArrayCours[] = $cours;
			}
			return $ArrayCours;
		}
	}
?>