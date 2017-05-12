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
  <li><a href="#">Home</a></li>
  <li><a href="#">News And Event</a></li>
  <li><a href="#">About Us</a></li>
  <li><a href="#">Contact</a></li>
  <li><a href="problem.php">Your Problem</a></li>
  <li style="float: right;"><a href="form.php">Online Form</a></li>
 </ul>
</div>

<div class="container">
	<div class="intro"> 
	  
		<div class="image">

     <?php 
    include("php/database.php");
  $query="select *from content order by 1 DESC LIMIT 0,1";
  $result=mysql_query($query);
  while($row = mysql_fetch_array($result)){
    $id=$row[0];
    $img=$row[1];
    $title=$row[2];
    $content=substr($row[3],0,1000);
    ?>


    <img src="images/upload/<?php echo $img; ?>" alt="school" width="330" height="250" >
	<h3><?php echo $title; ?></h3>
      <p> <?php echo $content; ?></p>
      <p align="right"><a href="show.php?id=<?php echo $id; ?>" >Read More >></a></p>
   <?php } ?>

       </div>
		</div>

</div>




<div class="container">

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
<?php 
 include("php/database.php");
 $querry="select *from edit1 where post='Principle' ";
 $runn=mysql_query($querry);
 while($row=mysql_fetch_array($runn)){
  $img=$row[1];
  $name=$row[2];
  $post=$row[3];
  $phone=$row[4];
  $address=$row[5];
?>

      <img src="images/change/<?php echo $img; ?>" alt="principle">
      <div class="caption">
        <h3><?php echo $name; ?></h3> <h4><?php echo $post; ?></h4>
        <p><?php echo $phone; ?></p>
        <p><?php echo $address; ?></p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
  </div>
</div>

<?php } ?>


  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <?php 
 include("php/database.php");
 $querry="select *from edit1 where post='Vice-Principle' ";
 $runn=mysql_query($querry);
 while($row=mysql_fetch_array($runn)){
  $img=$row[1];
  $name=$row[2];
  $post=$row[3];
  $phone=$row[4];
  $address=$row[5];
?>

  <img src="images/change/<?php echo $img; ?>" alt="vice-principle" width="255" height="900" >
      <div class="caption">
        <h3><?php echo $name; ?></h3> <h4><?php echo $post; ?></h4>
        <p><?php echo $phone; ?></p>
        <p><?php echo $address; ?></p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
  </div>
</div>

<?php } ?>


  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <?php 
 include("php/database.php");
 $querry="select *from edit1 where post='Administrator' ";
 $runn=mysql_query($querry);
 while($row=mysql_fetch_array($runn)){
  $img=$row[1];
  $name=$row[2];
  $post=$row[3];
  $phone=$row[4];
  $address=$row[5];
?>

      <img src="images/change/<?php echo $img; ?>" alt="Administrator">
      <div class="caption">
        <h3><?php echo $name; ?></h3> <h4><?php echo $post; ?></h4>
        <p><?php echo $phone; ?></p>
        <p><?php echo $address; ?></p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
  </div>
</div>

<?php } ?>
</div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	
</body>
</html>