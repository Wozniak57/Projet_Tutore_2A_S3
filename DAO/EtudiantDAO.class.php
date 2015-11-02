<?php
	include('.\Model\Etudiant.class.php');
	//======================================Classe EtudiantDAO======================================
	class EtudiantDAO extends DAO{
	
		private $connexion;
		private $ArrayEtudiant = array();
		
		public function __construct(){
			
			$instance = new Connexion();
			$this->connexion = $instance->getConnexion();
		}
		
		public function getListe(){
			
			$req = $this->connexion->prepare('SELECT * FROM ETUDIANT');
			$req->execute();
			while($row = $req->fetch()){
				
				$etudiant = new Etudiant($row['no_etudiant'], $row['nom'], $row['prenom'], $row['bourse'], $row['abandon'], $row['no_section'], $row['no_groupe'], $row['no_sous_groupe']);
				$ArrayEtudiant[] = $etudiant;
			}
			return $ArrayEtudiant;
		}
		
		public function getEtudiantByNoSection($seance){
			
			$req = $this->connexion->prepare('SELECT * FROM ETUDIANT WHERE no_section = ?');
			$req->bindValue(1, $seance->getNo_section(), PDO::PARAM_STR);
			while($row = $req->fetch()){
				
				$etudiant = new Etudiant($row['no_etudiant'], $row['nom'], $row['prenom'], $row['bourse'], $row['abandon'], $row['no_section'], $row['no_groupe'], $row['no_sous_groupe']);
				$ArrayEtudiant[] = $etudiant;
			}
			return $ArrayEtudiant;
		}
		
		public function getEtudiantByNoSectionAndNoGroupe($seance){
			
			$req = $this->connexion->prepare('SELECT * FROM ETUDIANT WHERE no_section = ? AND no_groupe = ?');
			$req->bindValue(1, $seance->getNo_section(), PDO::PARAM_STR);
			$req->bindValue(2, $seance->getNo_groupe(), PDO::PARAM_STR);
			$req->execute();
			while($row = $req->fetch()){
				
				$etudiant = new Etudiant($row['no_etudiant'], $row['nom'], $row['prenom'], $row['bourse'], $row['abandon'], $row['no_section'], $row['no_groupe'], $row['no_sous_groupe']);
				$ArrayEtudiant[] = $etudiant;
			}
			return $ArrayEtudiant;
		}
		
		public function getEtudiantByNoSectionAndNoGroupeAndNoSousGroupe($seance){
			
			$req = $this->connexion->prepare('SELECT * FROM ETUDIANT WHERE no_section = ? AND no_groupe = ? AND no_sous_groupe = ?');
			$req->bindValue(1, $seance->getNo_section(), PDO::PARAM_STR);
			$req->bindValue(2, $seance->getNo_groupe(), PDO::PARAM_STR);
			$req->bindValue(3, $seance->getNo_sous_groupe(), PDO::PARAM_STR);
			$req->execute();
			while($row = $req->fetch()){
				
				$etudiant = new Etudiant($row['no_etudiant'], $row['nom'], $row['prenom'], $row['bourse'], $row['abandon'], $row['no_section'], $row['no_groupe'], $row['no_sous_groupe']);
				$ArrayEtudiant[] = $etudiant;
			}
			return $ArrayEtudiant;
		}
	}
?>