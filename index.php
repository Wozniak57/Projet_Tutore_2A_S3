<?php 
	session_start();
	
	if(!empty($_GET['page']) && is_file('controleurs/'.$_GET['page'].'.php')){
	
		include 'controleurs/'.$_GET['page'].'.php';
	}
	else{
		
		// include 'Vue/Test2.php';
		include 'Test_ical.php';
	}
	
	$objPdo = NULL;
?>