
<?php
include("conexion.php");
$con=conectar();

if($_POST){
$rol=$_POST['nombre_rol'];

$sql="INSERT INTO `roles` (`id`, `rol`) VALUES (NULL, '$rol' )";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: admin_portada.php");
    
}
}
?>