<?php
include('cont.php');
$correo=$_POST['email'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['email']=$correo;


$conexion=mysqli_connect("localhost","root","","registro");

$consulta="SELECT*FROM datos where Correo='$correo' and Contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:index1.php");

}else{
    ?>
    <?php
    include("login.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);