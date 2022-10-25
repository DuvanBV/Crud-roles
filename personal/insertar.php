<?php
include("conexion.php");
$con=conectar();


$username=$_POST['username'];
$email=$_POST['email'];
$role=$_POST['role'];


$sql="INSERT INTO mainlogin VALUES(NULL,'$username','$email','$role')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: personal_portada.php");
    
}else {
}
?>