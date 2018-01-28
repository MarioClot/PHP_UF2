<?php

$lifetime=-1;
  session_set_cookie_params($lifetime);
session_start();
    //include_once('dbconnect.php');
    include_once('utility.php');
    include_once('pagina_material.php');

    if(isset($_POST["btSurt"])){
        session_destroy();
        Header('Location: '.$_SERVER['PHP_SELF']);
    }

    if(isset($_POST["btRegistra"])){
        if(empty($_POST["username"]) || empty($_POST["pass"]) || empty($_POST["email"])){
            echo "Camps buits";
        }else{
            utility::create_user($_POST["username"],$_POST["pass"],$_POST["email"]);
        }
    }
    /*
    $consulta = 'SELECT * FROM usuaris';
	$resultat = $mysqli->query($consulta) or die('Consulta fallida: ' . $mysqli->errno . $mysqli->error);
	echo "<b>Entrades de la base de dades: </b>";
	echo "<table>\n";
	while ($fila = $resultat->fetch_assoc()) {
		echo "\t<tr>\n";
		foreach ($fila as $valor_columna) {
			echo "\t\t<td> $valor_columna </td>\n";
		}
		echo "\t</tr>\n";
	}
	echo "</table>\n";
	echo "<br><b>Total registres:</b> " .$resultat->num_rows;
*/
    if(isset($_SESSION['usuari'])){
        
        // AQUI HEM DE POSAR QUE VAGI A LA PAGINA DELS MATERIALS JA 
        pagina_materials();
        
        //pagina_login();
    }else{
        if(isset($_POST["submitb"])) {
            if(empty($_POST["username"]) || empty($_POST["pass"])){
                echo "Camps buits";
            }else{
                if (isset($_POST["username"]) && (isset($_POST["pass"]))) {
                    if(utility::comprobaDades(($_POST["username"]),($_POST["pass"]))){
                        $_SESSION['usuari']=$_POST["username"];

                        echo "Login correcte";
                        pagina_materials();
                        //pagina_partida();
                    }else{
                        echo $_POST["username"];
                        echo $_POST["pass"];
                        echo "Login incorrecte";
                        pagina_login();
                    }
                }
            }
        } else{
            pagina_login();
        }
    }

function pagina_login(){

?>
<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <title>SIGN UP</title>
    </head>
    <body>
        <form name="form_login" action="" method="POST">    
                <div class="c1">
                <span class="c2">Log in</span>
                    <font face="Arial">
                        Nom d'usuari:
                        <input class="camps" type="text" name="username"><br>
                        Contrasenya:
                        <input class="camps" type="password" name="pass" pattern="[A-Za-z0-9]{5}"><br>
                        E-mail:
                        <input class="camps" type="text" name="email"><br>
                        <input class="bt" type="submit" name="submitb" value="Login / Registra'm"/><input class="bt" type="reset" value="Esborra"/>
                        <input class="bt" type="submit" name="btRegistra" value="Registra'm"/><input class="bt" type="reset" value="Esborra"/>
                        <input class="bt" type="submit" name="btSurt" value="Surt"/>
                    </font>
                </div>
        </form>
    </body>
</html>
<?php
}

?>
