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
	<title>Udhyog4.0 LLP | Press4</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/Technical.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
a.nav-item.nav-link.press:visited {
    border-bottom: 10px solid black !important;
}
a.nav-item.nav-link.press1:visited {
    border-bottom: 10px solid black !important;
}
a.nav-item.nav-link.press2:visited {
    border-bottom: 10px solid black !important;
}
a.nav-item.nav-link.press3:visited {
    border-bottom: 10px solid black !important;
}
a.nav-item.nav-link.press4:visited {
    border-bottom: 10px solid black !important;
}
a.nav-item.nav-link.press5:visited {
    border-bottom: 10px solid black !important;
}

</style>
</head>
<body style="background-color: #E6E7E8;">

<!-- Navbar -->
	<div class="container-fluid">
            <div class="row">
                <div class="col-1 d-flex justify-content-between align-items-center" style="background-color: #ffffff;">
                    <img class="img-fluid " src="img/udhyog_logo.png">
                </div>
                <div class="col-11">
                    <div class="row" style="font-size: 23px;">
                        <div class="col-12 d-flex justify-content-between align-items-center"
                            style="background-color: #F5874F; padding: 5px; padding-left: 10px; height: 52px;">
                            <div class="ml-3" style="color: #ffffff;">National Cera Lab - Morvi</div>
                            <a href="Logout.php"><img src="img/l1.png" width="45px" style="float:right" class="mr-3"></a>
                        </div>
                    </div>
                    <div class="row mt-2" style="font-size: 23px;">
                        <div class="col-12 d-flex justify-content-between align-items-center"
                            style="background-color: #5DC072; padding: 5px; padding-left: 10px;">
                            <div style="color: #ffffff;">
                                <div class="d-inline-block ml-3"><a href="dashboard.php" style="color: #ffffff; text-decoration: none;position: relative;
                            display: inline-block;">Dashboard</a>
                            <a href=".php" class="abc ml-5">New</a>
                            <a href=".php" class="abc ml-5">Modify</a>
                            <a href=".php" class="abc ml-5">Report</a>
                            </div>
                            </div>
                            <div class="">
                                <a href="Mechanical.php"><img class="img-fluid mr-3"
                                src="img/QSW.png" style="width: 45px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        			<nav >
						<div class="nav nav-tabs nav-fill "  role="tablist"> 
						
							<a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="master.php">Master List</a>
							<a class="nav-item nav-link press1" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="Formats.php">List of Formats</a>
							<a class="nav-item nav-link press2"style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold"  href="press3.php">Press 3</a>
							<a class="nav-item nav-link press3" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold">Press 4</a>
							<a class="nav-item nav-link press4" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="press5.php">Press 5</a>
							<a class="nav-item nav-link press5" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="press6.php">Press 6</a>
						</div>
					</nav>
						<br>
						<br>

<div class="form" style="margin-left: 8.5%;">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
           <div class="col-4">
                    <label>Section</label>
                    <select  name="Section" class="form-control" required>
                                                <option>Select</option>
                                                <option>Testing</option>
                                                <option>Calibration</option>
                    </select>
                </div>
                <div class="col-4">
                    <label>Group</label>
                    <select  name="Groupp" class="form-control" required>
                                                <option>Select</option>>
                                                <option>Mechanical </option>
                                                <option>Chemical</option>
                                                <option>Biological</option>
                                                <option>Electrical</option>
                                                <option>Electronics</option>
                                                <option>Fluid Flow</option>
                                                <option>Forensic</option>
                                                <option>Non-Destructive</option>
                                                <option>Photometry</option>
                                                <option>Radiological</option>
                                                <option>Diagnostic Radiology QA Testing</option>
                                                <option>Software & IT System</option>
                    </select>
                </div>
                <div class="col-4">
                    <label>Sub_Group</label>
                    <select class="form-control" name="Sub_group" required>
                        <option selected>Select</option>
                        <option value="Building Material">Building Material</option>
                                                <option>Mechanical Properties of Metals</option>
                                                <option>Metallography Test</option>
                                                <option>Soil and Rock</option>
                                                <option>Testing-NDT</option>
                                                <option>Standard-Quality</option>
                                                <option>Standard-Techanical</option>
                                                <option>Quality Manual</option>
                                                <option>Quality Manual Procedure</option>
                                                <option>Quality Section</option>
                                                <option>Sales & Marketing</option>
                                                <option>Purchase & store</option>
                    </select>
                </div>
            </div>
        <br>
            <div class="row">
            <div class="col-4">
                    <label >Product</label>
                    <select  class="form-control" name="Product" required>
                        <option selected>Select</option>
                                                <option>Ceramic Tiles</option>
                                            </select>
                </div>                
                <div class="col-4">
                    <label>Test</label>
                    <select  name="Test" class="form-control" required>
                        <option selected>Select</option>
                                                <option>Breaking Strength</option>
                                                <option>Flatness - Centre Curvature</option>
                                                <option>Flatness-Edge Curvature</option>
                                                <option>Length</option>
                                                <option>Modulus of Rupture(MoR)</option>
                                                <option>Rectangularity</option>
                                                <option>Straightness</option>
                                                <option>Thickness</option>
                                                <option>Water Absorption</option>
                    </select>
                </div>
                <div class="col-4">
                    <label style="margin-left: 05px">Standard</label>
                    <br>
                        &nbsp;<input type="radio"  name="Test_method" id="method" value="IS" required> IS&nbsp;
                        <input type="radio"  name="Test_method" id="method1" value="ISO"> ISO&nbsp;
                        <input type="radio" name="Test_method" id="method3" value="AISI"> AISI&nbsp;
                        <input type="radio" name="Test_method" id="method2" value="ASTM"> ASTM&nbsp;
                        <input type="radio" name="Test_method" id="method4" value="OTHER"> OTHER&nbsp;
                </div>  
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Test_method</label><br>
                    <input type="text" name="Test_method2" style="width: 440px; height: 37px" id="textnumber1" disabled="disabled">
                    <script type="text/JavaScript">
                        $(function(){
                        $("input[name='Test_method']").click(function(){
                        if(($("#method").is(":checked")) || ($("#method1").is(":checked"))
                        || ($("#method2").is(":checked")) || ($("#method3").is(":checked")) || ($("#method4").is(":checked")) ){
                        $("#textnumber1").removeAttr("disabled");    
                        $("#textnumber1").focus();
                        }
                        else{
                        $("#textnumber1").attr("disabled","disabled");
                        }
                        });
                        });
                        </script>
                </div>
                <div class="col-4">
                    <label>Year of Publish</label>
                    <select  class="form-control" name="Year_of_publish" required>
                        <option selected>Select</option>
                            <?php
                            for ($i=1950; $i<=2021; $i++)
                            {
                             ?>
                             <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php
                              }
                            ?>
                    </select>
                </div> 
            </div>
            <br>       <br>
            <div class="row text-center">
                <div class="col-12">
                    <input type="file" id="browse" name="file" style="display: none;" onChange=" validatePDF(this) "  required>
                    
                    <input type="button" value="BROWSE" onclick="HandleBrowseClick();"/ required class="submit">
                    <input type="submit" name="submit" value="Submit" class="submit">
                </div>
            </div>
                <br>
        </form>
        <br>
</div>
</body>
</html>