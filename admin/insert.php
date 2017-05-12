<?php
if(isset($_POST['submit'])){

include("database.php");


 $img = $_FILES['img']['name'];
 $img2 = $_FILES['img']['tmp_name'];  
 $move = "../images/change/$img"; 
 move_uploaded_file($img2,$move);
 $namee = $_POST["namee"];
 $post = $_POST["post"];
 $phone=$_POST["phone"];
 $address=$_POST["address"];

$query1="insert into edit VALUES(NULL,'$img','$namee','$post','$phone','$address')";
$runn1=mysql_query($query1);
if($runn1){
	?>

	<script>
		alert("insert data");
		window.open("change.php","_self");
	</script>
     
	<?php } 
	else{
		
		echo mysql_error();
	}

}
?>




