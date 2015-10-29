<?php
	include('.\Model\Prof.class.php');
	//======================================Classe ProfDAO======================================
	class ProfDAO extends DAO{
	
		private $connexion;
		private $ArrayProf = array();
		
		public function __construct(){
			
			$instance = new Connexion();
			$this->connexion = $instance->getConnexion();
		}
		
		public function getListe(){
			
			$req = $this->connexion->prepare('SELECT * FROM PROF');
			$req->execute();
			unset($ArrayProf);
			while($row = $req->fetch()){
				
				$prof = new Prof($row['no_prof'], $row['nom'], $row['prenom'], $row['email'], $row['envoi_codes']);
				$ArrayProf[] = $prof;
			}
			return $ArrayProf;
		}
		
		public function getProfByEmail($email){
			
			$req = $this->connexion->prepare('SELECT * FROM PROF WHERE email = ?');
			$req->bindValue(1, $email, PDO::PARAM_STR);
			$req->execute();
			$row = $req->fetch();
			$prof = new Prof($row['no_prof'], $row['nom'], $row['prenom'], $row['email'], $row['envoi_codes']);
			return $prof;
		}
	}
?>