<?php
$id=$_GET["id"];
  require 'databasecat.php';
$obj= new database();
$result=$obj->deleteCat($id);

 if($result===true)
 {
     header('location:catdisplay.php');
 }
?>