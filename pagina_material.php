<?php
    //include_once('dbconnect.php');
    include_once('utility.php');

    // TOT HA DE SER EN PDO AMB TRY CATCH

    if(isset($_POST["btSurt"])){
        session_destroy();
        Header('Location: '.$_SERVER['PHP_SELF']);
    }

function pagina_materials(){

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
                <input class="bt" type="submit" name="btSurt" value="Surt"/>
            </form>
        </body>
        </html>
<?php
}

?>