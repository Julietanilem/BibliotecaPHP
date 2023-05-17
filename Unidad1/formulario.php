<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link rel="icon" href="./media/img/coyote-html-diseño.ico" type="image/x-icon">
</head>
<body>
<?php

    if(isset($_POST["email"]))
    {
        echo "Método Post<br>";
        var_dump($_POST);
        var_dump($_GET);
        $email =( isset($_POST["email"]) && $_POST["email"] != "" )? $_POST['email'] : false;
        $telefono = isset($_POST["telefono"]) && $_POST["telefono"] != ""? $_POST['telefono'] : false;
        if($email && $telefono) 
        {
            echo "<br>Tus datos son:
                <ul>
                    <li>$email</li>
                    <li>$telefono</li>
                </ul>";
        }else{
            echo "Falatan datos";
        }

    }else if(isset($_GET["nombre"])){
        // echo "Método Get<br>";
        // var_dump($_GET);
        echo true;
        $nombre = isset($_GET["nombre"]) && $_GET["nombre"] != ""? $_GET['nombre'] : false;
        $contrasena = isset($_GET["contrasena"]) && $_GET["contrasena"] != ""? $_GET['contrasena'] : false;
     
        if($nombre && $contrasena)
        {
            echo "<br>Tus datos son:
                <ul>
                    <li>$nombre</li>
                    <li>$contrasena</li>
                </ul>";
        }else{
            // echo "Falatan datos";
        }
    }else{
        // echo "No se envió un formulario";
    }
?>
</body>
</html>