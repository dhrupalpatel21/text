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
    
     include 'menuadmin.php';?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>"><br>


<input type="text" name="txtcatname" placeholder="Name"><br>







<input type="submit" name="submit" value="Insert">

 <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

$cat_name="";


    
    

$cat_name=$_POST["txtcatname"];

   require 'databasecat.php';
$obj= new database();
$result=$obj->addCat($cat_name);


if($result===true){
    echo "successfully";
    header("location:catdisplay.php");
}
else
{
    echo "not success";
      echo "insert into cat_tbl values('". $cat_name ."')";
}
}

?>
</form>     
    </body>
    </html>