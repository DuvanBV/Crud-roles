<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$username=$_POST['username'];
$email=$_POST['email'];
$role=$_POST['role'];

$sql="UPDATE mainlogin SET  username='$username',email='$email',role='$role' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: personal_portada.php");
    }
?>