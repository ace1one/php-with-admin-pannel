<?php  
  session_start();
 // if(isset($_POST['submit'])){
   // if(!isset($_SESSION["id"])){
   	// echo "oops USERNAME OR PASSWORD incorrect";
//  	// header("location: login.php");
// }
// }

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
  <li><a href="index.php">View Civil</a></li>
  <li><a href="index.php">View Computer</a></li>
  <li><a href="index.php">BCA</a></li>
  <li><a href="view_problem.php">Student voice</a></li>
  <li><a href="index.php">View Post</a></li>
  <li><a href="view_change.php">View Team</a></li>
 </ul>
</div>

<div class="container">
    
	<div class="login" style="margin: 130px 30px;">
	<div class="row">
	<div class="col-sm-7">
	<div  style="margin-left: 90px;" class="alert alert-danger"  role="alert"><strong>Warning!</strong>&nbsp You must login first to access the admin panel.</div>
    <!-- <h4 style="margin-left: 90px; color: red;">Please login to access the admin pannel.</h4> -->
    </div>
    </div>

	
   <?php 
     include("login_function.php");
   
   ?>




      <form class="form-horizontal" role="form" action="login.php" method="post">
		<div class="form-group">
		<label  class="col-sm-2 control-label">Username</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" name="username"
		placeholder="Username" maxlength="20" required="required">
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-2 control-label">Password</label>
		<div class="col-sm-5">
		<input type="password" class="form-control" name="password"
		placeholder="Password" maxlength="20" required="required">
		</div>
		</div>
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<div class="checkbox">
		<label>
		<input type="checkbox"> Remember me
		</label>
		</div>
		</div>
		</div>
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<input type="submit" class="btn btn-default" name="submit" value="Log In"/>
		</div>
		</div>
  </form>
	 
      
   </div>
</div>




    <script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	
</body>
</html>