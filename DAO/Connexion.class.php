<?php
	include('BdDProperties.class.php');

	//===================================Classe Connexion PDO===================================
	class Connexion{
		
		//===============================Definition des variables===============================
		private static $connexion;
		
		//=====================================Constructeur=====================================
		public function __construct(){
			
			self::$connexion = self::Connexion();
		}
		
		public static function Connexion(){
			
			try{
				
				$host = 'host=' . BdDProperties::getHost();
				$dbname = 'dbname=' . BdDProperties::getDbName();
				$port = BdDProperties::getPort();
				$user = BdDProperties::getUser();
				$pass = BdDProperties::getPassword();
				$objPdo = new PDO('mysql:' . $host . ';' . $dbname . ';' . $port . ';', $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
				// if(DEBUG){
					
					// $objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				// }
				echo "<script>console.log( 'Connecté' );</script>";
			}catch(PDOException $e){
				
				echo "Erreur de connexion : " . $e->getMessage() . "</br>";
				die();
			}
			return $objPdo;
		}
		
		//======================================SINGLETON=======================================
		private static function getInstance(){
			
			if(!isset(self::$connexion)){
				
				self::$connexion = new self();
			}
			return self::$connexion;
		}
		
		public function getConnexion(){
			
			return self::getInstance();
		}
		
		//===================================Fermer Connexion====================================
		public static function close(){
			
			if($this->connexion != null){
				
				$this->connexion = null;
			}
		}
	}
?>