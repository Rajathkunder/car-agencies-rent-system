<?php
session_start();
include("connect.php");
$username=$_SESSION["username"];
$st="booked";
$insert = "select *from cars where status='$st' and agency='$username'";
$rslt=$con->query($insert);

echo '
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>all cars</title>
	<style>
ul {

  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;

}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px 22px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}


	</style>
</head>
<body>
<section style="background-color: #111; color:white;"><center><h3>ALL BOOKED CARS</h3></center></section>
<table class="table table-dark table-striped">
<tr><th>VEHICLE NUMBER</th><th>CUSTOMER NAME</th><th>START DATE</th><th>TOTAL DAYS</th></tr>
';
 while ($r=$rslt->fetch_assoc()) {
//$bb=$r['B_CODE'];
  //$var=$r['number'];
echo'	
<tr><td>'.$r['number'].'</td><td>'.$r['booked_by'].'</td><td>'.$r['start_date'].'</td><td>'.$r['totaldays'].'</td></tr>'


;
}

echo '
</table>
</body>
</html>';

?>