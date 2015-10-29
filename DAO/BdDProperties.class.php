<?php
	//===================================Classe BdDProperties===================================
	class BdDProperties{
		
		//===============================Definition des variables===============================
		private static $host = 'localhost';
		private static $dbname = 'infoabsences';
		private static $port = 8000;
		private static $user = 'root';
		private static $password = '';
		
		//========================================GETTERS========================================
		public static function getHost(){
		
			return self::$host;
		}
		
		public static function getDbName(){
		
			return self::$dbname;
		}
		
		public static function getPort(){
		
			return self::$port;
		}
		
		public static function getUser(){
		
			return self::$user;
		}
		
		public static function getPassword(){
		
			return self::$password;
		}
	}
?>
