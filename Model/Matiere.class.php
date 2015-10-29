<?php
	class Matiere{

		//===============================Definition des variables===============================
		private $no_matiere;
		private $nom;
		private $initiales;
		private $no_module;
		private $no_section;
		
		//=====================================Constructeur=====================================
		public function __construct($no_matiere, $nom, $initiales, $no_module, $no_section){
		
			$this->setNo_matiere($no_matiere);
			$this->setNom($nom);
			$this->setInitiales($initiales);
			$this->setNo_module($no_module);
			$this->setNo_section($no_section);
		}
		
		//========================================GETTERS========================================
		public function getNo_matiere() {
		
			return $this->no_matiere;
		}

		public function getNom(){
		
			return $this->nom;
		}

		 public function getInitiales(){
		 
			return $this->initiales;
		}
		
		 public function getNo_module(){
		 
			return $this->no_module;
		}

		public function getNo_section(){
		 
			return $this->no_section;
		}
		
		//========================================SETTERS========================================
		public function setNo_matiere($no_matiere){
		
			$this->no_matiere= $no_matiere;
		}

		public function setNom($nom){
		
			$this->nom= $nom;
		}

		public function setInitiales($initiales){
		
			$this->initiales= $initiales;
		}

		public function setNo_module($no_module){
		
			$this->no_module= $no_module;
		}

		public function setNo_section($no_section){
			
				$this->no_section= $no_section;
		}
		
		//=======================================toString=======================================
		public function __toString(){

			return $this->no_matiere . " : " . $this->nom . " " . $this->initiales . " " . $this->no_module . " " . $this->no_section . ".</br>";
		}
	}
?>