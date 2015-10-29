<?php
	class Type{

		//===============================Definition des variables===============================
		private $no_type;
		private $nom;

		//=====================================Constructeur=====================================
		public function __construct($no_type, $nom){
		
			$this->setNo_type($no_type);
			$this->setNom($nom);
		}
		
		//========================================GETTERS========================================
		public function getNo_type() {
		
			return $this->no_type;
		}
		
		public function getNom(){
		
			return $this->nom;
		}
		
		//========================================SETTERS========================================
		public function setNo_type($no_type){
		
			$this->no_type= $no_type;
		}

		public function setNom($nom){
		
			$this->nom= $nom;
		}

		//=======================================toString=======================================
		public function __toString(){

			return $this->no_type . " : " . $this->nom . ".</br>";
		}
	}
?>