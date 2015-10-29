<?php
	class Prof{
		
		//===============================Definition des variables===============================
		private $no_prof;
		private $nom;
		private $prenom;
		private $email;
		private $envoi_codes;
		
		//=====================================Constructeur=====================================
		public function __construct($no_prof, $nom, $prenom, $email, $envoi_codes){
			
			$this->setNoProf($no_prof);
			$this->setNom($nom);
			$this->setPrenom($prenom);
			$this->setEmail($email);
			$this->setEnvoiCodes($envoi_codes);
		}
		
		//========================================GETTERS========================================
		public function getNo_prof(){
			
			return $this->no_prof;
		}
		
		public function getNom(){
			
			return $this->nom;
		}
		
		public function getPrenom(){
			
			return $this->prenom;
		}
		
		public function getEmail(){
			
			return $this->email;
		}
		
		public function getEnvoiCodes(){
			
			return $this->envoi_codes;
		}
		
		//========================================SETTERS========================================
		public function setNoProf($no_prof){
			
			$this->no_prof = $no_prof;
		}
		
		public function setNom($nom){
			
			$this->nom = $nom;
		}
		
		public function setPrenom($prenom){
			
			$this->prenom = $prenom;
		}
		
		public function setEmail($email){
			
			$this->email = $email;
		}
		
		public function setEnvoiCodes($envoi_codes){
			
			$this->envoi_codes = $envoi_codes;
		}
		
		//=======================================toString=======================================
		public function __toString(){
		
			return $this->no_prof . " : " . $this->nom . " " . $this->prenom . " " . $this->email . " " . $this->envoi_codes . ".</br>";
		}
	}
?>