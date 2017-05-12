<?php
 session_start();
 if(!isset($_SESSION['id'])){
  header("location: index.php");
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
  <li><a href="bca.php">BCA</a></li>
  <li><a href="view_problem.php">Student voice</a></li>
  <li><a href="view_post.php">View Post</a></li>
  <li><a href="view_change.php">View Team</a></li>
  <li style="float: right;">
    <a href="logout.php"> <?php echo $_SESSION['firstname'] .'&nbsp(logout)'; ?></a>
  </li>
 </ul>
</div>



<div class="container">
  <div class="online_form">
    <h3>HUB IT WORKGROUP</h3>
<h4>Update New Content...</h4>
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="view_post.php">View Posts</a></li>
  <li class="active">Add New Post</li>
</ol>

  </div>
</div>



<div class="container">

      <form class="form-horizontal" role="form" action="post_function.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
          <div class="col-sm-12">
      <input type="text" class="form-control" name="title" placeholder="Title" required="required">
          </div>
          </div>


       <div class="form-group">
          <div class="col-sm-12">
          <input type="file" class="form-control" name="img"  placeholder="Image" required="required">
          </div>
          </div>

          <div class="form-group">
          <div class="col-sm-12">
           <textarea rows="10" class="form-control" name="content"   placeholder="About us.." required="required"></textarea>
          </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
             <input type="submit" name="submit"  value="click" class="btn btn-default">
            </div>
          </div>
          </form>
</div>


<?php
include("database.php");
include("post_function.php");

?>

    <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  
</body>
</html>
<?php } ?>