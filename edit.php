<?php
$number=$_GET['number'];

include("connect.php");

$insert = "select *from cars where number='$number'";
$rslt=$con->query($insert);
$r=$rslt->fetch_assoc();


echo'
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>edit</title>
	<style type="text/css">
		.gradient-custom-3 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
/* fallback for old browsers */
background: #84fab0;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
	</style>
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url("https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp");">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Edit car details</h2>

              <form method="post" action="">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" required="" name="aid" value="'.$r['model'].'"/>
                  <label class="form-label" for="form3Example1cg">vehicle model</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3cg" class="form-control form-control-lg" required="" name="aname" value="'.$r['number'].'" disabled/>
                  <label class="form-label" for="form3Example3cg">vehicle number</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="number" id="form3Example4cg" class="form-control form-control-lg" required="" name="phone" value="'.$r['capacity'].'"/>
                  <label class="form-label" for="form3Example4cg">seat capacity</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example4cdg" class="form-control form-control-lg" required="" name="password" value="'.$r['rent'].'"/>
                  <label class="form-label" for="form3Example4cdg">rent per day</label>
                </div>

                

                <div class="d-flex justify-content-center">
                  <input type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="submit" value="Update">
                </div>

                

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>';


//$username=$_GET['username'];
//$_SESSION["username"] = $username;
if(isset($_POST['submit']))
{
  

//$username=$_GET['username'];
include("connect.php");

    $username1 = $_POST['aid'];
    $address=$_POST['aname'];
    $phone= $_POST['phone'];
    $password = $_POST['password'];
    
    //$st="available";
$insert = "update cars set model='$username1',capacity='$phone',rent='$password' where number='$number'";
$rslt=$con->query($insert);

if($rslt){
    echo '
        <script>
        alert("Updated Successfully");
        window.location = "allcars.php";
        </script>   
    ' ; 
}


}
//session_destroy();

?>