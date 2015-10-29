<?php
	class Seance{
		
		//===============================Definition des variables===============================
		private $no_seance;
		private $date_debut;
		private $no_cours;
		private $no_ordre;
		private $no_section;
		private $no_groupe;
		private $no_sous_groupe;
		
		//=====================================Constructeur=====================================
		public function __construct($no_seance, $date_debut, $no_cours, $no_ordre, $no_section, $no_groupe, $no_sous_groupe){
			
			$this->setNo_seance($no_seance);
			$this->setDate_debut($date_debut);
			$this->setNo_cours($no_cours);
			$this->setNo_ordre($no_ordre);
			$this->setNo_section($no_section);
			$this->setNo_groupe($no_groupe);
			$this->setNo_sous_groupe($no_sous_groupe);
		}
		
		//========================================GETTERS========================================
		public function getNo_seance(){
			
			return $this->no_seance;
		}
		
		public function getDate_debut(){
			
			return $this->date_debut;
		}
		
		public function getNo_cours(){
			
			return $this->no_cours;
		}
		
		public function getNo_ordre(){
			
			return $this->no_ordre;
		}
		
		public function getNo_section(){
			
			return $this->no_section;
		}
		
		public function getNo_groupe(){
			
			return $this->no_groupe;
		}
		
		public function getNo_sous_groupe(){
			
			return $this->no_sous_groupe;
		}
		
		//========================================SETTERS========================================
		public function setNo_seance($no_seance){
			
			$this->no_seance = $no_seance;
		}
		
		public function setDate_debut($date_debut){
			
			$this->date_debut = $date_debut;
		}
		
		public function setNo_cours($no_cours){
			
			$this->no_cours = $no_cours;
		}
		
		public function setNo_ordre($no_ordre){
			
			$this->no_ordre = $no_ordre;
		}
		
		public function setNo_section($no_section){
			
			$this->no_section = $no_section;
		}
		
		public function setNo_groupe($no_groupe){
			
			$this->no_groupe = $no_groupe;
		}
		
		public function setNo_sous_groupe($no_sous_groupe){
			
			$this->no_sous_groupe = $no_sous_groupe;
		}
		
		//=======================================toString=======================================
		public function __toString(){
		
			return $this->no_seance . " : " . $this->date_debut . " " . $this->no_cours . " " . $this->no_ordre . " " . $this->no_section . " " . $this->no_groupe . " " . $this->no_sous_groupe . ".</br>";
		}
	}
?>