<?php

include_once('dbconnect.php');
include_once('index.php');

Class utility{

    public static function comprovaDades($username,$passw){
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
            else{
                //echo "Connexió a la BD amb èxit<br><br>";
            }
            $sentencia = $connbd -> prepare("select * from $taula where nom = ? AND contrasenya = ?"); //Prepara
            $sentencia->bind_param("ss", $username,$passw); //Vincula
            $sentencia->execute(); //Executa
            $resultat=$sentencia->get_result(); //Desa el resultat dins d'una variable

            if ($resultat->num_rows > 0) { 
                while ($row = $resultat->fetch_assoc()) {
                    //echo 'ID: '.$row['codi'].'<br>';
                    //echo 'First Name: '.$row['nom'].'<br>';
                    //echo 'Password: '.$row['contrasenya'].'<br>';				
                    //Tancant connexió
                }
                $connbd->close();	
                return true;
            }
        } catch(PDOException $e){
            print "Error. ".$e->getMessage()."<br>";
            die();
        }
    }

    public static function create_user($user,$passw,$email){
        //$mysqli = $_SESSION['mysqli'];
        // mirar si l'usuari existeix mitjançant el email
        if(utility::exists_user($email)){
            echo "L'usuari ja existeix";
        }else{
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
                else{
                    //echo "Connexió a la BD amb èxit<br><br>";
                }

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
                $codi="DEFAULT";
                $nom=$user;
                $contrasenya=$passw;
                $email=$email;
                $ROL="alumne";
                if (!$sentencia->execute()) {
                    echo "Error d'execució: (" . $sentencia->errno . ") " . $sentencia->error;
                }
                //Assignació del valor a cada paràmetre i enviament al servidor amb ordre d'execució
                
                //Missatge
                //echo "Les noves dades s'han introduït a la base de dades<br><br>";

            }catch(PDOException $e){
            print "Error ".$e->getMessage()."<br>";
            die();
            }
        echo "usuari ".$user." creat";
        }
    }

    public static function exists_user($email){
        $dbhost='localhost';
	    $dbusername='root';
	    $dbuserpassword='root';
	    $baseDades='material'; 
	    $taula='usuaris';

	    try{
		    //Connexió
            $connbd = new mysqli($dbhost,$dbusername,$dbuserpassword,$baseDades);
            
		    $sentencia = $connbd -> prepare("select * from $taula where email = ?"); //Prepara
		    $sentencia->bind_param("s", $email); //Vincula
		    $sentencia->execute(); //Executa
            $resultat=$sentencia->get_result(); //Desa el resultat dins d'una variable
            /* Get the number of rows */
            
            $num_of_rows = $resultat->num_rows;

            while ($row = $resultat->fetch_assoc()) {
                //echo 'ID: '.$row['codi'].'<br>';
                //echo 'First Name: '.$row['nom'].'<br>';
                //echo 'Password: '.$row['contrasenya'].'<br>';				
		        //Tancant connexió
                $connbd->close();	
                return true;
            }
            //Tancant connexió
            $connbd->close();	
            return false;

        }catch(PDOException $e){
            print "Error ".$e->getMessage()."<br>";
            die();
        }
    }
}
?>