<?php

$lifetime=-1;
  session_set_cookie_params($lifetime);
    session_start();
    include_once('dbconnect.php');
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
                    if(utility::comprovaDades(($_POST["username"]),($_POST["pass"]))){
                        $_SESSION['usuari']=$_POST["username"];
                        //echo "Login correcte";
                        pagina_materials();
                    }else{
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
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>SIGN UP</title>
    </head>
    <body>
    <div class="container-fluid">

        <h1>Login usuari amb sentències preparades</h1>
        </br>
        <form class="form-group" name="form_login" action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nom d'usuari:</label>    
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nom usuari" name="username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contrasenya</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="pass" pattern="[A-Za-z0-9]{6}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Email:</label>    
                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" name="email">
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="submit" class="btn btn-secondary" name="btRegistra">Registre</button>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="submit" class="btn btn-secondary" name="submitb" value="Login / Registra'm">Login</button>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="reset" class="btn btn-secondary" value="Esborra">Esborra</button>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="submit" class="btn btn-secondary" name="btSurt">Surt</button>
            </div>
        </form>
    </div>
    </body>
</html>
<?php
}

?>
