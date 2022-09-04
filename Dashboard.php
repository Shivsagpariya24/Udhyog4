<?php
    session_start();
    if($_SESSION['name']==true)
    {

    }
    else
    {
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashbord | Udhyog4.0 LLP</title>
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
    	<div class="row  mt-4 ml-5 mr-5 " style="padding:10px; padding-right: 50px; padding-left: 60px !important;height: 60px!important; background-color: #5DC072" >
    		<div class="col-lg-6 col-md-6 col-sm-6 col-6 col-xl-6  float-right mb-3" >
    			<content style="font-family: calibri; font-size: 1.5vw;color: white; ">National Cera Lab - Morvi</content>
    		</div>

            <div class="float-left col-lg-6 col-md-6 col-sm-6 col-6 col-xl-6 ">
                <a href="Logout.php"><img src="img/logout.png" width="45px" style="float: right;margin-top: -5px"></a>
            </div>
    	</div>
        <a href="Data_management.php" style="text-decoration: none;">
    	   <div class="row  mt-4 ml-5 mr-5" style="padding:10px; padding-top: 40px;  height: 385px!important; background-color: #F5874F">
    		  <div class="col-lg-6 col-md-6 col-sm-6 col-6" >
    		      	<div>
				    	<div class="text-left px-4 mt-2 ml-4 " style="color:#fff; font-size: 2em;">
				    		Data Management
				    	</div>
					   <hr class="mx-4">
				        <div class="text-left px-4 mb-2 ml-4" style="color:#fff;font-size: 1vw">
						  Connect, and manage the data<br> collected from systems, sensors,<br> machines and
						  people like never<br> before
					   </div>
				    </div>
    		  </div>
    		
    		  <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 " >
    		    	<img src="img/data_management.png" class="img-fluid " style="width: 293px; height: 260px; float: right;" > 
    		  </div>
    	    </div>
        </a>
    </div>
    <div class="text-center pb-2 mt-2" style="font-family: Calibri">
        <div>&#169; Copyright 2020</div>
        <div>Udhyog 4.0 LLP</div>
    </div>
</body>
</html>