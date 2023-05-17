<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi galería de imagenes</title>
</head>
<body align="center">
    <form action="./galeria.php" method="post" enctype="multipart/form-data" whith="100px" target="_self" >
        <fieldset style="width: 400px;" >
            <legend>Sube tu imagen</legend>
            <label for="nom">Nombre:</label><br>
            <input type="text" id="nom" name="nombre" required/><br><br>
          
            <label for="arch">Imagen:</label><br>
            <input type="file" id="arch" accept="image/*" name="arch"/><br><br>
           
            <button type="reset">Restablecer</button>
            <button type="submit">Enviar</button>
        </fieldset>
    </form>
    <?php
        //Guardar una imagen
        $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST["nombre"]:false;
        if(isset($_FILES["arch"]))
        {
            $arch = $_FILES["arch"];
            $name = $arch["name"];
            $ruta_temp = $arch["tmp_name"];
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            if(!file_exists('./img'))
            {
                if(mkdir('./img'));
            }
            rename($ruta_temp, "./img/$nombre.$ext");
        }
        //desplegar las imagenes
        $dir = opendir("./img");
        $hay_arch = true;
        $i = 0;
        $archivos = [];
        while($hay_arch)
        {
            $archivo = readdir($dir);
            if($archivo)
            {
                array_push($archivos, $archivo);
            }else{
                $hay_arch = false;
            }
            $i++;
        }
        echo "<h1 align='center'>Galería</h1><table border='1' cellpadding='10px' style='border-collapse:collapse;' align='center'>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>";
        foreach ($archivos as $img)
        {
            $nombreArchivo = pathinfo($img, PATHINFO_FILENAME) ;
            if( $img != "." && $img != ".."   )
                echo "<tr>
                        <td>
                            $nombreArchivo
                        </td>
                        <td>
                            <img src='./img/$img' height='200px'>
                        </td>
                    </tr>";
        }
        echo "</tbody>
        </table>";
     
    ?>
</body>
</html>