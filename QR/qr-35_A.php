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
<?php
$con = mysqli_connect("localhost","root","","login") or die("connection faild");
    if (isset($_POST['submit'])) {

         $dt = $_POST['dt'];
         $tm = $_POST['tm'];
         $hum = $_POST['hum'];
         $tem = $_POST['tem'];
         $a_p = $_POST['a_p'];
         $remark = $_POST['remark'];

         $query = "INSERT INTO `qr35_a`(`dt`, `tm`, `hum`, `tem`, `a_p`, `remark`) VALUES ('$dt','$tm','$hum','$tem','$a_p','$remark')";
         $result   = mysqli_query($con, $query);
         if ($result) {
             ?>
                 <script>
                     alert ('your data will be successfully submit');
                     location.replace('qr-35_A.php');
                 </script>

              <?php
         }
         else {
             ?>
                 <script>
                     alert ('required Field Are Missing.');
                     location.replace('qr-35_A.php');
                 </script>

              <?php
         }
     } else {




?>

<!DOCTYPE html>
<html>
<head>
    <title>Formats List | Udhyog4.0 LLP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/Technical.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
a.nav-item.nav-link.press:visited {
    border-bottom: 10px solid black !important;
    color:black;
}
a.nav-item.nav-link.press:visited {
    border-bottom: 10px solid black !important;
}


</style>
</head>
<body style="background-color: #E6E7E8;">

<!-- Navbar -->
    <div class="container-fluid">
            <div class="row">
                <div class="col-1 d-flex justify-content-between align-items-center" style="background-color: #ffffff;">
                    <img class="img-fluid " src="../img/udhyog_logo.png">
                </div>
                <div class="col-11">
                    <div class="row" style="font-size: 23px;">
                        <div class="col-12 d-flex justify-content-between align-items-center"
                            style="background-color: #F5874F; padding: 5px; padding-left: 10px; height: 52px;">
                            <div class="ml-3" style="color: #ffffff;">National Cera Lab - Morvi</div>
                            

                            <a href="../Logout.php"><img src="../img/l1.png" width="45px" style="float:right" class="mr-3"></a>
                        </div>
                    </div>
                    <div class="row mt-2" style="font-size: 23px;">
                        <div class="col-12 d-flex justify-content-between align-items-center"
                            style="background-color: #5DC072; padding: 5px; padding-left: 10px;">
                            <div style="color: #ffffff;">
                                <div class="d-inline-block ml-3"><a href="../dashboard.php" style="color: #ffffff; text-decoration: none;position: relative;
                            display: inline-block;">Dashboard</a>
                            <a href="qr-35_A.php" class="abc ml-5">New</a>
                            <a href="modify/qr35_A.php" class="abc ml-5">Modify</a>
                            <a href="report/qr35a.php" class="abc ml-5">Report</a>
                            </div>
                            </div>
                            <div class="">
                                <a href="../Mechanical.php"><img class="img-fluid mr-3"
                                src="../img/SW.png" style="width: 45px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <nav style="margin-left: 65px;">
                        <div class="nav nav-tabs nav-fill"  role="tablist"> 
                            <a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="../sales_marketing.php">List of Formats</a>
                        </div>
                    </nav>

        <div style="width: 100%">
        <div class="btn-group" style="width: 8.5%;background-color: white; height: 585px; ">
             <div class="nav nav-tabs nav-fill "  role="tablist">
             
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="../sales_marketing.php">QR_17</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="qr-22.php">QR_22</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="qr-29.php">QR_29</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="qr-35_A.php">QR_35-A</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="QR/">QR_35-B</a>
                            
                </div>
                </div>
                <div class="float-right" style="width: 91%; ">
                            <br>
                <div class="form ml-3">
                        <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                        <div class="col-4">
	                        <label>Date</label>
	                        <input type="date" name="dt" class="form-control">
                        </div>
                        <div class="col-4">
	                        <label>Time</label>
	                        <input type="time" name="tm" class="form-control">
                        </div>
                        <div class="col-4">
	                        <label>Humidity(RH)</label>
	                        <input type="text" name="hum" class="form-control">
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-4">
	                        <label>Temperature (0C)</label>
	                        <input type="text" name="tem" class="form-control">
                        </div>
                        <div class="col-4">
	                        <label>Action Planned</label>
	                        <input type="text" name="a_p" class="form-control">
                        </div>
                        <div class="col-4">
	                        <label>Remarks</label>
	                        <input type="text" name="remark" class="form-control">
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-4">
	                        <label>Signature</label>
	                        <input type="text" name="" class="form-control">
                        </div>
                </div>
                <br>
                <div class="row text-center">
                        <div class="col-12">
                        	<input type="submit" name="submit" value="Submit" class="submit">
                        </div>
                </div>
                </form>
                </div>
</div>
<?php
}
?>
</body>
</html>
