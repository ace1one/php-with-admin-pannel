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
	<div class="intro1" style="background-color: #eeeeee; height: auto; padding: 20px; margin: 15px 10px ; "> 
	   <h3 style="text-align: center;">Student's Voice</h3>
     <h4 style="text-align: center;">You can share your problem direct to administrator...</h4>
		

<!-- <div class="container"> -->

     <form style="margin: 15px 0px 15px 190px;" class="form-horizontal" role="form" action="problem.php" method="POST">
          <div class="form-group">
          <div class="col-sm-8">
                 <label>Name</label>
                  <input align="right" type="text" class="form-control" name="name" placeholder="name" required="required">
          </div>
          </div>

            <div class="form-group">
          <div class="col-sm-8">
                 <label>Address</label>
                  <input type="text" class="form-control" name="address" placeholder="address" required="required">
          </div>
          </div>


          <div class="form-group">
          <div class="col-sm-8">
            <label>Email</label>
            <input type="email" class="form-control" name="email"  placeholder="Email" required="required">
          </div>
          </div>

          <div class="form-group">
          <div class="col-sm-8">
             <label>Phone number</label>
             <input type="text" class="form-control" name="phone"  placeholder="Phone number" required="required">
          </div>
          </div>

           <div class="form-group">
          <div class="col-sm-8">
               <label>Problem Category</label>
                   <select class="form-control" required="required" name="category">
                   <option value="">Select Category</option>
                   <option value="School Management">About School Management</option>
                   <option value="About Teacher">About Teacher </option>
                   <option value="About liabary">About liabary</option>
                   <option value="other">Any others</option>
                   </select>
          </div>
          </div>
         

         <div class="form-group">
          <div class="col-sm-8">
           <textarea   cols="5" rows="5"  class="form-control" name="content"   placeholder="Write your problem...." required="required"></textarea>
          </div>
          </div>

          
        
        

          

     <div class="form-group">
          <div class="col-sm-12">
            <input type="submit" name="submit" class="btn btn-default" value="submit">
          </div>
     </div>
    </form>

</div>

</div>

<?php
include("php/database.php");
include("php/function.php");
problem();
?>



    <script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	
</body>
</html>