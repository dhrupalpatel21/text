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


<body>

<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $conn=new mysqli("localhost","root","","test1");
   if($conn->connect_error)
    {
        echo "connection error";
    } 
    $email=$_POST["txtemail"];
    $password=$_POST["txtpassword"];
    require 'databaseuser.php';
$obj= new database();
$result=$obj->getLoginUser($email,$password);
if($result->num_rows==1){
  echo "Successful";
  $_SESSION["email"]=$email;
  $_SESSION["password"]=$password;
  header('location:prodisplay.php');
}
else{
  echo '<div class="alert alert-danger" role="alert"><h3><center>Enter Valid Details</center></h3>';
  echo '</br>';
  echo '</div>';
}
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
  </div>
</nav>



<div class="jumbotron">
 <center> <h1>Admin Log In</h1></center>
  
  <br>
<div class="col-md-5">

</div>



 <div class="input-group input-group-lg">

  <input type="email" name="txtemail" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" required \>
<br>
    <br>
    <br>
  <input type="password" name="txtpassword" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" required \>

  <br>
  
</div>

<br>

<div class="btn-group">
  <button type="submit" class="btn-lg btn-primary">
    Log In
  </button>

</div>

<div class="col-md-5">

</div>
</div>



<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
  </div>
</nav>
</div>    
</form>
</body>
</html>