<?php
/*
    include_once('utility.php');
    include_once('inici_partida.php');
    include_once('Persona.php');
    include_once('Jugador.php');
*/
include_once('dbconnect.php');
    session_start();

    
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
/*
    $lbErrorVermell="";
    if(isset($_SESSION['usuari'])){
        pagina_partida();
    }else{
        if(isset($_POST["submitb"])) {
            if(empty($_POST["username"]) || empty($_POST["pass"])){
                $lbErrorVermell = "Camps buits";
            }else{
                if (isset($_POST["username"]) && (isset($_POST["pass"]))) {
                    if(gestioDades::comprobaDades(($_POST["username"]),($_POST["pass"]))){
                        $_SESSION['usuari']=$_POST["username"];
                        if(($_SESSION['usuari']=="admin@admin")&& ($_POST["pass"] == "111111")){
                            $jugador = new Administrador($_POST["username"],0,$_POST["pass"]);
                        }else{
                            $jugador = new Jugador($_SESSION['usuari'],0,$_POST["pass"]);
                        }
                        $_SESSION['jugador']=$jugador;
                        pagina_partida();
                    }else{
                        pagina_login();
                    }
                }
            }
        } else{
            pagina_login();
        }
    }

function pagina_login(){
$lbErrorVermell="";
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
                <span class="c2">El penjat</span>
                    <font face="Arial">
                        Nom d'usuari (e-mail):
                        <input class="camps" type="email" name="username"><br>
                        Contrasenya:
                        <input class="camps" type="password" name="pass" pattern="[A-Za-z0-9]{6}"><br>
                        <input class="bt" type="submit" name="submitb" value="Login / Registra'm"/><input class="bt" type="reset" value="Esborra"/>
                        <p> <?php echo $lbErrorVermell ?></p>
                    </font>
                </div>
        </form>
        <img id="imgCenter" src="media/captura.PNG"/>
        <div class="info">
            El penjat és un joc de paraules per a dues persones o més. L'objectiu és tractar d'endevinar el mot que es pensa un dels participants. Com a pista es col·loca el nombre de lletres. Per torn, es van dient lletres. Si són al mot secret, s'escriuen al seu lloc i si no, s'afegeix un traç al dibuix del penjat. Finalitza el joc quan la persona es penja i s'acaba el dibuix abans d'endevinar la paraula secreta.
        </div>
    <?php
        echo gestioDades::sortArray();
    ?>
    </body>
</html>
<?php
}
*/
?>
