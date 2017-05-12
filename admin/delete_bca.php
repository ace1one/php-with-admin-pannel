<?php
include("database.php");
$id=$_GET['del'];
$que2="delete from register where id=$id";
$run2=mysql_query($que2);
if($run2){
	header("location: view_bca.php");
}



?>