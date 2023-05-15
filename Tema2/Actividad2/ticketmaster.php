<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus boletos</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/195/195123.png" type="image/jpg">
</head>
<body>
    <h2 align="center">Tus boletos :)</h2>
    <?php
         $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "")? $_POST['nombre'] : "No especifico";
         $apellido = (isset($_POST["apellido"]) && $_POST["apellido"] != "")? $_POST['apellido'] :  "No especifico";
         $fechaEvento= (isset($_POST["fechaEvento"]) && $_POST["fechaEvento"] != "")? $_POST['fechaEvento'] :  "No especifico";
         $artista = (isset($_POST["artista"]) && $_POST["artista"] != "")? $_POST['artista'] :  "No especifico";
         $zona =( isset($_POST["zona"]) && $_POST["zona"] != "")? $_POST['zona'] :  "No especifico";
         $lugar = (isset($_POST["lugar"]) && $_POST["lugar"] != "")? $_POST['lugar'] :  "No especifico";
         $extras = (isset($_POST["extras"]) && $_POST["extras"] != "")? $_POST['extras'] :  false;
         $numeroDeBoletos = (isset($_POST["numeroDeBoletos"]) && $_POST["numeroDeBoletos"] != "")? $_POST['numeroDeBoletos'] :  "No especifico";
         $artistasArray = [
            "TS" => ["Taylor Swift", "https://images.ecestaticos.com/krUnZU_tvCc1G_aBFBYHLjoG3eA=/52x0:2240x1641/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F683%2F683%2F977%2F683683977e4177c3e8a76d95ed9298d2.jpg", "Best believe I'm still bejeweled"],
            "LuisMiguel" =>["Luis Miguel", "https://cdn-3.expansion.mx/dims4/default/f7679e1/2147483647/strip/true/crop/470x600+0+0/resize/1200x1532!/format/webp/quality/60/?url=https%3A%2F%2Fcherry-brightspot.s3.amazonaws.com%2Fmedia%2F2010%2F07%2F28%2Fluismiguel2.jpg", "¿Cómo éstas? Te ves bien eh"],
            "AM" =>["Arctic Monkeys", "https://akamai.sscdn.co/uploadfile/letras/fotos/f/6/e/f/f6ef67111b9736b66b7d5b848d6d8612.jpg", "Yesterday's still leaking through the roof"],
            "HeroesD" => ["Héroes del silencio", "https://los40.com/los40/imagenes/2021/04/19/los40classic/1618831105_365567_1618831238_gigante_normal.jpg", "Lo que pienses de mí, te lo respeto"],
            "rosalia" => ["Rosalia", "https://media.gq.com.mx/photos/6223bfd6ea1d03f2815e72d3/master/pass/rosalia.jpg", "Con altura"]
         ];
         $zonaArray = [
            "pista" => ["Zona de pista", "https://img.chilango.com/2022/12/concierto-de-bad-bunny-cdmx-1024x576.jpg"],
            "asientosR" =>["Asientos reservados", "https://static8.depositphotos.com/1000193/913/i/600/depositphotos_9130956-stock-photo-auditorium-with-one-reserved-seat.jpg"],
            "gradas" =>["Gradas", "https://res.cloudinary.com/inoplay/image/upload/w_442/v6-id-gradas-y-toldos/grada-con-sillas-inp-eg12.jpg" ],
            "VIP" => ["Zona VIP",  "https://radiocassette.es/wp-content/uploads/2020/04/IMG_0030.jpg"],
            "palcos" => ["palcos","https://www.dondeir.com/wp-content/uploads/2021/06/como-seran-los-conciertos-palcos-privados-al-aire-libre-cdmx.jpg" ]
         ];
         $luagaresArray = [
            "auditorio" => [ "Auditorio Nacional", "https://conciertosmexico.com/wp-content/uploads/2021/06/auditorionacional.jpg"],
            "palacio" =>[ "Palacio de los Deportes", "https://www.mexicodesconocido.com.mx/wp-content/uploads/2022/04/palacio-de-los-deportes-domo-de-cobre.jpg"],
            "foro" =>["Foro sol", " https://forosol.mx/wp-content/uploads/2019/08/Foro-Sol-Gradas-Vista.jpg" ],
            "teatro" => ["Teatro Metropolitan",  "https://lh6.ggpht.com/-2d_8QGavyH8/VEXYrB-cmRI/AAAAAAAAKu0/24vcmsmb_Fg/w1200-h630-p-k-no-nu/Teatro-Metropolitan.jpg"],
         ];
         if($numeroDeBoletos>0){
                $i = 0;
                $artistaN= $artistasArray[$artista][0];
                $imagenA= $artistasArray[$artista][1];
                $frase= $artistasArray[$artista][2];
                $lugarN= $luagaresArray[$lugar][0];
                $imagenL= $luagaresArray[$lugar][1];
                $zonaN= $zonaArray[$zona][0];
                $imagenZ= $zonaArray[$zona][1];
                while($i < $numeroDeBoletos && $i<=15)
                {
                    echo "<table border='1' cellpadding='10px' style='border-collapse:collapse;' align='center' >
                        <thead>
                            <tr>
                            <th colspan='4'>Boletos para  $artistaN</th>  
                            </tr> 
                        </thead>
                        <tbody>
                            <tr>
                                <td><center>$nombre</center></td>
                                <td><center>$apellido</center></td>
                                <td><center>Fecha: $fechaEvento</center></td> 
                                <td rowspan='3'><img src=' $imagenA' alt='$artistaN'  height='300px' /></td>
                            </tr>
                            <tr>
                                <td><center>$lugarN </center></td>
                                <td><center>$zonaN</center></td>
                                <td rowspan='2'>";
                                if($extras)
                                {
                                    echo "<center>Extras:</center><br><ul>";
                                    foreach($extras as $cosa){
                                        echo "<li>$cosa</li>";
                                    } 
                                    echo "</ul>";
                                        
                                }else{
                                    echo "<center>Sin extraas</center>";
                                }
                                                          
                            echo   "</td>
                                
                            </tr>
                            <tr>
                                <td><center><img src= '$imagenL' height='100px'></center></td>
                                <td><center><img src='$imagenZ' height='100px'></center></td>
                          
                            </tr>
                            <tr>
                                <td colspan='4'><center>\"$frase\"</center></td>
                            </tr>
                        </tbody>
                    </table><br/><br/>";
                    $i++;
                }
                if($numeroDeBoletos>15)
                {
                    $faltantes=$numeroDeBoletos-15;
                    echo "<p>Se solicitaron demasiados boletos, se imprimieron 15 boletos faltaron $faltantes de los $numeroDeBoletos solicitados</p>";
                }
            }
            else{
                echo "<h1>No seleccionaste boletos :( </h1>";
            }

    ?>
</body>
</html>