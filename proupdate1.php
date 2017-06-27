
 <?php

$pid=$_POST["txtpid"];
$pname=$_POST["txtpname"];
$pcolor=$_POST["txtpcolor"];
$pprice=$_POST["txtpprice"];
$pmanufacture=$_POST["txtpmanufacture"];
$pwarrenty=$_POST["txtpwarrenty"];
$psoh=$_POST["txtpsoh"];
$pimg=basename($_FILES["img"]["name"]);
$old=$_GET["img"];
if($pimg=="")
{
    $pimg=$old;
}
else
{
  unlink($old);
  $target_dir="images/";
$target_file=$target_dir . basename($_FILES["img"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["img"]["tmp_name"],$target_file))
{
  echo "success";
  $pimg=$target_file;
}
}

    


    
  require 'databaseclass.php';
   $obj=new databaseclass();
   $result=$obj->updateProducts($pname,$pcolor,$pprice,$pmanufacture,$pwarrenty,$psoh,$pimg,$pid);
    

    

if($result===true){
  
   header('location:prodisplay.php');
}
else
{
    echo "not success";
     echo $sql;
}


?>
