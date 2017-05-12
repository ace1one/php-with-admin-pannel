<?php
 session_start();
 if(!isset($_SESSION["id"])){
 	header("location: login.php");
}
else{
 ?>



<!DOCTYPE html>
<html>
<head>
    <title>college</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="../css/style.css">








	
	</head>
<body>

<div class="nav">
 <ul>
 <li><a href="index.php">Home</a></li>
  <li><a href="view_civil.php">View Civil</a></li>
  <li><a href="view_computer.php">View Computer</a></li>
  <li><a href="view_bca.php">BCA</a></li>
  <li><a href="view_problem.php">Student voice</a></li>
  <li><a href="view_post.php">View Post</a></li>
  <li><a href="view_change.php">View Team</a></li>
  <li style="float: right;"> 
   <?php if (isset($_SESSION['firstname'])){
         if($_SESSION['firstname']){
          ?>
        <a href="logout.php"><?php echo $_SESSION['firstname'] .'&nbsp(logout)'; ?></a></li>
        <?php }} ?>
 </ul>
</div>

<div class="container">
	<div class="intro">
	    <?php  echo  '<h2 style="color:red;" >WELCOME ('. $_SESSION['firstname'].') </h2>';?>
		<h3>This is the admin pannel </h3>
		<h4>You can manage your website from here...</h4>
	</div>
</div>

    <script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	
</body>
</html>
<?php } ?>