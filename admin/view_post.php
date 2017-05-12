<?php
session_start();
if(!isset($_SESSION['id'])){
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

  <a href="logout.php"><?php echo $_SESSION['firstname'];?>&nbsp(logout)</a></li>
 </ul>
</div>

 <div class="main-body-naviation">

         <div class="container">
         <h3>View All Post Here</h3>
         <a href="post.php" class="btn btn-primary">Add New Post</a>
            <table class="table">
            
            <thead>
            <tr>
            <th>id</th>
            <th>Image</th>
            <th>Title</th>
            <th>Content</th>
            <th>Edit</th>
            <th>Delete</th>
            </tr>
            </thead>
            <tbody>
      
    <?php
        include("database.php");
        include("admin_function.php");
        post();
      ?>



            </tbody>
            </table>
        </div>
  </div>









    <script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	
</body>
</html>

<?php } ?>