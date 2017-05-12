<?php
include("database.php");
$id=$_GET['del'];
$que3="delete from content where id=$id";
$run3=mysql_query($que3);
if($run3){
	header("location: view_post.php");
	
 } ?>