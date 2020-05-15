<?php
include_once("usuario.php");
   $user = $_GET['user'];
   $password = $_GET['password'];

   if (($user == "usuario") AND ($password == "12345")) {
      header('Location: menu.php');
   } else {
       echo "¡Usuario o contraseña incorrectos!";
       echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';

   }
?>
