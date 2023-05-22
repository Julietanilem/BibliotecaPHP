<?php
    session_name("Gestionador");
    session_start();
    if(!isset($_SESSION['usuario']) ){
        header('Location: inicio.php');
        exit;
    }
    if(!isset($_SESSION['accion']) ){
        header('Location: accion.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especifica</title>
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
        <h1 id="titulo">Especifica a que archivo vas a  <?php  echo  $_SESSION['accion']. " ".$_SESSION['usuario']?></h1>
        <form action="./registro.php" method="post" >
            <fieldset id="form-act">
                <h3>¿Qué archivo o carpeta?</h3>
                <input type="radio" name="tipo" id="arch" value="archivo" checked>
                <label for="archivo">Archivo</label><br>
                <input type="radio" name="tipo" id="dir" value="directorio">
                <label for="dir">Carpeta</label><br>
                
                <label for="archivo">Nombre del archivo o carpeta</label>
                <input type="text" name="archivo" id="archivo" placeholder="Nombre_del_archivo.ext" required>
                <?php
                if($_SESSION['accion']=="renombrar")
                {
                    echo '<br><label for="nuevo">Nuevo nombre del archivo o carpeta</label>
                    <input type="text" name="nuevo" id="nuevo" placeholder="Nombre_del_archivo.pdf" required>';
                }
                ?>
                <br>
                <button type="submit" id="btn">Aplicar</button>
            </fieldset>
        </form>
    </div>
</body>
</html>