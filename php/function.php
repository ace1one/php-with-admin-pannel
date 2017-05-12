<?php
function form(){
if(isset($_POST["submit"])){

$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$category=$_POST['category'];

$que="insert into register VALUES(NULL,'$name','$address','$email','$phone','$gender','$category')";
$run=mysql_query($que);
if($que){
	?>
	<script>
		alert("insert data");
		window.open("form.php","_self");
	</script>

	<?php } 
	else{
		alert(" no insert data");
	}

}
}
?>



<?php
function problem(){
if(isset($_POST["submit"])){

$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$category=$_POST['category'];
$content=$_POST['content'];

$que="insert into problem VALUES(NULL,'$name','$address','$email','$phone','$category','$content')";
$run=mysql_query($que);
if($que){
	?>
	<script>
		alert("insert data");
		window.open("problem.php","_self");
	</script>

	<?php } 
	else{
		alert(" no insert data");
	}

}
}
?>

