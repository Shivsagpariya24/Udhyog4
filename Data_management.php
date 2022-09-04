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
	<title>DataManagement | Udhyog4.0 LLP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/Data_management.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="background-color: #E6E7E8">
    <div class="ml-4 mr-4">
    	<div class="row bg-dark mt-4 ml-5 mr-5 bg-white" style="padding:15px;  padding-left: 60px !important;" >
    		<div class="col-lg-6 col-md-6 col-sm-6 col-6  float-right   " >
    			<img src="img/udhyog_logo.png " class="img-fluid" style="width: 226.53px; height: 140px; padding-top: 5px" > 
    		</div>
    		
    		<div class="col-lg-6 col-md-6 col-sm-6 col-6 float-left" style="height: 165px;">
    			<div class=" float-right " style="height: 100px; margin-top: 38px;">
                    <p class="p mr-5 mt-3 font-weight-bold"> Data Management System</p>

                </div>
    		</div>
    	</div>
    	<div class="row  mt-4 ml-5 mr-5 " style="padding:10px; padding-right: 50px; padding-left: 60px !important;height: 60px!important; background-color: #5DC072" >
    		<div class="col-lg-6 col-md-6 col-sm-6 col-6  float-right mb-3" >

    			<content style="font-family: calibri; font-size: 1.5vw;color: white; ">National Cera Lab - Morvi</content> 
                <a href="Dashboard.php" class="abc ml-4">Dashboard</a>
    		</div>	
             <div class="float-left col-lg-6 col-md-6 col-sm-6 col-6 col-xl-6 ">
                <a href="Logout.php"><img src="img/logout.png" width="45px" style="float: right;margin-top: -5px"></a>
                </div>
    	</div>

        <div class="row  mt-4 ml-5 mr-5 " style="paddinpx; height:385px;background-color: #F5874F; padding-left: 20px !important;" >
          
            <div class="col-sm-12 col-md-6 text-center" onmouseout="openCity(event,'Out')">
                    <div class="row my-4">
                        <div class="col-3" >
                            <a href="Mechanical.php"
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Mechanical')">
                                <div class="">
                                    <img class="img-fluid" src="img/Mechanical_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Mechanical
                                </div>
                            </a>

                        </div>
                        <div class="col-3" >
                           <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Chemical')">
                                <div class="">
                                    <img class="img-fluid" src="img/Chemical_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Chemical
                                </div>
                            </a>
                        </div>
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Biological')">
                                <div class="">
                                    <img class="img-fluid" src="img/Biological_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Biological
                                </div>
                            </a>
                        </div>
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Electrical')">
                                <div class="">
                                    <img class="img-fluid" src="img/Electrical_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Electrical
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Electronics')">
                                <div class="">
                                    <img class="img-fluid" src="img/Electronics_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Electronics
                                </div>
                            </a>
                        </div>
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Fluid Flow')">
                                <div class="">
                                    <img class="img-fluid" src="img/Fluid Flow_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Fluid Flow
                                </div>
                            </a>
                        </div>
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Forensic')">
                                <div class="">
                                    <img class="img-fluid" src="img/Forensic_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Forensic
                                </div>
                            </a>
                        </div>
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Non-Destructive')">
                                <div class="">
                                    <img class="img-fluid" src="img/Non-Destructive (NDT)_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Non-Destructive
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    <div class="row my-4">
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Photometry')">
                                <div class="">
                                    <img class="img-fluid" src="img/Photometry_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Photometry
                                </div>
                            </a>
                        </div>
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Radiological')">
                                <div class="">
                                    <img class="img-fluid" src="img/Radiological_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Radiological
                                </div>
                            </a>

                        </div>
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Diagnostic Radiology QA Testing')">
                                <div class="">
                                    <img class="img-fluid" src="img/Diagnostic Radiology QA Testing_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Diagnostic Radiology QA Testing
                                </div>
                            </a>
                        </div>
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Software & IT System')">
                                <div class="">
                                    <img class="img-fluid" src="img/Software & IT System_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Software & IT System
                                </div>
                            </a>

                        </div>
                    </div>
           
                </div>
                <div class="d-none d-md-block col-md-6">
                    <div class="row align-content-center">
                        <div class="col-12 text-center mt-4 " style="font-size: 40px; color: white; font-weight: 600; height: 60px;">
                                <div id="Mechanical" class="tabcontent">
                                    Mechanical <img src="img/Mechanical_White.png" width="60px;" align="center">
                                </div>
                                <div id="Chemical" class="tabcontent">
                                    Chemical <img src="img/Chemical_White.png" width="60px;" align="center">
                                </div>
                                <div id="Biological" class="tabcontent">
                                    Biological <img src="img/Biological_White.png" width="60px;" align="center">
                                </div>

                                <div id="Electrical" class="tabcontent">
                                    Electrical <img src="img/Electrical_White.png" width="60px;" align="center">
                                </div>
                                <div id="Electronics" class="tabcontent">
                                    Electronics <img src="img/Electronics_White.png" width="60px;" align="center">
                                </div>
                                <div id="Fluid Flow" class="tabcontent">
                                    Fluid Flow<img src="img/Fluid Flow_White.png" width="60px;" align="center">
                                </div>
                                <div id="Forensic" class="tabcontent">
                                    Forensic <img src="img/Forensic_White.png" width="60px;" align="center">
                                </div>
                                <div id="Non-Destructive" class="tabcontent">
                                    Non-Destructive <img src="img/Non-Destructive (NDT)_White.png" width="60px;" align="center">
                                </div>

                                <div id="Photometry" class="tabcontent">
                                    Photometry <img src="img/Photometry_White.png" width="60px;" align="center">

                                </div>
                                <div id="Radiological" class="tabcontent">
                                    Radiological <img src="img/Radiological_White.png" width="60px;" align="center">
                                </div>
                                <div id="Diagnostic Radiology QA Testing" class="tabcontent" style="font-size: 27px !important">
                                    Diagnostic Radiology QA Testing <img src="img/Diagnostic Radiology QA Testing_White.png" width="60px;" align="center">
                                </div>
                                <div id="Software & IT System" class="tabcontent" >
                                    Software & IT System <img src="img/Software & IT System_White.png" width="60px;" align="center">
                                </div>

                                <div id="Out" class="tabcontent">

                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-3 mb-1 text-center">
                            <img class="img-fluid"
                                src="img/data_management.png"
                                style="height: 270px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script> 
<div class="text-center pb-2 mt-2" style="font-family: Calibri">
                <div>&#169; Copyright 2020</div>
                <div>Udhyog 4.0 LLP</div>
            </div>
</body>
</html>