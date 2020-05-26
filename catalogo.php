<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Catalogo</title>
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
<br>

<table>
<table>
  <tr>
    <td>ID</td>
    <td>Nombre</td>
    <td>Descripci&oacute;n</td>
    <td>Costo</td>
    <td>Cantidad de empleados</td>

  </tr>

  <?php
  $sql="select * from catalogo where id_servicio=1";


  $result=pg_query($con,$sql);

  while($mostrar=pg_fetch_array($result)){
   ?>

  <tr>
    <th><?php echo $mostrar['id_servicio']?></td>
    <th><?php echo $mostrar['nombre_servicio']?></td>
    <th><?php echo $mostrar['descripcion']?></td>
    <th><?php echo $mostrar['costo']?></td>
    <th><?php echo $mostrar['cantidad_empleados']?></td>
  </tr>

  <?php
}
   ?>
</table>
<br><br><br>
<table>
  <tr>
    <td>ID</td>
    <td>Nombre</td>
    <td>Descripci&oacute;n</td>
    <td>Costo</td>
    <td>Cantidad de empleados</td>

  </tr>

  <?php
  $sql="select * from catalogo where id_servicio=2";


  $result=pg_query($con,$sql);

  while($mostrar=pg_fetch_array($result)){
   ?>

  <tr>
    <th><?php echo $mostrar['id_servicio']?></td>
    <th><?php echo $mostrar['nombre_servicio']?></td>
    <th><?php echo $mostrar['descripcion']?></td>
    <th><?php echo $mostrar['costo']?></td>
    <th><?php echo $mostrar['cantidad_empleados']?></td>
  </tr>

  <?php
}
   ?>
</table>
<br><br><br>
<table>
  <tr>
    <td>ID</td>
    <td>Nombre</td>
    <td>Descripci&oacute;n</td>
    <td>Costo</td>
    <td>Cantidad de empleados</td>

  </tr>

  <?php
  $sql="select * from catalogo where id_servicio=3";


  $result=pg_query($con,$sql);

  while($mostrar=pg_fetch_array($result)){
   ?>

  <tr>
    <th><?php echo $mostrar['id_servicio']?></td>
    <th><?php echo $mostrar['nombre_servicio']?></td>
    <th><?php echo $mostrar['descripcion']?></td>
    <th><?php echo $mostrar['costo']?></td>
    <th><?php echo $mostrar['cantidad_empleados']?></td>
  </tr>

  <?php
}
   ?>
</table>
<br><br><br>
<table>
  <tr>
    <td>ID</td>
    <td>Nombre</td>
    <td>Descripci&oacute;n</td>
    <td>Costo</td>
    <td>Cantidad de empleados</td>

  </tr>

  <?php
  $sql="select * from catalogo where id_servicio=4";


  $result=pg_query($con,$sql);

  while($mostrar=pg_fetch_array($result)){
   ?>

  <tr>
    <th><?php echo $mostrar['id_servicio']?></td>
    <th><?php echo $mostrar['nombre_servicio']?></td>
    <th><?php echo $mostrar['descripcion']?></td>
    <th><?php echo $mostrar['costo']?></td>
    <th><?php echo $mostrar['cantidad_empleados']?></td>
  </tr>

  <?php
}
   ?>
</table>
<br><br><br>
<table>
  <tr>
    <td>ID</td>
    <td>Nombre</td>
    <td>Descripci&oacute;n</td>
    <td>Costo</td>
    <td>Cantidad de empleados</td>

  </tr>

  <?php
  $sql="select * from catalogo where id_servicio=5";


  $result=pg_query($con,$sql);

  while($mostrar=pg_fetch_array($result)){
   ?>

  <tr>
    <th><?php echo $mostrar['id_servicio']?></td>
    <th><?php echo $mostrar['nombre_servicio']?></td>
    <th><?php echo $mostrar['descripcion']?></td>
    <th><?php echo $mostrar['costo']?></td>
    <th><?php echo $mostrar['cantidad_empleados']?></td>
  </tr>

  <?php
}
   ?>
</table>
<br><br><br>
<table>
  <tr>
    <td>ID</td>
    <td>Nombre</td>
    <td>Descripci&oacute;n</td>
    <td>Costo</td>
    <td>Cantidad de empleados</td>

  </tr>

  <?php
  $sql="select * from catalogo where id_servicio=6";


  $result=pg_query($con,$sql);

  while($mostrar=pg_fetch_array($result)){
   ?>

  <tr>
    <th><?php echo $mostrar['id_servicio']?></td>
    <th><?php echo $mostrar['nombre_servicio']?></td>
    <th><?php echo $mostrar['descripcion']?></td>
    <th><?php echo $mostrar['costo']?></td>
    <th><?php echo $mostrar['cantidad_empleados']?></td>
  </tr>

  <?php
}
   ?>
</table>
<br><br><br>
<table>
  <tr>
    <td>ID</td>
    <td>Nombre</td>
    <td>Descripci&oacute;n</td>
    <td>Costo</td>
    <td>Cantidad de empleados</td>

  </tr>

  <?php
  $sql="select * from catalogo where id_servicio=7";


  $result=pg_query($con,$sql);

  while($mostrar=pg_fetch_array($result)){
   ?>

  <tr>
    <th><?php echo $mostrar['id_servicio']?></td>
    <th><?php echo $mostrar['nombre_servicio']?></td>
    <th><?php echo $mostrar['descripcion']?></td>
    <th><?php echo $mostrar['costo']?></td>
    <th><?php echo $mostrar['cantidad_empleados']?></td>
  </tr>

  <?php
}
   ?>
</table>
</table>
<br><br><br><br><br>


</body>
</html>
<?php

include_once("footer.html");
?>
