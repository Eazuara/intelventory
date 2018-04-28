<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";


// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

if (isset($_POST['submit']))
{
    $SKU = $_POST['SKU'];
    $qty = $_POST['stock'];
    $tipo=$_POST['select'];
    $id=$_POST['id'];
    $fecha=$_POST['fecha'];
    




    if($tipo== 'Devolucion'){
        $result= "UPDATE articulo SET Stock = Stock + '$qty'
        WHERE SKU='$SKU'";
    }else if ($tipo == 'Retiro'){
        $result= "UPDATE articulo SET Stock = Stock - '$qty'
        WHERE SKU='$SKU'";
    }

     $result2 = "INSERT INTO movimiento (Tipo_Mov,SKU,Cantidad,ID_Usuario,Fecha_Movimiento) VALUES ('$tipo','$SKU','$qty','$id','$fecha')";
     
     

 if(mysqli_query($conn,$result))
 {
echo "<script>alert('MOVEMENT SUCCESSFULLY');</script>";
}
else
 {
 echo "<script>alert('MOVEMENT FAILED');</script>";
 }
 
 

  if(mysqli_query($conn,$result2))
 {
echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
}
else
 {
 echo "<script>alert('FAILED TO INSERT ".mysqli_error($conn).");</script>";
 }
}

 
mysqli_close($conn);




echo <<< HTML

<html>
    <head>
        <meta charset="UTF-8">
        <title>sample</title>
    </head>
    <body>
      <div class="container">
        <form action="insert.php" method = "POST">
          <p>
          Tipo de Movimiento:<select name="select">
            <option value="Retiro">Retiro</option>
            <option value="Devolucion">Devolucion</option>
            </select><br>
            SKU:<input type="text" name="SKU"><br>
            Cantidad: <input type="number" name="stock" min="1" max="255"><br>
            ID_Empleado: <input type="text" name="id"><br>
            Fecha de Movimiento: <input type="date" name="fecha"><br>
          <input type ="submit" name="submit" value="send to database"> </input>
          </p>
        </form>
        <a href="http://localhost/IntelVentory/menu.php"><button class="menu">Menu</button></a>

      </div>

    </body>

<style>
body {
  font: 13px/20px 'Lucida Grande', Tahoma, Verdana, sans-serif;
  color: #404040;
  background: #0ca3d2;
}
p{
  margin-left: 2em;
}
input[type=text], input[type=password], input[type=date] , input[type=email]{
  margin: 5px;
  padding: 0 10px;
  width: 200px;
  height: 34px;
  color: #404040;
  background: white;
  border: 1px solid;
  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
  border-radius: 2px;
  outline: 5px solid #eff4f7;
  -moz-outline-radius: 3px; // Can we get this on WebKit please?
  @include box-shadow(inset 0 1px 3px rgba(black, .12));
}
.container{
  background-color: white;
margin: 80px auto;
border: 2px solid transparent;
border-radius: 25px;

  width: 640px;
}
.menu{
  position: relative;
      top: -2em;
    left: 20em;
  padding: 0 18px;
  height: 29px;
  font-size: 12px;
  font-weight: bold;
  color: #527881;
  text-shadow: 0 1px #e3f1f1;
  background: #cde5ef;
  border: 1px solid;
  border-color: #b4ccce #b3c0c8 #9eb9c2;
  border-radius: 16px;
  outline: 0;
  @include box-sizing(content-box); // Firefox sets this to border-box by default
  @include linear-gradient(top, #edf5f8, #cde5ef);
  @include box-shadow(inset 0 1px white, 0 1px 2px rgba(black, .15));
}
input[type=submit] {
  position: relative;
  top:1.5em;
  padding: 0 18px;
  height: 29px;
  font-size: 12px;
  font-weight: bold;
  color: #527881;
  text-shadow: 0 1px #e3f1f1;
  background: #cde5ef;
  border: 1px solid;
  border-color: #b4ccce #b3c0c8 #9eb9c2;
  border-radius: 16px;
  outline: 0;
  @include box-sizing(content-box); // Firefox sets this to border-box by default
  @include linear-gradient(top, #edf5f8, #cde5ef);
  @include box-shadow(inset 0 1px white, 0 1px 2px rgba(black, .15));}
</style>
</html> 
HTML;
?>