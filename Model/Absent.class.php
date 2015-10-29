<?php
	class Absent{

		//===============================Definition des variables===============================
		private $no_etudiant;
		private $no_seance;
		private $absence;
		private $justificatif;

		//=====================================Constructeur=====================================
		public function __construct($no_etudiant, $no_seance, $absence, $justificatif){
		
			$this->setNo_etudiant($no_etudiant);
			$this->setNo_seance($no_seance);
			$this->setAbsence($absence);
			$this->setJustificatif($justificatif);
		}
			
		//========================================GETTERS========================================
		public function getNo_etudiant() {
		
			return $this->no_etudiant;
		}
		
		public function getNo_seance(){
		
			return $this->no_seance;
		}
		
		 public function getAbsence(){
		 
			return $this->absence;
		}
		
		 public function getJustificatif(){
		 
			return $this->justificatif;
		}

		//========================================SETTERS========================================
		public function setNo_etudiant($no_etudiant){
		
			$this->no_etudiant= $no_etudiant;
		}

		public function setNo_seance($no_seance){
		
			$this->no_seance= $no_seance;
		}

		public function setAbsence($absence){
		
			$this->absence= $absence;
		}

		public function setJustificatif($justificatif){
		
			$this->justificatif= $justificatif;
		}
		
		//=======================================toString=======================================
		public function __toString(){

			return $this->no_etudiant . " " . $this->no_seance . " " . $this->absence . " " . $this->justificatif . ".</br>";
		}
	}
?>