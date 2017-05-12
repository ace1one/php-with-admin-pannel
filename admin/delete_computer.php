<?php
include("database.php");

$id=$_GET['del'];
$que1="delete from register where id=$id";
$run1 = mysql_query($que1);
if($run1){
	header("location: view_computer.php");
}

?>




