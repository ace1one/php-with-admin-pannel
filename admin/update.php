<?php
if(isset($_POST['submit'])){
 $id=$_GET['update'];

$img = $_FILES['img']['name'];
 $img2 = $_FILES['img']['tmp_name'];  
 $move = "../images/change/$img"; 
 move_uploaded_file($img2,$move);
 $namee = $_POST["namee"];
 $post = $_POST["post"];
 $phone=$_POST["phone"];
 $address=$_POST["address"];



 $updt="update  edit1 set  image='$img' , name='$namee', post='$post', phone='$phone', address='$address' where id='$id' ";








}



?>