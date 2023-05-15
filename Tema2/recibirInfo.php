<?php
    echo $_POST["nombre"]."<br>";
    echo $_POST["fechaLlegada"]."<br>";
    echo $_POST["habitacion"]."<br>";
    echo $_POST["preferencia"][0].", ";
    echo $_POST["preferencia"][1];
    var_dump( $_POST);
    $dato =  $_POST["nombre"];

    $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "" )? $_POST["nombre"] : false;
    $fechaLlegada = (isset($_POST["fechaLlegada"]) && $_POST["fechaLlegada"] != "" )? $_POST["fechaLlegada"] : "No especifico";
?>