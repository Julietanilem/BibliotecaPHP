<?php
    session_name("Gestionador");
    session_start();
    if(!isset($_SESSION['usuario'])){
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
    <title>¿Que quieres hacer?</title>
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
<body >
    <div id="contenedor">

        <h1 id="titulo">¿Que quieres hacer <?php echo $_SESSION['usuario']?>?</h1>
        <form action="./accion.php" method="post" >
            <fieldset id="form-act">
                <h3>Acciones</h3>
                <input type="radio" value="crear" name="accion" id="crear">
                <label for="crear">Crear</label><br>
            
                <input type="radio" value="renombrar" name="accion" id="renombrar">
                <label for="renombrar">Renombrar</label><br>

                <input type="radio" value="eliminar" name="accion" id="eliminar">
                <label for="eliminar">Eliminar</label><br>
                <button type="submit" id="btn">Aplicar</button>
            </fieldset>
        </form>
        <a href="./registro.php">Registro</a><br>
        <a href="./cerrarSesion.php">Salir</a><br>

        <?php

        unset($_SESSION['accion']);
        $accion = (isset($_POST['accion'])) ? $_POST['accion'] : false;
        if(!$accion){
            echo "<h3 id='advertencia'>Selecciona una acción</h3>";
        }else{
            $_SESSION['accion'] = $accion;
            header('Location: especificacion.php');
        }
        
        
        ?>
    </div>
</body>
</html>