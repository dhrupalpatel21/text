<html>
    <head>
   <script src="../js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css" >


<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >


<script src="../js/bootstrap.min.js" ></script>

    </head>
    <body  >
    <?php

    include 'menuadmin.php';
    $conn=new mysqli("localhost","root","","test1");
    
    if($conn->connect_error)
    {
        echo "connection error";
    }
    
    $result=$conn->query("select c.*,p.* from product_tbl p,cat_tbl c where c.cat_id=p.fk_cat_id");
?>

<form action="prodisplay.php" method="post">
<table class="table">
    <thead>
    <th>Product_id
    <th>product Name
    <th>Color
    <th>Price
    <th>Manufacture
    <th>Warrenty
    <th>Stock on Hand
    <th>Image
    <th>Catagory
    <th>Action
    </thead>
<?php
while($row=$result->fetch_assoc())
{
echo " <tr>";
echo "<td>".$row["pid"]."</td>";
echo "<td>".$row["pname"]."</td>";
echo "<td>".$row["pcolor"]."</td>";
echo "<td>".$row["pprice"]."</td>";
echo "<td>".$row["pmanufacture"]."</td>";
echo "<td>".$row["pwarrenty"]."</td>";
echo "<td>".$row["psoh"]."</td>";
echo "<td><img src='".$row["pimg"]."'></td>";
echo "<td>".$row["cat_name"]."</td>";

echo '<td><a href="prodelete.php?id='. $row["pid"] .'"><span class="glyphicon glyphicon-trash"></span></a></td>';
echo '<td><a href="proupdate.php?id='. $row["pid"] .'"><span class="glyphicon glyphicon-edit"></span></a></td>';
}



    ?>
</table>
<button><a href="proinsert.php">Insert</a></button>
</form>
</body>
</html>
