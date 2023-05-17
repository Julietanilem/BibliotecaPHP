<?php
// var_dump($_FILES);
// echo "<table border='1'>
//         <thead>
//             <tr>
//                 <th>Localidad</th>
//                 <th>Valor</th>
//             <tr>
//         </thead>
//         <tbody>";
// // foreach($_FILES["archivo"] as $clave => $valor){
// //     echo "<tr><td>$clave</td><td>$valor</td></tr> ";
// // }
// // foreach($_FILES["archivo1"] as $clave => $valor){
// //     echo "<tr><td>$clave</td><td>$valor</td></tr> ";
// // }
// // ,

// // foreach($_FILES["archivos"] as $clave => $valor){
 
// //         echo "<tr><td>$clave</td><td>$valor[0]</td></tr>";
     
// //     }
// // foreach($_FILES["archivos"] as $clave => $valor){
 
// //         echo "<tr><td>$clave</td><td>$valor[1]</td></tr>";
     
// //     }

// $arreglo = pathinfo($_FILES['archivo1']['name']);

// foreach($arreglo as $clave => $valor){
//      echo "<tr><td>$clave</td><td>$valor</td></tr> ";
// }
// echo "</tbody></table>";

// if(isset($_FILES['archivo'])){ //Si el archivo fue enviado en ese input
//     $name = $_FILES['archivo']['name']; //Nombre del archvo
//     $arch = $_FILES['archivo']['tmp_name']; //Locación temporal del archivo
//     $ext = pathinfo($name, PATHINFO_EXTENSION); //Extensión de archivo
//     $nombreDeArchivo = pathinfo($name, PATHINFO_FILENAME); //Nombre del archivo
//     rename($arch, "./$nombreDeArchivo.$ext"); //Cambiar de la locación temporal
//                                              // a una definida por nosotros
// }
// echo readfile("./archivo.txt");

// mkdir('./carpeta', 0777, true);
// $ruta='./archivo.txt';
// $file = fopen($ruta, 'a+');
$carp = opendir('../Tema2/');
// while(!feof($file))
// {
//     echo fgetc($file);
// }
// echo fgets($file).'<br>';
// var_dump(is_file('../Tema2'));
// var_dump(file_exists('../Tema2'));
// var_dump(is_dir('./archivo.txt'));
// mkdir('./Carpeta234/carp', 0777);
// rmdir('./carpeta');
// unlink('../Tema2/hola.txt');
// file_put_contents($ruta, 'Hola', FILE_APPEND);
// copy($ruta,'../Tema2/hola.txt');
// fwrite($file, "Ajolotes supremacy\n");
// rewind($file);
// echo file_get_contents($ruta);
// echo fread($file, filesize($ruta));
// 
// while(!feof($file))
// {
//      echo fgets($file).'<br>';
//  }
// $hay_harchivo =true;
// $i=0;
// $archivos=[];
// while($hay_harchivo)
// {
//     $archivoLeido = readdir($carp);
//     if($archivoLeido!=false)
//     {
//         $i++;
//         array_push($archivos, $archivoLeido);
//     }else{
//         $hay_harchivo=false;
//     }
// }
// var_dump($archivos);
// // fclose($file);
// closedir($carp);
?>