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
?>

<?php
     if (isset($_POST['submit'])) {

         $p_c = $_POST['p_c'];
         $i_d = $_POST['i_d'];
         $r_c = $_POST['r_c'];
         $c_a = $_POST['c_a'];
         $p_d = $_POST['p_d'];
         $a_d = $_POST['a_d'];
         $d_r = $_POST['d_r'];
         $e_c = $_POST['e_c'];
         $p_a = $_POST['p_a'];
         $p_dt = $_POST['p_dt'];
         $a_dt = $_POST['a_dt'];
         $e_v = $_POST['e_v'];
        
         $query = "INSERT INTO `qr20`(`p_c`, `i_d`, `r_c`, `c_a`, `p_d`, `a_d`, `d_r`, `e_c`, `p_a`, `p_dt`, `a_dt`, `e_v`) VALUES ('$p_c','$i_d','$r_c','$c_a','$p_d','$a_d','$d_r','$e_c','$p_a','$p_dt','$a_dt','$e_v')";

         $result   = mysqli_query($con, $query);
         if ($result) {
             ?>
                 <script>
                     alert ('your data will be successfully submit');
                     location.replace('qr-20.php');
                 </script>

              <?php
         }
         else {
             ?>
                 <script>
                     alert ('required Field Are Missing.');
                     location.replace('qr-20.php');
                 </script>

              <?php
         }
     } else {


?>
<!DOCTYPE html>
<html>
<head>
	<title>Udhyog4.0 LLP | List of Formats</title>
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
                            <a href="qr-20.php" class="abc ml-5">New</a>
                            <a href="modify/qr20.php" class="abc ml-5">Modify</a>
                            <a href="report/qr20.php" class="abc ml-5">Report</a>
                            </div>
                            </div>
                            <div class="">
                                <a href="../Mechanical.php"><img class="img-fluid mr-3"
                                src="../img/QSW.png" style="width: 45px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        			<nav  style="margin-left: 65px;">
						<div class="nav nav-tabs nav-fill "  role="tablist"> 
						
							<a class="nav-item nav-link press"style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="../master.php">Master List</a>
							<a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="../Formats.php">List of Formats</a>
							<a class="nav-item nav-link press"style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold"  href="press3.php">Press 3</a>
							<a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="press4.php">Press 4</a>
							<a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="press5.php">Press 5</a>
							<a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="pres6.php">Press 6</a>
						</div>
					</nav>

                    <div style="width: 100%">
                    <div class="float-left btn-group" style="width: 8.5%;background-color: white; height: 585px; ">
                        <div class="nav nav-tabs nav-fill "  role="tablist">
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="../Formats.php">QR_01</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="qr-2.php">QR_02</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="qr-3.php">QR_03</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="qr-4.php">QR_04</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="qr-5.php">QR_05</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="qr-20.php">QR_20</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="qr-24.php">QR_24</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="qr-25.php">QR_25</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="qr-26.php">QR_26</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="qr-27.php">QR_27</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="qr-28.php">QR_28</a>
                            
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="">QR_00</a>
                        </div>
                    </div>


        <div class="float-right" style="width: 91%;">
           <br>
        <div class="form ml-3">
        <form action="" method="post" enctype="multipart/form-data" style="overflow-y: scroll; height: 575px; overflow-x: hidden;">
            <div class="row">
                <div class="col-4">
                    <label>Potential / Non-conformance</label><br>
                    <textarea name="p_c" class="form-control"></textarea>
                </div>
                <div class="col-4">
                    <label>Immediate Disposal </label><br>
                    <textarea name="i_d" class="form-control"></textarea>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-4">
                    <label>Root Cause (s)  of  Non-conformity:</label><br>
                    <textarea name="r_c" class="form-control"></textarea>
                </div>
                <div class="col-4">
                    <label>Corrective Action :</label><br>
                    <textarea name="c_a" class="form-control"></textarea>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Proposed Completion Date:</label><br>
                    <input type="date" name="p_d" class="form-control">
                </div>
                <div class="col-4">
                    <label>Actual Completion Date :</label><br>
                    <input type="date" name="a_d" class="form-control">
                </div>
                <div class="col-4">
                    <label>Deptt. Rep. :</label><br>
                    <input type="text" name="d_r" class="form-control">
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Effectiveness comments  </label><br>
                    <textarea name="e_c" class="form-control"></textarea>
                </div>
                <div class="col-4">
                    <label>Preventive Action :</label><br>
                    <textarea name="p_a" class="form-control"></textarea>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Proposed Date</label><br>
                    <input type="date" name="p_dt" class="form-control">
                </div>
                <div class="col-4">
                    <label>Actual Completion Date :</label><br>
                    <input type="date" name="a_dt" class="form-control">
                </div>
                <div class="col-4">
                    <label>Effectiveness Verified by Quality Manager</label><br>
                    <input type="text" name="e_v" class="form-control">
                </div>
            </div>
            <br>
            <br>
          <div class="row text-center">
                <div class="col-12">
                    <input type="submit" name="submit" value="Submit" class="submit">
                </div>
            </div>
            
        </form>
        <br>
</div>
    </div>
</div>
<?php
}
?>
</body>
</html>