<?php
	include('.\Model\Seance.class.php');
	//======================================Classe SeanceDAO======================================
	class SeanceDAO extends DAO{
	
		private $connexion;
		
		public function __construct(){
			
			$instance = new Connexion();
			$this->connexion = $instance->getConnexion();
		}
		
		public function getListe(){
			
			$ArraySeance = array();
			$req = $this->connexion->prepare('SELECT * FROM SEANCE');
			$req->execute();
			while($row = $req->fetch()){
				
				$seance = new Seance($row['no_seance'], $row['date_debut'], $row['no_cours'], $row['no_ordre'], $row['no_section'], $row['no_groupe'], $row['no_sous_groupe']);
				$ArraySeance[] = $seance;
			}
			return $ArraySeance;
		}
		
		public function getSeanceByNoCours($no_cours){
			
			$ArraySeance = array();
			$req = $this->connexion->prepare('SELECT * FROM SEANCE WHERE no_cours = ?');
			$req->bindValue(1, $no_cours, PDO::PARAM_STR);
			$req->execute();
			while($row = $req->fetch()){
				
				$seance = new Seance($row['no_seance'], $row['date_debut'], $row['no_cours'], $row['no_ordre'], $row['no_section'], $row['no_groupe'], $row['no_sous_groupe']);
				$ArraySeance[] = $seance;
			}
			return $ArraySeance;
		}
	}
?>