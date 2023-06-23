<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$conexion=mysqli_connect("localhost","root","123456789","login")

$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:DAES PROYECTO\PROYECTO PULDIO Y PROYECTO SOLUPARTES\CARPETA RAIZ\HOME\PROYECTO_FINAL.html");

}else{
    ?>
    <?php
    include("location:DAES PROYECTO\PROYECTO PULDIO Y PROYECTO SOLUPARTES\CARPETA RAIZ\HOME\PROYECTO_FINAL.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
