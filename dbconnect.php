<?php
/*
    include_once('utility.php');
    include_once('inici_partida.php');
    include_once('Persona.php');
    include_once('Jugador.php');
*/

/*   MYSQLi
	$dbhost='localhost';
	$dbusername='root';
	$dbuserpassword='';
	$baseDades='material'; 
	$taula='';
	$mysqli = new mysqli($dbhost,$dbusername,$dbuserpassword,$baseDades);
	if ($mysqli->connect_errno){
		echo "Problema de connexió a la BD";
	}
	else {
		echo "<b>Connexió a la BD  $baseDades realitzada amb èxit</b><br><br>";
    }
	$_SESSION['mysqli']=$mysqli;
	
	*/
	$dbhost='localhost';
	$dbusername='root';
	$dbuserpassword='';
	$baseDades='material'; 
	try{
		$pdo = new PDO("mysql:host=$dbhost;dbname=$baseDades",$dbusername,$dbuserpassword);
		echo "Connecio a la BD $baseDades realitzada amb exit";

	} catch(PDOException $e){
		print "Error. ".$e->getMessage()."<br>";
		die();
	}
?>