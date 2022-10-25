<?php
function conectar(){
    $host="bo82vrihacsgrs5o2cs1-mysql.services.clever-cloud.com";
    $user="ulpt8gxyi6pqcuyz";
    $pass="VSHu4DYwDnOj0fZkpF0U";

    $bd="bo82vrihacsgrs5o2cs1";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
