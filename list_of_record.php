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
<?php
   
    // When form submitted, insert values into the database.

   
    if (isset($_REQUEST['rh'])) {
        // removes backslashes
        $rh = stripslashes($_REQUEST['rh']);
        $rh = mysqli_real_escape_string($con, $rh);
        $rec    = stripslashes($_REQUEST['rec']);
        $rec    = mysqli_real_escape_string($con, $rec);
        $fn    = stripslashes($_REQUEST['fn']);
        $fn    = mysqli_real_escape_string($con, $fn);
        $rp    = stripslashes($_REQUEST['rp']);
        $rp    = mysqli_real_escape_string($con, $rp);

        $query    = "INSERT into `lor` (rh,rec,fn,rp)
                    VALUES ('$rh','$rec','$fn','$rp')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            ?>
                <script>
                    alert ('your data will be successfully submit');
                    location.replace('list_of_record.php');
                </script>

             <?php
        }
        else {
            ?>
                <script>
                    alert ('required Field Are Missing.');
                    location.replace('list_of_record.php');
                </script>

             <?php
        }
    } else {

?>



<!DOCTYPE html>
<html>
<head>
    <title>Master List | Udhyog4.0 LLP</title>
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
                            <a href="list_of_record.php" class="abc ml-5">New</a>
                            <a href="Modify/LOR.php" class="abc ml-5">Modify</a>
                            <a href="Report/LOR.php" class="abc ml-5">Report</a>
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
                    <nav style="margin-left: 65px;">
                        <div class="nav nav-tabs nav-fill  "  role="tablist"> 
                        
                            <a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="master.php">Master List</a><br>
                            <a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="Formats.php">List of Formats</a>
                            <a class="nav-item nav-link press"style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold"  href="press3.php">Press 3</a>
                            <a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="press4.php">Press 4</a>
                            <a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="press5.php">Press 5</a>
                            <a class="nav-item nav-link press" style="background-color:#E6E7E8;text-decoration:none; color:black;font-weight: bold" href="press6.php">Press 6</a>

                        </div>
                        
                    </nav>

                    <div style="width: 100%">
                       <div class="float-left btn-group" style="width: 8.5%;background-color: white; height: 585px; ">
 
                            <div class="nav nav-tabs nav-fill "  role="tablist">
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="master.php"> Laboratory</a> 
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="list_of_document.php">List of Documents</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="list_of_standard.php">List of Standards</a>
                            <a class="nav-item nav-link press"style="text-decoration:none; color:black;font-weight: bold"  href="list_of_record.php">List of Records</a>
                            <a class="nav-item nav-link press" style="text-decoration:none; color:black;font-weight: bold" href="list_of_equipment.php">List of Equipment</a>
                            <a class="nav-item nav-link press5" style="text-decoration:none; color:black;font-weight: bold" href="list_of_cr.php">List of CRM</a>
                            <a class="nav-item nav-link press5" style="text-decoration:none; color:black;font-weight: bold" href="list_of_ia.php">List of IAs</a>
                            <a class="nav-item nav-link press5" style="text-decoration:none; color:black;font-weight: bold" href="list_of_nabld.php">List of NABLD</a>
                            <a class="nav-item nav-link press5" style="text-decoration:none; color:black;font-weight: bold" href="list_of_Personnel.php">List of Personnel</a>
                            <a class="nav-item nav-link press4" style="text-decoration:none; color:black;font-weight: bold" href="list_of_tp.php">List of TPs</a>
                        </div>
                        </div>
                        <div class="float-right" style="width: 91%; ">
                                        <br>
        <div class="form ml-3">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
           <div class="col-4">
                    <label>Records held with</label>
                    <input type="text" name="rh" class="form-control">
                </div>
                <div class="col-4">
                    <label>Records</label>
                    <input type="text" name="rec" class="form-control">
                </div>
                <div class="col-4">
                    <label>Format No</label>
                    <input type="text" name="fn" class="form-control">
                </div>
            </div>
        <br>
            <div class="row">
                <div class="col-4">
                    <label >Ratention Period</label>
                    <input type="text" name="rp" class="form-control">
                </div>                
                 
            </div>
            <br>
          
          
            <div class="row text-center">
                <div class="col-12">
                    <input type="submit" name="submit" value="Submit" class="submit">
                </div>
            </div>
                <br>
        </form>
        <br>
</div>
</div>
<?php
    }
    ?>
</body>
</html>
