<?php
	class Cours{

		//===============================Definition des variables===============================
		private $no_cours;
		private $no_prof;
		private $no_type;
		private $no_matiere;
		
		//=====================================Constructeur=====================================
		public function __construct($no_cours, $no_prof, $no_type, $no_matiere){
		
			$this->setNo_cours($no_cours);
			$this->setNo_prof($no_prof);
			$this->setNo_type($no_type);
			$this->setNo_matiere($no_matiere);
		}
		
		//========================================GETTERS========================================
		public function getNo_cours() {
		
			return $this->no_cours;
		}
		
		public function getNo_prof(){
		
			return $this->no_prof;
		}
		
		 public function getNo_type(){
		 
			return $this->no_type;
		}
		
		 public function getNo_matiere(){
		 
			return $this->no_matiere;
		}
		
		//========================================SETTERS========================================
		public function setNo_cours($no_cours){
		
			$this->no_cours= $no_cours;
		}

		public function setNo_prof($no_prof){
		
			$this->no_prof= $no_prof;
		}

		public function setNo_type($no_type){
		
			$this->no_type= $no_type;
		}
		
		public function setNo_matiere($no_matiere){
		
			$this->no_matiere= $no_matiere;
		}

		//=======================================toString=======================================
		public function __toString(){

			return $this->no_cours . " " . $this->no_prof . " " . $this->no_type . " " . $this->no_matiere . ".</br>";
		}
	}
?>