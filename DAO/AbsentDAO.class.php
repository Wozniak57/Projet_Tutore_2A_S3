<?php
	include('.\Model\Absent.class.php');
	//======================================Classe AbsentDAO======================================
	class AbsentDAO extends DAO{
	
		private $connexion;
		private $ArrayAbsent = array();
		
		public function __construct(){
			
			$instance = new Connexion();
			$this->connexion = $instance->getConnexion();
		}
		
		public function getListe(){
			
			$req = $this->connexion->prepare('SELECT * FROM ABSENT');
			$req->execute();
			while($row = $req->fetch()){
				
				$absent = new Absent($row['no_etudiant'], $row['no_seance'], $row['absence'], $row['justificatif']);
				$ArrayAbsent[] = $absent;
			}
			return $ArrayAbsent;
		}
		
		public function countAbsentByNoEtudiant($etudiant){
			
			$req = $this->connexion->prepare('SELECT COUNT(*) AS COUNT FROM ABSENT WHERE no_etudiant = ? AND absence = 1');
			$req->bindValue(1, $etudiant->getNo_etudiant(), PDO::PARAM_STR);
			$req->execute();
			return $req->fetch()['COUNT'];
		}
	}
?>