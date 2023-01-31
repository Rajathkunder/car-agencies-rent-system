<?php
$username=$_GET['username'];
//echo $username;
$number=$_GET['number'];
//echo $number;

echo'

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
      .custom-datepicker {
        width: 300px;
        font-size: 16px;
        padding: 10px;
      }
      .custom-dropdown {
        width: 300px;
        height: 35px;
        font-size: 16px;
        padding: 10px;
      }
      .custom-submit {
        width: 150px;
        height: 35px;
        font-size: 16px;
        padding: 10px;
        background-color: green;
        color: white;
        border-radius: 5px;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
  <form method="POST" action="">
    <h2>Book your car</h2>
    <div>
      <h4>Select start date:</h4>
      <input type="text" id="datepicker" class="custom-datepicker" name="date">
    </div>
    <div>
      <h4>Select number of days:</h4>
      <select id="dropdown" class="custom-dropdown" name="days">
        <option value="">Select an option</option>
        <option value="5">5days</option>
        <option value="10">10days</option>
        <option value="30">30days</option>
      </select>
    </div>
    <div>
      <input type="submit" id="submit" class="custom-submit" value="Book" name="submit">
    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( "#datepicker" ).datepicker();
    </script>
    </form>
  </body>
</html>
';


if (isset($_POST['submit'])) {
	# code...
include("connect.php");
$date=$_POST['date'];
$days=$_POST['days'];


$insert = "update cars set status='booked',booked_by='$username',start_date='$date',totaldays='$days' where number='$number'";


$rslt=$con->query($insert);
if($rslt){
echo '
        <script>
        alert("CAR BOOKED SUCCESSFULLY");
        window.location.href = "availablecarstorent.php";
        
        </script>   
    ' ; 
}
}
?>