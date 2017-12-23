<?php

include_once('dbconnect.php');
include_once('login1.php');
/*
//function login($user,$passw){
    $myusername = 'Carlos';
    $mypassword = 'hola1';
    $consulta = "SELECT codi FROM usuaris WHERE nom = '$myusername' and contrasenya = '$mypassword'";
    $resultat = $mysqli->query($consulta) or die('ConsultaU fallida: ' . $mysqli->errno . $mysqli->error);
    $row = mysqli_fetch_array($resultat,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($resultat);

    // If result matched $myusername and $mypassword, table row must be 1 row
        
    if($count == 1) {
        $_SESSION['usuari'] = $myusername;
        
        header("location: welcome.php");
    }else {
        $error = "Nom o password invalids";
    }
//}*/

Class utility{

    public static function comprobaDades($user,$passw){
 
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
            header("location: welcome.php");
        }else {
            $error = "Nom o password invalids";
            return false;
        }
    
    }

    public static function comparable($arg1,$arg2){
        if(($arg1==$arg2) != false){
            return true;
        }else{
            return false;
        }
    }

    public static function b2s($bool){
        if($bool === false){
            return false;
        }else{
            return true;
        }
    }

    public static function compareObjects(&$obj1,&$obj2){
        return gestioDades::b2s($obj1 == $obj2);
    }
    
    public static function writeuser($user,$passwd){
        $filename="users.txt";
        file_put_contents($filename, $user." ".$passwd." 0".PHP_EOL, FILE_APPEND | LOCK_EX);
    }

    public static function cambiaPuntuacio($jugador,$punts){
        $filename="users.txt";
        $file = file($filename);
        $newLines = array();
        foreach ($file as $line)
            if (strpos($line, $jugador->__getNom()) !== false){
            }else{
                $newLines[] = chop($line);
            }
        $newFile = implode(PHP_EOL, $newLines);
        file_put_contents($filename, $newFile.PHP_EOL);
        file_put_contents($filename, $jugador->__getNom()." ".$jugador->__getPassword()." ".$punts.PHP_EOL, FILE_APPEND | LOCK_EX);
    }

    public static function sortArray(){
        $filename="users.txt";
        $fitxer=fopen($filename,"r") or die ("No s'ha pogut obrir el fitxer");
        if ($fitxer) {
            $mida_fitxer=filesize($filename);	
            $linia = explode(PHP_EOL, fread($fitxer,$mida_fitxer));
            $dades = array();
            foreach($linia as $parella){
                if($parella!=""){
                    $clau_valor=explode(" ",$parella);
                    $dades[$clau_valor[2]]=$clau_valor[0];
                }
            }
            ksort($dades);
            $dades = array_reverse($dades,TRUE);
            $cincPrimers = array_slice($dades, 0, 5, true);
            $out = "<h2>Top Users</h2><br><ol>";
            foreach($cincPrimers as $key => $elem){
                if(!is_array($elem)){
                        $out .= "<li><span>$elem. Punts: $key</span></li>";
                }
            }
            $out .= "</ol>";
            return $out; 
        }
    }
}
?>