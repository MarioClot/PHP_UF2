<?php
/*
    include_once('utility.php');
    include_once('inici_partida.php');
    include_once('Persona.php');
    include_once('Jugador.php');
*/
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
?>