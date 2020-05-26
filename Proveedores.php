<?php
include_once("cabecera.html");
include_once("aside.html");
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROVEEDORES</title>

    <link rel="stylesheet" type="text/css" href="CSS/EstiloProveedor.CSS">
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">

</head>
<body>

    <?php
    $conexion =pg_pconnect("host='localhost' port=5432 dbname=GOM user=postgres password=panteras27")
    or die ("Error de conexion".pg_last_error());
    ?>

    <div id="fondo">
    <div id="agrupar">
            <h1>PROVEEDORES</h1>

    <section id="seccion">
      <article><!--Primer proveedor-->
        <header>
              <hgroup>

    <?php
    $sql="select * from proveedor";

    $result=pg_query($conexion,$sql);

    $mostrar1=pg_fetch_array($result,0,PGSQL_NUM);

    echo $mostrar1[0].".- ";
    echo "Proveedor: ".$mostrar1[1]."\n <br/>";
    echo "Telefono: ".$mostrar1[2]."\n <br/>";
    echo "Contacto: ".$mostrar1[3]."\n <br/>";
    echo "Correo: ".$mostrar1[4]."\n <br/>";
    //echo "<br/> \n";
    ?>
              </hgroup>

        </header>
          <br>

          <figure>
                <img id="imagen" src="Imagenes/proveedor1.jpg">
                <figcaption>
                    <h3> Alsak </h3>
                </figcaption>
          </figure>
        </article><!-- Fin Primer proveedor-->

        <article><!--Segundo proveedor-->
        <header>
              <hgroup>
    <?php
    $sql="select * from proveedor";

    $result=pg_query($conexion,$sql);

    $mostrar2=pg_fetch_array($result,1,PGSQL_NUM);

    echo $mostrar2[0].".- ";
    echo "Proveedor: ".$mostrar2[1]."\n <br/>";
    echo "Telefono: ".$mostrar2[2]."\n <br/>";
    echo "Contacto: ".$mostrar2[3]."\n <br/>";
    echo "Correo: ".$mostrar2[4]."\n <br/>";
    //echo "<br/> \n";
    ?>
              </hgroup>
        </header>
           <br>

          <figure>
                <img id="imagen" src="Imagenes/proveedor2.jpg">
                <figcaption>
                    <h3> Baven </h3>
                </figcaption>
          </figure>
        </article><!-- Fin segundo proveedor-->

        <article><!--Tercer proveedor-->
        <header>
              <hgroup>
    <?php
    $sql="select * from proveedor";

    $result=pg_query($conexion,$sql);

    $mostrar3=pg_fetch_array($result,2,PGSQL_NUM);

    echo $mostrar3[0].".- ";
    echo "Proveedor: ".$mostrar3[1]."\n <br/>";
    echo "Telefono: ".$mostrar3[2]."\n <br/>";
    echo "Contacto: ".$mostrar3[3]."\n <br/>";
    echo "Correo: ".$mostrar3[4]."\n <br/>";
    //echo "<br/> \n";
    ?>
              </hgroup>
        </header>
          <br>

          <figure>
                <img id="imagen" src="Imagenes/proveedor3.jpg">
                <figcaption>
                    <h3> BC Maquinaria </h3>
                </figcaption>
          </figure>
        </article><!-- Fin tercer proveedor-->

        <article><!--Cuarto proveedor-->
        <header>
              <hgroup>
    <?php
    $sql="select * from proveedor";

    $result=pg_query($conexion,$sql);

    $mostrar4=pg_fetch_array($result,3,PGSQL_NUM);

    echo $mostrar4[0].".- ";
    echo "Proveedor: ".$mostrar4[1]."\n <br/>";
    echo "Telefono: ".$mostrar4[2]."\n <br/>";
    echo "Contacto: ".$mostrar4[3]."\n <br/>";
    echo "Correo: ".$mostrar4[4]."\n <br/>";
    //echo "<br/> \n";
    ?>
              </hgroup>
        </header>
          <br>

          <figure>
                <img id="imagen" src="Imagenes/proveedor4.jpg">
                <figcaption>
                    <h3>  Industrial del norte </h3>
                </figcaption>
          </figure>
        </article><!-- Fin cuarto proveedor-->

        <article><!--Quinto proveedor-->
        <header>
              <hgroup>
    <?php
    $sql="select * from proveedor";

    $result=pg_query($conexion,$sql);

    $mostrar5=pg_fetch_array($result,4,PGSQL_NUM);

    echo $mostrar5[0].".- ";
    echo "Proveedor: ".$mostrar5[1]."\n <br/>";
    echo "Telefono: ".$mostrar5[2]."\n <br/>";
    echo "Contacto: ".$mostrar5[3]."\n <br/>";
    echo "Correo: ".$mostrar5[4]."\n <br/>";
    //echo "<br/> \n";
    ?>
              </hgroup>
        </header>
         <br>

          <figure>
                <img id="imagen" src="Imagenes/proveedor5.jpg">
                <figcaption>
                   <h3> Decaro </h3>
                </figcaption>
          </figure>
        </article><!-- Fin Quinto proveedor-->

        <article><!--Sexto proveedor-->
        <header>
              <hgroup>
    <?php
    $sql="select * from proveedor";

    $result=pg_query($conexion,$sql);

    $mostrar6=pg_fetch_array($result,5,PGSQL_NUM);

    echo $mostrar6[0].".- ";
    echo "Proveedor: ".$mostrar6[1]."\n <br/>";
    echo "Telefono: ".$mostrar6[2]."\n <br/>";
    echo "Contacto: ".$mostrar6[3]."\n <br/>";
    echo "Correo: ".$mostrar6[4]."\n <br/>";
    //echo "<br/> \n";
    ?>
              </hgroup>
        </header>
          <br>

          <figure>
                <img id="imagen" src="Imagenes/proveedor6.jpg">
                <figcaption>
                    <h3> Yuca </h3>
                </figcaption>
          </figure>
        </article><!-- Fin Sexto proveedor-->

        <article><!--Sectimo proveedor-->
        <header>
              <hgroup>
    <?php
    $sql="select * from proveedor";

    $result=pg_query($conexion,$sql);

    $mostrar7=pg_fetch_array($result,6,PGSQL_NUM);

    echo $mostrar7[0].".- ";
    echo "Proveedor: ".$mostrar7[1]."\n <br/>";
    echo "Telefono: ".$mostrar7[2]."\n <br/>";
    echo "Contacto: ".$mostrar7[3]."\n <br/>";
    echo "Correo: ".$mostrar7[4]."\n <br/>";
    //echo "<br/> \n";
    ?>
              </hgroup>
        </header>
          <br>

          <figure>
                <img id="imagen" src="Imagenes/proveedor7.jpg">
                <figcaption>
                    <h3> Industrial P&R </h3>
                </figcaption>
          </figure>
        </article><!-- Fin sectimo proveedor-->

        </section> <!--Fin de section seccion-->

        </div> <!--fin div agrupar-->
    </div>

</body>
</html>

<?php
include_once("footer.html");
?>
