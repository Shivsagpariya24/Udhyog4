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
	<title>Mechanical | Udhyog4.0 LLP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/Mechanical.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>

</style>
</head>
<body style="background-color: #E6E7E8">
    <div class="ml-4 mr-4">
    	<div class="row bg-dark mt-4 ml-5 mr-5 bg-white" style="padding:15px;  padding-left: 60px !important;" >
    		<div class="col-lg-6 col-md-6 col-sm-6 col-6  float-right" >
    			<img src="img/udhyog_logo.png " class="img-fluid" style="width: 226.53px; height: 140px; padding-top: 5px" > 
    		</div>
    		<div class="col-lg-6 col-md-6 col-sm-6 col-6 float-left" style="height: 165px;">
    			<div class=" float-right " style="height: 100px; margin-top: 38px;">
                    <p class="p mr-5 mt-3 font-weight-bold"> Mechanical
                    </p>
                </div>
    		</div>
    	</div>
    	<div class="row  mt-4 ml-5 mr-5 " style="padding:10px; padding-right: 50px; padding-left: 60px !important;height: 60px!important; background-color: #5DC072" >
    		<div class="col-lg-6 col-md-6 col-sm-6 col-6  float-right mb-3" style="width: 70%">
                <content style="font-family: calibri; font-size: 1.5vw;color: white; "> National Cera Lab - Morvi</content>
                <a href="Dashboard.php" class="abc ml-4">Dashboard</a>
                <a href="Data_management.php" class="abc ml-4">Data Management</a>
    		</div>	
            <div class="float-left col-lg-6 col-md-6 col-sm-6 col-6 col-xl-6 ">
                <a href="Logout.php"><img src="img/logout.png" width="45px" style="float: right;margin-top: -5px"></a>
            </div>
    	</div>
        <div class="row  mt-4 ml-5 mr-5 " style="paddinpx; height:385px;background-color: #F5874F; padding-left: 20px !important;" >
            <div class="col-sm-12 col-md-6 text-center" onmouseout="openCity(event,'Out')">
                    <div class="row my-2">
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Testing Building Material')">
                                <div class="">
                                    <img class="img-fluid" src="img/BMG1.png" style="width: 60px;">
                                </div>
                                <div>
                                    Testing-Building Material
                                </div>
                            </a>

                        </div>
                        <div class="col-3" >
                           <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Testing-Mechanical Properties of Metals')">
                                <div class="">
                                    <img class="img-fluid" src="img/MPMG.png" style="width: 60px;">
                                </div>
                                <div>
                                    Testing-Mechanical Properties of Metals 
                                </div>
                            </a>
                        </div>
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Testing-Metallography Test')">
                                <div class="">
                                    <img class="img-fluid" src="img/Metallography test_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Testing-Metallography Test
                                </div>
                            </a>
                        </div>
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Testing-Soil and Rock')">
                                <div class="">
                                    <img class="img-fluid" src="img/Soil & Rock_Green1.png" style="width: 60px;">
                                </div>
                                <div>
                                    Testing-Soil and Rock
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Testing-NDT')">
                                <div class="">
                                    <img class="img-fluid" src="img/Non-Destructive (NDT)_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Testing-<br>NDT
                                </div>
                            </a>
                        </div>
                        <div class="col-3" >
                            <a href="file/ISO_IEC_17025_2017(E).pdf"
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Standard-Quality')">
                                <div class="">
                                    <img class="img-fluid" src="img/Standards-quality_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Standard-<br>Quality
                                </div>
                            </a>
                        </div>
                        <div class="col-3" >
                            <a href="Technical.php"
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Standard-Techanical')">
                                <div class="">
                                    <img class="img-fluid" src="img/Standards-testing_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Standard-Techanical
                                </div>
                            </a>
                        </div>
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Quality Manual')">
                                <div class="">
                                    <img class="img-fluid" src="img/Quality Manual_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Quality <br> Manual
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    <div class="row my-1">
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Quality Manual Procedure')">
                                <div class="">
                                    <img class="img-fluid" src="img/Quality Procedure_Green.png" style="width: 60px;">
                                </div>
                                <div>
                                    Quality Manual Procedure 
                                </div>
                            </a>
                        </div>
                        <div class="col-3" >
                            <a href="master.php"
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Quality section')">
                                <div class="">
                                    <img class="img-fluid" src="img/10.png" style="width: 60px;">
                                </div>
                                <div>
                                    Quality <br>Section
                                </div>
                            </a>

                        </div>
                        
                        <div class="col-3" >
                            <a href="sales_marketing.php"
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Sales & Marketing')">
                                <div class="">
                                    <img class="img-fluid" src="img/12.png" style="width: 60px;">
                                </div>
                                <div>
                                    Sales & <br>Marketing
                                </div>
                            </a>

                        </div>
                        <div class="col-3" >
                            <a href=""
                                style="width:100%;height:100%;display:block; text-decoration: none; color: #064A30;"
                               class="tablinks" onmouseover="openCity(event, 'Purchase & store')">
                                <div class="">
                                    <img class="img-fluid" src="img/11.png" style="width: 60px;">
                                </div>
                                <div>
                                    Purchase & <br>store
                                </div>
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6">
                    <div class="row align-content-center">
                        <div class="col-12 text-center mt-4 " style="font-size: 40px; color: white; font-weight: 600; height: 60px;">
                                <div id="Testing Building Material" class="tabcontent" style="font-size: 27px">
                                    Testing-Building Material<img src="img/BMW1.png" width="60px;" align="center">
                                </div>
                                <div id="Testing-Mechanical Properties of Metals" class="tabcontent" style="font-size: 27px">
                                    Testing-Mechanical Properties of Metals&nbsp;&nbsp;<img src="img/MPM.png" width="50px;" align="center">
                                </div>
                                <div id="Testing-Metallography Test" class="tabcontent" style="font-size: 27px">
                                    Testing-Metallography Test<img src="img/Metallography test_White.png" width="60px;" align="center">
                                </div>

                                <div id="Testing-Soil and Rock" class="tabcontent" style="font-size: 27px">
                                     Testing-Soil and Rock <img src="img/Soil & Rock_White1.png" width="60px;" align="center">
                                </div>
                                <div id="Testing-NDT" class="tabcontent" style="font-size: 27px">
                                     Testing-NDT <img src="img/Non-Destructive (NDT)_White.png" width="60px;" align="center">
                                </div>
                                <div id="Standard-Quality" class="tabcontent" style="font-size: 27px">
                                    Standard-Quality<img src="img/Standards-quality_White.png" width="60px;" align="center">
                                </div>
                                <div id="Standard-Techanical" class="tabcontent" style="font-size: 27px">
                                    Standard-Techanical<img src="img/Standards-testing_White.png" width="60px;" align="center">
                                </div>
                                <div id="Quality Manual" class="tabcontent" style="font-size: 27px">
                                    Quality Manual<img src="img/Quality Manual_White.png" width="60px;" align="center">
                                </div>
                                <div id="Quality Manual Procedure" class="tabcontent" style="font-size: 27px">
                                    Quality Manual Procedure<img src="img/Quality Procedure_White.png" width="60px;" align="center">
                                </div>

                                <div id="Quality section" class="tabcontent" style="font-size: 27px">
                                    Quality Section <img src="img/QSW.png" width="60px;" align="center">

                                </div>
                                <div id="Radiological" class="tabcontent" style="font-size: 27px">
                                    Radiological <img src="img/10.png" width="60px;" align="center">
                                </div>
                                <div id="Purchase & store" class="tabcontent" style="font-size: 27px !important">
                                    Purchase & store <img src="img/PW.png" width="60px;" align="center">
                                </div>
                                <div id="Sales & Marketing" class="tabcontent"style="font-size: 27px" >
                                    Sales & Marketing <img src="img/SW.png" width="60px;" align="center">
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