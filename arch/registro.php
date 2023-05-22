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
    <title>Registro</title>
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
        <h1>Registro de acciones</h1>
        <?php
        $ok = true;
        $tipo = (isset($_POST['tipo'])) ? $_POST['tipo'] : false;
        $archivo = (isset($_POST['archivo'])) ? $_POST['archivo'] : false;
        $nuevo = (isset($_POST['nuevo'])) ? $_POST['nuevo'] : false;
        if(isset($_SESSION['accion'])){
        
            switch ($_SESSION["accion"])
            {
                case "crear":
                    if($tipo == "archivo"){
                        if(file_exists("./statics/media/arch/".$archivo) )
                        {
                            echo "<h1>El archivo $archivo ya existe</h1>";
                            $ok=false;
                        }else{
                            $arch = fopen("./statics/media/arch/".$archivo, "w");
                            fclose($arch);
                        }
                    
                    }else{
                        if(file_exists("./statics/media/arch/".$archivo) )
                        {
                            echo "<h1>El archivo $archivo ya existe</h1>";
                            $ok=false;
                        }else
                        {
                            mkdir("./statics/media/arch/".$archivo);
                        }
                    
                    }
                    break;
                case "renombrar":
                    if($tipo == "archivo"){
                        if(is_file("./statics/media/arch/".$archivo) )
                        {
                            rename("./statics/media/arch/".$archivo,"./statics/media/arch/". $nuevo);
                        }else{
                            echo "<h1>El archivo $archivo no existe</h1>";
                            $ok = false;
                        }
                    
                    }else{
                        if(is_dir("./statics/media/arch/".$archivo) )
                        {
                            rename("./statics/media/arch/".$archivo, "./statics/media/arch/". $nuevo);
                        }else{
                            echo "<h1>El directorio $archivo no existe</h1>";
                            $ok = false;
                        }
                    }
                    break;
                case "eliminar":
                    if($tipo == "archivo"){
                        if(file_exists("./statics/media/arch/".$archivo) && is_file("./statics/media/arch/".$archivo) ){
                                unlink("./statics/media/arch/".$archivo);
                        }else{
                            echo "<h1>El archivo $archivo no existe</h1>";
                            $ok=false;
                        }
                        
                    }else{
                        if(file_exists("./statics/media/arch/".$archivo) && is_dir("./statics/media/arch/".$archivo) ){
                            rmdir("./statics/media/arch/".$archivo);
                        }else{
                            echo "<h1>El directorio  $archivo no existe</h1>";
                            $ok=false;
                        }
                        
                    }
                    break;
                default:
                    echo "<h1>Selecciona una acción</h1>";
                    break;
            }
        }

        //escribir en el archivo
        if($ok)
        {
            $arch =  fopen("registro.txt", "a+");
            if(isset($_SESSION['accion']))
            {
                $cadena = "El usuario ".$_SESSION['usuario']. " de la casa ".$_SESSION["casa"]." decidió ".$_SESSION['accion']." el $tipo ".$archivo;
                if($_SESSION['accion'] == "renombrar"){
                    $cadena .= " con el nombre ".$nuevo;
                }
                unset($_SESSION['accion']);
                fwrite($arch, $cadena."\n");
            }
        
            
            rewind($arch);
            echo "<ul>";
            while(!feof($arch)){
                echo "<li>" .fgets($arch)."</li>";
            }
            echo "</ul>";
        }
    
        ?>
        <a href="./accion.php">Volver</a>
        
    </div>
</body>
</html>