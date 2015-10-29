<?php
	class Etudiant{
		
		//===============================Definition des variables===============================
		private $no_etudiant;
		private $nom;
		private $prenom;
		private $bourse;
		private $abandon;
		private $no_section;
		private $no_groupe;
		private $no_sous_groupe;
		
		//=====================================Constructeur=====================================
		public function __construct($no_etudiant, $nom, $prenom, $bourse, $abandon, $no_section, $no_groupe, $no_sous_groupe){
			
			$this->setNo_etudiant($no_etudiant);
			$this->setNom($nom);
			$this->setPrenom($prenom);
			$this->setBourse($bourse);
			$this->setAbandon($abandon);
			$this->setNo_section($no_section);
			$this->setNo_groupe($no_groupe);
			$this->setNo_sous_groupe($no_sous_groupe);
		}
		
		//========================================GETTERS========================================
		public function getNo_etudiant(){
			
			return $this->no_etudiant;
		}
		
		public function getNom(){
			
			return $this->nom;
		}
		
		public function getPrenom(){
			
			return $this->prenom;
		}
		
		public function getBourse(){
			
			return $this->bourse;
		}
		
		public function getAbandon(){
			
			return $this->abandon;
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
		public function setNo_etudiant($no_etudiant){
			
			$this->no_etudiant = $no_etudiant;
		}
		
		public function setNom($nom){
			
			$this->nom = $nom;
		}
		
		public function setPrenom($prenom){
			
			$this->prenom = $prenom;
		}
		
		public function setBourse($bourse){
			
			$this->bourse = $bourse;
		}
		
		public function setAbandon($abandon){
			
			$this->abandon = $abandon;
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
			
			return $this->no_etudiant . " : " . $this->nom . " " . $this->prenom . " " . $this->bourse . " " . $this->abandon . " " . $this->no_section . " " . $this->no_groupe . " " . $this->no_sous_groupe . ".</br>";
		}
	}
?>