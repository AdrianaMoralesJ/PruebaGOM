<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Inventario</title>
<link rel="stylesheet" type="text/css" href="CSS/e.css">


</head>

<?php
include_once("cabecera.html");
?>
<?php
$con=pg_connect("host='localhost' dbname=GOM port=5432 user=postgres password=panteras27")
or die ("Error de conexion".pg_last_error());

?>
<body>
  <?php
  include_once("aside.html");

   ?>
<br><br><br><br>
  <div id="inv">

  </div>
   <table>
     <tr>
       <td>ID</td>
       <td>Nombre</td>
       <td>Porcentaje</td>
       <td>Cantidad</td>
       <td>Proveedor</td>

     </tr>

     <?php
     $sql="select * from Inventario";


     $result=pg_query($con,$sql);

     while($mostrar=pg_fetch_array($result)){
      ?>

     <tr>
       <th><?php echo $mostrar['id_material']?></td>
       <th><?php echo $mostrar['nombre']?></td>
       <th><?php echo $mostrar['porcentaje']?></td>
       <th><?php echo $mostrar['cantidad']?></td>
       <th><?php echo $mostrar['fk_proveedor']?></td>
     </tr>

     <?php
   }
      ?>
   </table>
 </div>

</body>
</html>
<?php

include_once("footer.html");
?>
