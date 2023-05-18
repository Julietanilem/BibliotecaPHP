<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de imagenes</title>
    <link rel="icon" href="https://kinsta.com/es/wp-content/uploads/sites/8/2018/07/plugins-galeria-fotos-wordpress.jpg" type="image/jpg">
</head>
<body>
    <form action="./archivos.php" method="post" enctype="multipart/form-data" target="_self" >
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

    ?>
</body>
</html>
