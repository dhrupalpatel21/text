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
    
     include 'menuadmin.php';
    ?>
   
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]  ?>" enctype="multipart/form-data"><br>

<input type="text" name="txtpname" placeholder="name"><br>
<input type="text" name="txtpcolor" placeholder="color"><br>
<input type="text" name="txtpprice" placeholder="price"><br>
<input type="text" name="txtpmanufacture" placeholder="manufacture"><br>
<input type="text" name="txtpwarrenty" placeholder="warrenty"><br>
<input type="text" name="txtpsoh" placeholder="stock on hand"><br>
<input type="file" name="img"   ><br>
<select name="fk_cat_id">
<?php


$conn=new mysqli("localhost","root","","test1");
$sql="select * from cat_tbl";
$result=$conn->query($sql);
while($row=$result->fetch_assoc())
{

echo '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
}


?>

</select>
<input type="submit" name="submit" value="Insert">
</form>
 <?php
if(isset($_POST["submit"])){

$target_dir="images/";
$target_file=$target_dir . basename($_FILES["img"]["name"]);
echo $target_file;


$pid="";
$pname="";
$pcolor="";
$pprice="";
$pmanufacture="";
$pwarrenty="";
$psoh="";
$pimg="";

 
$pname=$_POST["txtpname"];
$pcolor=$_POST["txtpcolor"];
$pprice=$_POST["txtpprice"];
$pmanufacture=$_POST["txtpmanufacture"];
$pwarrenty=$_POST["txtpwarrenty"];
$psoh=$_POST["txtpsoh"];
$pimg=$target_file;
$fk_cat_id=$_POST["fk_cat_id"];

if(move_uploaded_file($_FILES["img"]["name"],$target_file))
{

  echo 'success';
} 
require 'databaseclass.php';
   $obj=new databaseclass();
   $result=$obj->addProducts($pname,$pcolor,$pprice,$pmanufacture,$pwarrenty,$psoh,$pimg,$fk_cat_id);

if($result===true)
{
    echo "successfully";
    header("location:prodisplay.php");
}
else
{
    echo "not success";
    echo "insert into product_tbl values('". $pname ."','". $pcolor ."','". $pprice ."','". $pmanufacture ."','". $pwarrenty ."','". $psoh ."','". $pimg ."')";
}
}

?>
     
    </body>
    </html>