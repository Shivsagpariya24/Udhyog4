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
   
    if (isset($_REQUEST['c_a'])) {
        // removes backslashes
        $c_a = stripslashes($_REQUEST['c_a']);
        $c_a = mysqli_real_escape_string($con, $c_a);
        $mon    = stripslashes($_REQUEST['mon']);
        $mon    = mysqli_real_escape_string($con, $mon);

        $query    = "INSERT into `qr24` (c_a,mon)
                    VALUES ('$c_a','$mon')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            ?>
                <script>
                    alert ('your data will be successfully submit');
                    location.replace('qr-24.php');
                </script>

             <?php
        }
        else {
            ?>
                <script>
                    alert ('required Field Are Missing.');
                    location.replace('qr-24.php');
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
                            <a href="qr-25.php" class="abc ml-5">New</a>
                            <a href="" class="abc ml-5">Modify</a>
                            <a href="" class="abc ml-5">Report</a>
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
                    <nav style="margin-left: 65px;">
                        <div class="nav nav-tabs nav-fill  "  role="tablist"> 
                        
                            <a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="../master.php">Master List</a><br>
                            <a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="../Formats.php">List of Formats</a>
                            <a class="nav-item nav-link press"style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold"  href="press3.php">Press 3</a>
                            <a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="press4.php">Press 4</a>
                            <a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="press5.php">Press 5</a>
                            <a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="press6.php">Press 6</a>
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
                <div class="float-right" style="width: 91%; ">
                            <br>
                <div class="form ml-3">
                <form action="" method="post" enctype="multipart/form-data">
                
                </form>
                </div>
</div>
<?php
}
?>
</body>
</html>
