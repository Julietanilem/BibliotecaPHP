<?php
    session_name("Gestionador");
    session_start();
    if(isset($_SESSION['usuario'])){
        header('Location: accion.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="./statics/styles/general.css">
    <link rel="icon" href="https://www.aprendegamemaker.com/wp-content/uploads/2015/10/guardar-datos-ficheros-de-texto-game-maker-studio.png" type="image/png">
</head>
<body>
    <div id="contenedor">
        <h1>Inicio de sesión</h1>
        <form action="./inicio.php" method="post" >
            <fieldset style="width :400px" id="formulario">
                <h2>Bienvenid@</h2>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" placeholder="Nombre Apellido" required>
                <br>
                <label for="casa">Casa</label>
                <select name="casa" id="casa">
                    <option disabled>Selecciona tu casa</option>
                    <option value="ajolotes">Ajolotes</option>
                    <option value="halcones">Halcones</option>
                    <option value="teporingos">Teporingos</option>

                </select>

                <br>
                <button type="submit" class="btn">Entrar</button>
            </fieldset>
        </form>
        <?php
            $nombre = (isset($_POST['usuario'])) ? $_POST['usuario'] : false;
            $casa = (isset($_POST['casa'])) ? $_POST['casa'] : false;
            if ($nombre && $casa) {
                $_SESSION['usuario'] = $nombre;
                $_SESSION['casa'] = $casa;
                header('Location: accion.php');
                exit;
            }
            else{
                echo "<h3>Llena tus datos</h3>";
            }
    ?>
    </div>
    
    <br>
</body>
</html>