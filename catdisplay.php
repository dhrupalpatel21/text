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
   
 require 'databasecat.php';
$obj= new database();
$result=$obj->getCat();
?>


<form action="catdisplay.php" method="post">
<table class="table">
    <thead>
    <th>Category_id
    <th>Category Name
    <th>Action
    </thead>
<?php
while($row=$result->fetch_assoc())
{
echo " <tr>";
echo "<td>".$row["cat_id"]."</td>";
echo "<td>".$row["cat_name"]."</td>";

echo '<td><a href="catdelete.php?id='. $row["cat_id"] .'"><span class="glyphicon glyphicon-trash"></span></a></td>';
echo '<td><a href="catupdate.php?id='. $row["cat_id"] .'"><span class="glyphicon glyphicon-edit"></span></a></td>';
}



    ?>
</table>
<button><a href="catinsert.php">Insert</a></button>
</form>
</body>
</html>
