<?php

 //HTML
echo <<< HTML

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.navbar a.active {
    background-color: #4CAF50;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="#home" class="active">Home</a>

  <div class="dropdown">
    <button class="dropbtn">Usuarios 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/IntelVentory/Usuarios/insert.php">Registrar</a>
      <a href="http://localhost/IntelVentory/Usuarios/delete.php">Borrar</a>
      <a href="http://localhost/IntelVentory/Usuarios/show.php">Mostrar Usuarios</a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Proveedores 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/IntelVentory/Proveedor/insert.php">Registrar</a>
      <a href="http://localhost/IntelVentory/Proveedor/delete.php">Borrar</a>
      <a href="http://localhost/IntelVentory/Proveedor/show.php">Mostrar Proveedores</a>
    </div>
  </div> 

   <div class="dropdown">
    <button class="dropbtn">Articulos 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/IntelVentory/Articulos/insert.php">Registrar</a>
      <a href="http://localhost/IntelVentory/Articulos/delete.php">Borrar</a>
      <a href="http://localhost/IntelVentory/Articulos/show.php">Mostrar Articulos</a>
    </div>
  </div> 

   <div class="dropdown">
    <button class="dropbtn">Proyectos 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/IntelVentory/Proyecto/insert.php">Registrar</a>
      <a href="http://localhost/IntelVentory/Proyecto/delete.php">Borrar</a>
      <a href="http://localhost/IntelVentory/Proyecto/show.php">Mostrar Proyectos</a>
    </div>
    </div>

     <div class="dropdown">
    <button class="dropbtn">Movimientos
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/IntelVentory/Movimientos/insert.php">Registrar</a>
      <a href="http://localhost/IntelVentory/Movimientos/delete.php">Borrar</a>
      <a href="http://localhost/IntelVentory/Movimientos/show.php">Mostrar Movimientos</a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Mas.. 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/IntelVentory/Movimientos/showem.php">Movimientos por Usuarios</a>
      <a href="http://localhost/IntelVentory/Usuarios/update.php">Modificar Usuario</a>
      <a href="http://localhost/IntelVentory/Proveedor/update.php">Modificar Proveedor</a>
    </div>
  </div> 




  </div> 


</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1><center>Bienvenidos a IntelVentory</center></h1>


</body>
</html>

HTML;


?>