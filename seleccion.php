<?php 
$objConexion = new conexion;
$rol = "SELECT * FROM `roles`";
$rol = $objConexion->consultar($rol);
/* $query=mysqli_query($con,$sql); */
?>