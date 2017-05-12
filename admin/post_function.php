<?php
if(isset($_POST['submit'])){

include("database.php");


$img = $_FILES['img']['name'];
 $img1 = $_FILES['img']['tmp_name'];  
 $title = $_POST["title"];
 $move = "../images/upload/$img"; 
 move_uploaded_file($img1,$move);
 $content = $_POST["content"];

$que="insert into content VALUES(NULL,'$img','$title','$content')";
$run=mysql_query($que);
if($run){
	?>

	<script>
		alert("insert data");
		window.open("post.php","_self");
	</script>
     
	<?php } 
	else{
		
		echo mysql_error();
	}

}
?>




