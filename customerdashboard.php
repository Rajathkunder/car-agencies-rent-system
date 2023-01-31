
<?php
 session_start(); 
//$user=$_SESSION["username"];

$username=$_GET['username'];
 $_SESSION["username"] = $username;
echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <title>agency dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Car agency</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="availablecarstorent.php">Available cars to rent</a></li>
      
    </ul>
  </div>
</nav>
  
<div class="container" style="margin-top:50px">
  
</div>


</body>
</html>';


?>