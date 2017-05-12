<?php
function civil(){
$que="select *from register where user_select='Civil Engineering' order by 1 DESC";
$run=mysql_query($que);
$total = mysql_num_rows($run);

      if($total > 1){
      echo "<span style='color:red'><h3>" .$total. "&nbsp Students</h3></span>";
    }else{
      echo "<span style='color:red'><h3>" .$total. "&nbsp Student</h3></span>";
    }
while($row=mysql_fetch_array($run)){

       $id=$row[0];
       $name=$row[1];
       $address=$row[2];
       $email=$row[3];
       $phone=$row[4];
       $gender=$row[5];
       $subject=$row[6];

?>
   <tr>
   <td><?php echo $id; ?></td>
   <td><?php echo $name; ?></td>
   <td><?php echo $address; ?></td>
   <td><?php echo $email; ?></td>
   <td><?php echo $phone; ?></td>
   <td><?php echo $gender; ?></td>
   <td><?php echo $subject; ?></td>
   <td><a href="delete_civil.php?del=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
   </tr>
   <?php }} ?>




<?php
function computer(){
$que="select *from register  where user_select='Computer Engineering'  order by 1 DESC";
$run=mysql_query($que);
$total=mysql_num_rows($run);
if($total>1){
  echo "<span style='color:red'><h3>" .$total. "&nbsp Students</h3></span>";
}
else{
  echo "<span style='color:red'><h3>" .$total. "&nbsp Student</h3></span>";
}
while($row=mysql_fetch_array($run)){

       $id=$row[0];
       $name=$row[1];
       $address=$row[2];
       $email=$row[3];
       $phone=$row[4];
       $gender=$row[5];
       $subject=$row[6];

?>
   <tr>
   <td><?php echo $id; ?></td>
   <td><?php echo $name; ?></td>
   <td><?php echo $address; ?></td>
   <td><?php echo $email; ?></td>
   <td><?php echo $phone; ?></td>
   <td><?php echo $gender; ?></td>
   <td><?php echo $subject; ?></td>
   <td><a href="delete_computer.php?del=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
   </tr>
   <?php }} ?>




   <?php
function bca(){
$que="select *from register where user_select='BCA' order by 1 DESC";
$run=mysql_query($que);
$total = mysql_num_rows($run);

      if($total > 1){
      echo "<span style='color:red'><h3>" .$total. "&nbsp Students</h3></span>";
    }else{
      echo "<span style='color:red'><h3>" .$total. "&nbsp Student</h3></span>";
    }
while($row=mysql_fetch_array($run)){

       $id=$row[0];
       $name=$row[1];
       $address=$row[2];
       $email=$row[3];
       $phone=$row[4];
       $gender=$row[5];
       $subject=$row[6];

?>
   <tr>
   <td><?php echo $id; ?></td>
   <td><?php echo $name; ?></td>
   <td><?php echo $address; ?></td>
   <td><?php echo $email; ?></td>
   <td><?php echo $phone; ?></td>
   <td><?php echo $gender; ?></td>
   <td><?php echo $subject; ?></td>
   <td><a href="delete_bca.php?del=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
   </tr>
   <?php }} ?>



<?php
function post(){
$que="select *from content  order by 1 DESC";
$run=mysql_query($que);
$total=mysql_num_rows($run);
if($total>1){
  echo "<span style='color:red'><h3>" .$total. "&nbsp Posts</h3></span>";
}
else{
  echo "<span style='color:red'><h3>" .$total. "&nbsp Post</h3></span>";
}
while($row=mysql_fetch_array($run)){

       $id=$row[0];
       $img=$row[1];
       $title=$row[2];
       $content=$row[3];
?>
   <tr>
   <td><?php echo $id; ?></td>
   <td><img src="../images/upload/<?php echo $img; ?>" width="100" height="100"> </td>
   <td><?php echo $title; ?></td>
   <td><?php echo $content; ?></td>
    <td><a href="#" class="btn btn-success">Edit</a></td>
   <td><a href="delete_post.php?del= <?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
   </tr>
   <?php }} ?>




   <?php
function problem(){
$que="select *from problem  order by 1 DESC";
$run=mysql_query($que);
$total=mysql_num_rows($run);
if($total>1){
  echo "<span style='color:red'><h3>" .$total. "&nbsp Problems</h3></span>";
}
else{
  echo "<span style='color:red'><h3>" .$total. "&nbsp Problem</h3></span>";
}
while($row=mysql_fetch_array($run)){

       $id=$row[0];
       $name=$row[1];
       $address=$row[2];
       $email=$row[3];
       $phone=$row[4];
       $category=$row[5];
       $problem=$row[6];

?>
   <tr>
   <td><?php echo $id; ?></td>
   <td><?php echo $name; ?></td>
   <td><?php echo $address; ?></td>
   <td><?php echo $email; ?></td>
   <td><?php echo $phone; ?></td>
   <td><?php echo $category; ?></td>
   <td><?php echo $problem; ?></td>
   <td><a href="delete_problem.php?del=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
   </tr>
   <?php }} ?>

<?php
function change(){
$que="select *from edit1  order by 1 DESC";
$run=mysql_query($que);
$total=mysql_num_rows($run);
if($total>1){
  echo "<span style='color:red'><h3>" .$total. "&nbsp Posts</h3></span>";
}
else{
  echo "<span style='color:red'><h3>" .$total. "&nbsp Post</h3></span>";
}
while($row=mysql_fetch_array($run)){

       $id=$row[0];
       $img=$row[1];
       $name=$row[2];
       $post=$row[3];
       $contact=$row[4];
       $address=$row[5];
?>
   <tr>
   <td><?php echo $id; ?></td>
   <td><img src="../images/upload/<?php echo $img; ?>" width="100" height="100"> </td>
   <td><?php echo $name; ?></td>
   <td><?php echo $post; ?></td>
   <td><?php echo $contact; ?></td>
   <td><?php echo $address; ?></td>
    <td><a href="edit.php?edt=<?php echo $id; ?>" class="btn btn-success">Edit</a></td>
   <td><a href="delete_post.php?del= <?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
   </tr>
   <?php }} ?>










   
