<?php
$db_host="bo82vrihacsgrs5o2cs1-mysql.services.clever-cloud.com"; //localhost server 
$db_user="ulpt8gxyi6pqcuyz";	//database username
$db_password="VSHu4DYwDnOj0fZkpF0U";	//database password   
$db_name="bo82vrihacsgrs5o2cs1";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>



