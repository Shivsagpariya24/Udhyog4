<?php
session_start();
?>
<?php

$user = "root";
$password = "";
$server  = "localhost";
$db = "login";

$con = mysqli_connect($server,$user,$password,$db);
if($con)
{
  ?>
  <?php
}else{
  die("No Connectio" . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Udhyog4.0 LLP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="background-color: #E6E7E8">
    <div class="ml-4 mr-4">
    	<div class="row bg-dark mt-4 ml-5 mr-5 bg-white" style="padding:15px; padding-right: 50px; padding-left: 60px !important;" >
    		<div class="col-lg-6 col-md-6 col-sm-6 col-6  float-right   " >
    			<img src="img/udhyog_logo.png " class="img-fluid" style="width: 226.53px; height: 140px; padding-top: 5px" > 
    		</div>
    		
    		<div class="col-lg-6 col-md-6 col-sm-6 col-6 float-left">
    			<img src="img/logo_adjacent.png" class="img-fluid float-lg-right float-md-right float-sm-right float-right " style="width: 230px; height: 165px; padding-right: 5px " > 
    		</div>
    	</div>

    	<br><br><br>

    	<div class="row mt-4 ml-5 mr-5" style="padding:15px; padding-right: 50px; padding-left: 60px !important;" >

    		<div class="col-lg-6 col-md-6 col-sm-6 col-12 d-md-block d-none" ><p style="font-size: 27px;font-family: calibri;  text-align: justify">
    		 Udhyog 4.0 (U4) is a start-up initiation by professionals in 2019, and mainly provides technological solutions related to emerging technologies such as Industry 4.0. This in turn transform existing industrial setup into SMART and sustainable manufacturing setup.</p>
        </div>
    		
    		<div class="col-lg-6 col-md-6 col-sm-6  col-12">
    			<div class="mx-5 float-right d-block">
            <form method="post" class="float-right col-9" >
              <div>
                <div class="left1">
                  <div class="left1_1">
                    <img src="img/user.svg">
                  </div>

                  <div class="left1_2">
                    <input type="text" name="name" placeholder="Name" class="email" required>
                  </div>
                </div>
                <div class="left2">
                  <div class="left2_1">
                  <img class="div6" src="img/lock.svg" height="18px">
                  </div>

                  <div class="left2_2">
                  <input type="password" name="password" placeholder= "Password" required>          
                  </div>
                </div>

                <div class="left3">
                  <input type="submit" name="submit" value="Sign In">
                </div>
               <a href="forgot.php" style="text-decoration-line: none; color: black; font-size: 18px" class="float-right col-8">Forgot Password
               </a>
              </div>
            </form>
          </div>
	       </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="text-center pb-2 mt-2" style="font-family: Calibri">
                <div>&#169; Copyright 2020</div>
                <div>Udhyog 4.0 LLP</div>
    </div>
<?php

//$selectquery = "select * from user";
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $password=$_POST['password'];
  $name_searche="select * from user where name='$name' and password='$password'";
  $quary = mysqli_query($con,$name_searche);

  $cnt = mysqli_num_rows($quary);

//$quary = mysqli_query($con,$selectquery);

  if($cnt>0)
  {

    echo("suceess full");
    $_SESSION['name']=$name;
    header('location:Dashboard.php');
  }else{
    ?>
    <script>
    alert ('password inccorect');
    </script>
    <?php
  }
}
?>
</body>
</html>