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
		$_SESSION['mysqli']=$mysqli;
		////////////////



		//Preparació sentència preparada insertar usuari
		$sentencia = $connbd -> prepare("insert into $taula(codi,nom,contrasenya,email,ROL) values (?,?,?,?,?)");
		if (!$sentencia){
			echo "Error de preparació: (" . $connbd->errno . ") " . $connbd->error;
		} 
		//Vinculació. No és obligatori que el nom de la variable sigui igual nom del camp.
		// i --> integer, s --> string, d --> double
		$sentencia->bind_param("issss", $codi, $nom, $contrasenya, $email, $ROL);
		if (!$sentencia) {
			echo "Error de vinculació: (" . $sentencia->errno . ") " . $sentencia->error;
		}
		//Assignació del valor a cada paràmetre i enviament al servidor amb ordre d'execució
		$codi=100;
		$nom="Carlos";
		$contrasenya="patata";
		$email="carlos.rodero.garcia@gmail.com";
		$ROL="professor";
		if (!$sentencia->execute()) {
			echo "Error d'execució: (" . $sentencia->errno . ") " . $sentencia->error;
		}
		//Assignació del valor a cada paràmetre i enviament al servidor amb ordre d'execució
		
		//Missatge
		echo "Les noves dades s'han introduït a la base de dades<br><br>";

		//Consulta a la base de dades amb sentències preparada
		echo "CONSULTA DE TOTA LA TAULA $taula DE LA BASE DE DADES $baseDades<br>";
		$sentencia = $connbd -> prepare("select * from $taula");
		$sentencia->execute();
		$resultat=$sentencia->get_result();
		echo "<table border=1>\n";
		while ($fila = $resultat->fetch_assoc()) {
			echo "\t<tr>\n";
			foreach ($fila as $valor_columna) {
				echo "\t\t<td> $valor_columna </td>\n";
			}
			echo "\t</tr>\n";
		}
		echo "</table>\n";


		echo "<br>";


		echo "CONSULTA DE TOTS ELS USUARIS PER FILTRE<br>";
		$nom="carlos";
		$sentencia = $connbd -> prepare("select * from $taula where nom = ?"); //Prepara
		$sentencia->bind_param("s", $nom); //Vincula
		$sentencia->execute(); //Executa
		$resultat=$sentencia->get_result(); //Desa el resultat dins d'una variable
		echo "<table border=1>\n";
		while ($fila = $resultat->fetch_assoc()) {
			echo "\t<tr>\n";
			foreach ($fila as $valor_columna) {
				echo "\t\t<td> $valor_columna </td>\n";
			}
			echo "\t</tr>\n";
		}
		echo "</table>\n";					
		//Tancant connexió
		$connbd->close();		
	} 

	catch(PDOException $e){
		print "Error!!! ".$e->getMessage()."<br>";
		die();
	}
	
?>
