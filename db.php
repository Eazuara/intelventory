<?php


$conexion = mysqli_connect ("", "root", "") or die ("No puedo conectarme a la base de datos.");
mysqli_select_db($conexion, "company") or die("Seleccion de base de datos fallida " . mysqli_error());


?>
