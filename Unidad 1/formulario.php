<?php
    if(isset($_POST["email"]))
    {
        echo "Método Post<br>";
        $email = isset($_POST["email"]) && "email" != ""? $_POST['email'] : false;
        $telefono = isset($_POST["telefono"]) && "telefono" != ""? $_POST['telefono'] : false;
        
        if($email && $telefono)
        {
            echo "Tus datos son: <br>-".$email."<br>-".$telefono;
        }else{
            echo "Falatan datos";
        }

    }else if(isset($_GET["email"])){

    }
?>
