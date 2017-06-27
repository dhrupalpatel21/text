<?php
$id=$_GET["id"];
 require 'databaseclass.php';
   $obj=new databaseclass();
   $result=$obj->deleteProduct($id);
 if($result===true)
 {
     header('location:prodisplay.php');
 }
?>