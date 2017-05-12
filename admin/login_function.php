<?php
         if(isset($_POST['submit'])){
         include("database.php");

      $username = $_POST["username"];
      $password = $_POST["password"];
      $query1 = "select *from login where username = '$username' and password = '$password'";
                $result1 = mysql_query($query1);
                $row1 = mysql_fetch_array($result1);
                $check = mysql_num_rows($result1);
        if($check > 0){
            	 $_SESSION['id'] = $row1["id"];
                 $_SESSION['firstname'] = $row1["firstname"];
                 $_SESSION['username'] = $row1["username"];
                 $_SESSION['password'] = $row1["password"];
        echo " <script> window.open('index.php','_self')</script>";
            }
        else{
        echo "<h4 style='margin-left:90px;color:red'>****oops!!! incorrect USERNAME or PASSWORD**** </h4>";
             // echo " <script> alert('incorrect')</script>";

 }

          
         }
          
        ?>
