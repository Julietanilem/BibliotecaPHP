<?php
 
 session_name("Gestionador");
 session_start();
    if(!isset($_SESSION['usuario']) ){
        header('Location: inicio.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adios</title>
    <link rel="stylesheet" href="./statics/styles/general.css">
    <?php
    if($_SESSION['casa'] == "ajolotes"){
        echo "<link rel='stylesheet' href='./statics/styles/ajolotes.css'>";
    }
    else if($_SESSION['casa'] == "halcones"){
        echo "<link rel='stylesheet' href='./statics/styles/halcones.css'>";
    }else if($_SESSION['casa'] == "teporingos"){
        echo "<link rel='stylesheet' href='./statics/styles/teporingos.css'>";
    }
    ?>
    <link rel="icon" href="https://www.aprendegamemaker.com/wp-content/uploads/2015/10/guardar-datos-ficheros-de-texto-game-maker-studio.png" type="image/png">
</head>
<body>
    <div id="contenedor">  
        <h1>Adiós <?php echo $_SESSION['usuario']?>, esperamos verte pronto</h1>
        <?php
        
            session_unset();
            session_destroy();
        ?>
        <a href="./inicio.php">Volver a inicio</a>
    </div>
</body>
</html>