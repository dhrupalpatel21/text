<!DOCTYPE html>
<html>
    <head>
   <script src="../js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js" ></script>

    </head>
    <body  >
<?php

$cat_name="";

    $conn=new mysqli("localhost","root","","test1");
 

$cat_id=$_GET["id"];
  $sql="select * from cat_tbl where cat_id=".$cat_id;
  $result=$conn->query($sql);

$row=$result->fetch_assoc();


$cat_id=$row["cat_id"];
$cat_name=$row["cat_name"];
  


?>





<form method="post" action="catupdate1.php">
<input type="text" name="txtcatid" placeholder="id" value=<?php echo $cat_id?>><br>
<input type="text" name="txtcatname" placeholder="name" value=<?php echo $cat_name ?>><br>
<input type="submit" name="submit" value="Update">
</form>     
    </body>
    </html>