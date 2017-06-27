
 <?php

$cat_id=$_POST["txtcatid"];
$cat_name=$_POST["txtcatname"];

    require 'databasecat.php';
$obj= new database();
$result=$obj->updateCat($cat_id,$cat_name);

if($result===true){
   header('location:catdisplay.php');
}
else
{
    echo "not success";
     echo $sql;
}


?>
