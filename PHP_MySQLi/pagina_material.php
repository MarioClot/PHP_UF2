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
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <style> input {width: 10%;} </style>
            <title>SIGN UP</title>
        </head>
        <body>
        <div class="container-fluid">
            <h3>Pàgina de material<h3>
            <form name="form_login" action="" method="POST">
                <div class="form-group">
                    <input type="submit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="btSurt" value="Surt">
                    <small id="emailHelp" class="form-text text-muted">Torna a la pàgina de login</small>
                </div>
            </form>

        </div>
        </body>
        </html>
<?php
}

?>