<?php
session_start();
?>
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

    require 'databaseuser.php';
    $obj=new database();
    $result=$obj->getUser();

?>

<form action="userdisplay.php" method="post">
<table class="table">
    <thead>
    <th>Email
    <th>Name
    <th>Password
    <th>Mobile
    <th>Address
    <th>Image
    <th>Action
    </thead>
<?php
while($row=$result->fetch_assoc())
{
echo " <tr>";
echo "<td>".$row["email"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["password"]."</td>";
echo "<td>".$row["mobile"]."</td>";
echo "<td>".$row["address"]."</td>";
echo "<td>".$row["image"]."</td>";
echo '<td><a href="userdelete.php?id='. $row["email"] .'"><span class="glyphicon glyphicon-trash"></span></a></td>';
echo '<td><a href="userupdate.php?id='. $row["email"] .'"><span class="glyphicon glyphicon-edit"></span></a></td>';
}
    ?>
</table>
</form>
</body>
</html>
