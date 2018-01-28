<?php

//MYSQLi
	$dbhost='localhost';
	$dbusername='root';
	$dbuserpassword='root';
	$baseDades='material'; 
	$taula='usuaris';

	try{
		//Connexió
		$connbd = new mysqli($dbhost,$dbusername,$dbuserpassword,$baseDades);
		if ($connbd->connect_errno){
			echo "Problema de connexió a la BD<br><br>";
		}	
		else echo "Connexió a la BD amb èxit<br><br>";

		////////////////
		//$_SESSION['mysqli']=$mysqli;
		////////////////

		//Tancant connexió
		$connbd->close();	
	}

	catch(PDOException $e){
		print "Error!!! ".$e->getMessage()."<br>";
		die();
	}
	
?>
