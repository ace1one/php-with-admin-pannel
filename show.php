<!DOCTYPE html>
<html>
<head>
    <title>college</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
	
	</head>
<body>

<div class="nav">
 <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="#">News And Event</a></li>
  <li><a href="#">About Us</a></li>
  <li><a href="#">Contact</a></li>
  <li style="float: right;"><a href="form.php">Online Form</a></li>
 </ul>
</div>

<div class="container">
	<div class="intro"> 
	  
		<div class="image">

     <?php 
    include("/php/database.php");
    $id= $_GET['id'];
  $query="select *from content where id=$id";
  $result=mysql_query($query);
  while($row = mysql_fetch_array($result)){
    $img=$row[1];
    $title=$row[2];
    $content=$row[3];
    ?>


    <img src="images/upload/<?php echo $img; ?>" alt="school" width="330" height="250" >
	<h3><?php echo $title; ?></h3>
      <p> <?php echo $content; ?></p>
      
   <?php } ?>

       </div>
		</div>

</div>

    <script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	
</body>
</html>