<?php
	class Sous_groupe{

		//===============================Definition des variables===============================
		private $no_section;
		private $no_groupe;
		private $no_sous_groupe;

		//=====================================Constructeur=====================================
		public function __construct($no_section, $no_groupe, $no_sous_groupe){
		
		$this->setNo_section($no_section);
		$this->setNo_groupe($no_groupe);
		$this->setNo_sous_groupe($no_sous_groupe);
		}   
		
		//========================================GETTERS========================================
		public function getNo_section() {
		
			return $this->no_section;
		}
		
		public function getNo_groupe(){
		
			return $this->no_groupe;
		}
		
		 public function getNo_sous_groupe(){
		 
			return $this->no_sous_groupe;
		}

		//========================================SETTERS========================================
		public function setNo_section($no_section){
		
			$this->no_section= $no_section;
		}

		public function setNo_groupe($no_groupe){
		
			$this->no_groupe= $no_groupe;
		}

		public function setNo_sous_groupe($no_sous_groupe){
		
			$this->no_sous_groupe= $no_sous_groupe;
		}
		
		//=======================================toString=======================================
		public function __toString(){

			return $this->no_section . " : " . $this->no_groupe . " " . $this->no_sous_groupe . ".</br>";
		}
	}
?>