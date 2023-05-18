<?php
    // copy('../../ejemplo.txt', './arch.txt');
    // unlink('../../ejemplo.txt');
    $archivo = fopen('./arch.txt', 'a+');

    // echo fread ($archivo, filesize('./arch.txt'));
    //  echo fgets($archivo);
    // fwrite($archivo, "\nHola");
    // rewind($archivo);
    // while(!feof($archivo))
    // {
    //     echo fgets($archivo).'<br>';
    // }
    rmdir('./directorio');
?>