<?php
	include('.\Model\Type.class.php');
	//======================================Classe TypeDAO======================================
	class TypeDAO extends DAO{
	
		private $connexion;
		private $ArrayType = array();
		
		public function __construct(){
			
			$instance = new Connexion();
			$this->connexion = $instance->getConnexion();
		}
		
		public function getListe(){
			
			$req = $this->connexion->prepare('SELECT * FROM TYPE');
			$req->execute();
			while($row = $req->fetch()){
				
				$type = new Type($row['no_type'], $row['nom']);
				$ArrayType[] = $type;
			}
			return $ArrayType;
		}
		
		public function getTypeByNoTypeOfCours($no_type){
			
			$req = $this->connexion->prepare('SELECT * FROM TYPE WHERE no_type = ?');
			$req->bindValue(1, $no_type, PDO::PARAM_STR);
			$req->execute();
			$row = $req->fetch();
			$type = new Type($row['no_type'], $row['nom']);
			return $type;
		}
	}
?>