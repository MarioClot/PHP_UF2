<?php

//include_once('dbconnect.php');
include_once('login1.php');

Class utility{

    public static function comprobaDades($user,$passw){
        /*  MYSQLi
        $myusername = $user;
        $mypassword = $passw;
        $mysqli = $_SESSION['mysqli'];
        $consulta = "SELECT codi FROM usuaris WHERE nom = '$myusername' and contrasenya = '$mypassword'";
        $resultat = $mysqli->query($consulta) or die('Consulta fallida: ' . $mysqli->errno . $mysqli->error);
        $row = mysqli_fetch_array($resultat,MYSQLI_ASSOC);
        //$active = $row['active'];

        $count = $resultat->num_rows;
        // If result matched $myusername and $mypassword, table row must be 1 row
            
        if($count == 1) {
            $_SESSION['usuari'] = $myusername;
            return true;
            //header("location: welcome.php");
            header("location: pagina_material.php");
        }else {
            $error = "Nom o password invalids";
            return false;
        }
        */
        $dbhost='localhost';
	    $dbusername='root';
	    $dbuserpassword='';
        $baseDades='material'; 
    
        try{
            $pdo = new PDO("mysql:host=$dbhost;dbname=$baseDades",$dbusername,$dbuserpassword);
            $consulta = "SELECT COUNT(*) FROM usuaris WHERE nom = '$user' and AES_DECRYPT(contrasenya,'php') = '$passw'";
            $resultat = $pdo->query($consulta) or die('Consulta fallida.');
            if($resultat->fetchColumn() == 1){
                $_SESSION['usuari'] = $user;
                return true;
                //header("location: pagina_material.php");
            }else {
                echo "Nom o password invalids";
                return false;
            }
        } catch(PDOException $e){
            print "Error. ".$e->getMessage()."<br>";
            die();
        }
    }

    //funcio sense comprobar si funciona o no
    public static function create_user($user,$passw,$email){
        $dbhost='localhost';
	    $dbusername='root';
	    $dbuserpassword='';
	    $baseDades='material'; 
        try{
            $pdo = new PDO("mysql:host=$dbhost;dbname=$baseDades",$dbusername,$dbuserpassword);
            //$mysqli = $_SESSION['mysqli'];
            // mirar si l'usuari existeix mitjançant el email
            if(utility::exists_user($email)){
                echo "L'usuari ja existeix";
            }else{

                $consulta = "INSERT INTO usuaris (nom,contrasenya,email) VALUES ('$user',AES_ENCRYPT('$passw','php'),'$email')";
                $pdo->exec($consulta);
                $error = $pdo->errorInfo();
                if ($error[0] != 0){
                    echo "Error enregistrant usuari<br>";

                }else{
                    echo "Usuari enregistrat<br>";
                }
            }
        }catch(PDOException $e){
            print "Error ".$e->getMessage()."<br>";
            die();
        }
    }

        //funcio sense comprobar si funciona o no
    public static function exists_user($email){
        $dbhost='localhost';
	    $dbusername='root';
	    $dbuserpassword='';
	    $baseDades='material'; 
        try{
            $pdo = new PDO("mysql:host=$dbhost;dbname=$baseDades",$dbusername,$dbuserpassword);
            //$mysqli = $_SESSION['mysqli'];
            $consulta = "SELECT COUNT(*) FROM usuaris WHERE email = '$email'";
            $resultat = $pdo->query($consulta) or die('Consulta fallida.');
            if($resultat->fetchColumn() == 1){
                return true;
            }else {
                return false;
            }
        }catch(PDOException $e){
            print "Error ".$e->getMessage()."<br>";
            die();
        }
    }
}
?>