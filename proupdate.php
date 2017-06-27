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
$pid="";
$pname="";
$pcolor="";
$pprice="";
$pmanufacture="";
$pwarrenty="";
$psoh="";
$pimg="";
    
 $conn=new mysqli("localhost","root","","test1");

$pid=$_GET["id"];
  $sql="select * from product_tbl where pid=".$pid;
  $result=$conn->query($sql);

$row=$result->fetch_assoc();


$pid=$row["pid"];
$pname=$row["pname"];
$pcolor=$row["pcolor"];
$pprice=$row["pprice"];
$pmanufacture=$row["pmanufacture"];
$pwarrenty=$row["pwarrenty"];
$psoh=$row["psoh"];
$pimg=$row["pimg"];
    


?>





<form method="post" action="proupdate1.php?img=<?php echo $pimg?>" enctype="multipart/form-data">
<input type="text" name="txtpid" placeholder="id" value=<?php echo $pid ?>><br>
<input type="text" name="txtpname" placeholder="name" value=<?php echo $pname ?>><br>
<input type="text" name="txtpcolor" placeholder="color" value=<?php echo $pcolor ?>><br>
<input type="text" name="txtpprice" placeholder="price" value=<?php echo $pprice ?>><br>
<input type="text" name="txtpmanufacture" placeholder="manufacture" value=<?php echo $pmanufacture ?>><br>
<input type="text" name="txtpwarrenty" placeholder="warrenty" value=<?php echo $pwarrenty ?>><br>
<input type="text" name="txtpsoh" placeholder="stock on hand" value=<?php echo $psoh ?>><br>
<img src="<?php echo $pimg?>">
<input type="file" name="img" >
<input type="submit" name="submit" value="Update">
</form>     
    </body>
    </html>