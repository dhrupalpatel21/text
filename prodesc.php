<?php
session_start();
?>
<html>
    <head>
   <script src="../js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css" >


<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >


<script src="../js/bootstrap.min.js" ></script>


    </head>
    <body  >
    <?php
  include 'menu.php';
    $conn=new mysqli("localhost","root","","test1");
    
    if($conn->connect_error)
    {
        echo "connection error";
    }
    $email=$_SESSION["Username"];
    $result=$conn->query("select * from product_tbl where pid='".$pid."'");
?>

<form action="proupdate.php" method="post">

    
<?php
while($row=$result->fetch_assoc())
{

echo "<img src='".$row["pimage"]."'>"; 
echo "<br>";
echo "<br>";

echo "<h3><b>Email-Id:-</b>".$row["email"];
echo "<br>";
echo "<br>";
echo "<b>Name:-</b>".$row["name"];
echo "<br>";
echo "<br>";
echo "<b>Mobile No:-</b>".$row["mobile"];
echo "<br>";
echo "<br>";
echo "<b>Address:-</b>".$row["address"];
echo "<br>";
echo "</h3> ";


}



    ?>
</table>
<h2><button class="btn btn-info"><a href="userupdate.php">Edit</a></button><h2>
</form>
</body>
</html>
