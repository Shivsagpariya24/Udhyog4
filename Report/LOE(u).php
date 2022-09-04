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
error_reporting(0);
$ourid= $_GET['id'];
$ne= $_GET['ne'];
$rc= $_GET['rc'];
$make= $_GET['make'];
$iden= $_GET['iden'];
$remark= $_GET['remark'];
$ud= $_GET['ud'];
$md= $_GET['md'];
$sn= $_GET['sn'];
$ym= $_GET['ym'];
$cd= $_GET['cd'];
$cdo= $_GET['cdo'];
$cb= $_GET['cb'];
$en= $_GET['en'];
?>
<?php
   if(isset($_POST['submit'])) 
  {
    $id=$_POST['id'];
    $ne=$_POST['ne'];
    $rc= $_POST['rc'];
    $make= $_POST['make'];
    $iden= $_POST['iden'];
    $remark= $_POST['remark'];
    $ud=$_POST['ud'];
    $md=$_POST['md'];
    $sn= $_POST['sn'];
    $ym= $_POST['ym'];
    $cd= $_POST['cd'];
    $cdo= $_POST['cdo'];
    $cb=$_POST['cb'];
    $en=$_POST['en'];
    $query="UPDATE loe SET ne='$ne',rc='$rc',make='$make',iden='$iden',remark='$remark',ud='$ud',md='$md',sn='$sn',ym='$ym',cd='$cd',cdo='$cdo',cb='$cb',en='$en'  where id=".$ourid;
    $data = mysqli_query($con,$query);

    if($data)
    { 
    ?> 
        <script>
        alert('Record successfully Update');
         location.replace('LOE.php');
        </script>
        <?php
    }
    else
    {

        ?>
        <script>
        alert('Error');
        </script>
        <?php
    }
  }
   ?> 
<html>
 
<head>
	  <meta charset="utf-8">
      <title>Update | Udhyog4.0 LLP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script language="JavaScript">
            var formOK = false;
            function validatePDF(objFileControl)
            {
            var file = objFileControl.value;
            var len = file.length;
            var ext = file.slice(len - 4, len);
            if(ext.toUpperCase() == ".PDF")
            {
                formOK = true;
            }
            else
            {
                formOK = false;
                alert("Only PDF files allowed.");
            }
            }   
    </script>
    <style>
	 body{
        font-family: Calibri;
    }
    .form {
        margin-top:-1%;
        margin-left: 3%;
        margin-right: 1%;
    }
    label {
        font-size: 18px;
        font-weight: bold;
    }
          .submit{
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 10%;
    }
    </style>
</head>
<body style="background-color: #E6E7E8">
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
                                <div class="d-inline-block ml-3"><a href="dashboard.php" style="color: #ffffff; text-decoration: none;position: relative;
                            display: inline-block;">Dashboard</a>
                            </div>
                            </div>
                            <div class="">
                                <a href="../Report/LOE.php"><img class="img-fluid mr-3"
                                src="../img/QSW.png" style="width: 45px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <br>
            <div class="form" style="margin-left: 8.5%;">
      <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
           <div class="col-4">
                    <label>Name of Equipment</label>
                    <input type="text" name="ne" class="form-control"
                    value="<?php echo "$ne" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Range/Capacity</label>
                    <input type="text" name="rc" class="form-control"
                    value="<?php echo "$rc" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Make/Model/Sr.No </label>
                    <input type="text" name="make" class="form-control"
                    value="<?php echo "$make" ?>"
                    >
                </div>
            </div>
        <br>
            <div class="row">
                <div class="col-4">
                    <label >Indentification Number</label>
                    <input type="text" name="iden" class="form-control"
                    value="<?php echo "$iden" ?>"
                    >
                </div>                
                 <div class="col-4">
                    <label >Remarks</label>
                    <input type="text" name="remark" class="form-control"
                    value="<?php echo "$remark" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>UID</label>
                    <input type="text" name="ud" class="form-control"
                    value="<?php echo "$ud" ?>"
                    >
                </div> 
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Model</label>
                    <input type="text" name="md" class="form-control"
                    value="<?php echo "$md" ?>"
                    >
                </div>  
                <div class="col-4">
                    <label>Serial No</label>
                    <input type="text" name="sn" class="form-control"
                    value="<?php echo "$sn" ?>"
                    >
                </div>                
                 <div class="col-4">
                    <label>Year of Make</label>
                    <input type="text" name="ym" class="form-control"
                    value="<?php echo "$ym" ?>"
                    >
                </div>  
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Calibration Date</label>
                    <input type="Date" name="cd" class="form-control"
                    value="<?php echo "$cd" ?>"
                    >
                </div>  
                <div class="col-4">
                    <label>Calibration Due on</label>
                    <input type="text" name="cdo" class="form-control"
                    value="<?php echo "$cdo" ?>"
                    >
                </div>                
                 <div class="col-4">
                    <label>CalibratedBy</label>
                    <select type="text" name="cb" class="form-control">
                        <option
                        <?php
                        if($cb == 'Internal')
                        {
                            echo "selected";
                        }
                        ?>
                        >Internal</option>
                        <option
                        <?php
                        if($cb == 'External')
                        {
                            echo "selected";
                        }
                        ?>
                        >External</option>
                        </select>
                </div>  
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>External/Laboratory Name</label>
                    <input type="text" name="en" class="form-control"
                    value="<?php echo "$en" ?>"
                    >
                </div>  
                
            </div>
          
            <div class="row text-center">
                <div class="col-12">
                    <input type="submit" name="submit" value="Submit" class="submit">
                </div>
            </div>
                <br>
        </form>
        <br>
</div>
           <footer> 
            <div class="text-center" style="font-family: Calibri;margin-top: 150px">
               <div>&#169; Copyright 2020</div>
            <div>Udhyog 4.0 LLP</div>
            </div>
        </footer>
</body>
</html>
