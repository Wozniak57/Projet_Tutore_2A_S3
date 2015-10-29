<?php
	class Section{

		//===============================Definition des variables===============================
		private $no_section;
		private $nom;
		private $date_debut;
		private $date_fin;
		
		//=====================================Constructeur=====================================
		public function __construct($no_section, $nom, $date_debut, $date_fin){
		
			$this->setNo_section($no_section);
			$this->setNom($nom);
			$this->setDate_debut($date_debut);
			$this->setDate_fin($date_fin);
		}
		
		//========================================GETTERS========================================
		public function getNo_section() {
		
			return $this->no_section;
		}
		
		public function getNom(){
		
			return $this->nom;
		}
		
		 public function getDate_debut(){
		 
			return $this->date_debut;
		}
		
		 public function getDate_fin(){
		 
			return $this->date_fin;
		}
		
		//========================================SETTERS========================================
		public function setNo_section($no_section){
		
			$this->no_section= $no_section;
		}

		public function setNom($nom){
		
			$this->nom= $nom;
		}

		public function setDate_debut($date_debut){
		
			$this->date_debut= $date_debut;
		}

		public function setDate_fin($date_fin){
		
			$this->date_fin= $date_fin;
		}
		
		//=======================================toString=======================================
		public function __toString(){

			return $this->no_section . " : " . $this->nom . " " . $this->date_debut . " " . $this->date_fin . ".</br>";
		}
	}
?>