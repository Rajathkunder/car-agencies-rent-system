<?php



echo '

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
<section>
<nav class="navbar navbar-dark navbar-expand-sm bg-dark fixed-top">
        <div class="container">
        <a href="/" class="navbar-brand">
        <i class="fas fa-blog"></i> &nbsp;
        CAR DEKHO
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="" class="nav-link active">
                    HOME
                </a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link active">
                    LOGIN
                </a>
            </li>
            <li class="nav-item">
                <a href="registrationcustomer.php" class="nav-link active">
                    REGISTER AS CUSTOMER
                </a>
            </li>
            <li class="nav-item">
                <a href="registrationcaragency.php" class="nav-link active">
                   REGISTER AS AGENCY
                </a>
            </li>
        </ul>
        </div>



    </div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script></section><br><br>
    ';
    include("connect.php");
//$username=$_SESSION["username"];
$insert = "select *from cars where status='available'";
$rslt=$con->query($insert);
echo '<br><section>
<table>
<tr><th>VEHICLE MODEL</th><th>VEHICLE NUMBER</th><th>CAPACITY</th><th>RENT</th></tr>
';
 while ($r=$rslt->fetch_assoc()) {
//$bb=$r['B_CODE'];
  //$var=$r['number'];
echo'   
<tr><td>'.$r['model'].'</td><td>'.$r['number'].'</td><td>'.$r['capacity'].'</td><td>'.$r['rent'].'</td><td><button class="btn btn-primary" onclick=window.location.href="login.php">Rent car</button></td></tr>'


;
}



'
</section></table></body>
</html>


';
?>