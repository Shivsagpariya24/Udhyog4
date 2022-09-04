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
$nm= $_GET['nm'];
$des= $_GET['des'];
$qua= $_GET['qua'];
$exp= $_GET['exp'];
$f_test= $_GET['f_test'];
$req= $_GET['req'];
$remark= $_GET['remark'];
?>

<?php
   if(isset($_POST['submit'])) 
  {
    $id=$_POST['id'];
    $nm= $_POST['nm'];
    $des= $_POST['des'];
    $qua= $_POST['qua'];
    $exp= $_POST['exp'];
    $f_test= $_POST['f_test'];
    $req= $_POST['req'];
    $remark= $_POST['remark'];

    $query="UPDATE qr3 SET nm='$nm',des='$des',qua='$qua',exp='$exp',f_test='$f_test',req='$req',remark='$remark'  where id=".$ourid;
    $data = mysqli_query($con,$query);

    if($data)
    { 
    ?> 
        <script>
        alert('Record successfully Update');
         location.replace('qr3.php');
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


<!DOCTYPE html>
<html>
<head>
	<title>Udhyog4.0 LLP | List of Formats</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/Technical.css">
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

<div class="container-fluid">
            <div class="row">
                <div class="col-1 d-flex justify-content-between align-items-center" style="background-color: #ffffff;">
                    <img class="img-fluid " src="../../img/udhyog_logo.png">
                </div>
                <div class="col-11">
                    <div class="row" style="font-size: 23px;">
                        <div class="col-12 d-flex justify-content-between align-items-center"
                            style="background-color: #F5874F; padding: 5px; padding-left: 10px; height: 52px;">
                            <div class="ml-3" style="color: #ffffff;">National Cera Lab - Morvi</div>
                            <a href="../../Logout.php"><img src="../../img/l1.png" width="45px" style="float:right" class="mr-3"></a>
                        </div>
                    </div>
                    <div class="row mt-2" style="font-size: 23px;">
                        <div class="col-12 d-flex justify-content-between align-items-center"
                            style="background-color: #5DC072; padding: 5px; padding-left: 10px;">
                            <div style="color: #ffffff;">
                                <div class="d-inline-block ml-3"><a href="../../dashboard.php" style="color: #ffffff; text-decoration: none;position: relative;
                            display: inline-block;">Dashboard</a>
                            </div>
                            </div>
                            <div class="">
                                <a href="../qr-3.php"><img class="img-fluid mr-3"
                                src="../../img/QSW.png" style="width: 45px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <br>
            <br>
            <div class="form" style="margin-left: 8.5%;">
        
        <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
           <div class="col-4">
                    <label>Name</label>
                    <input type="text" name="nm" class="form-control"
                    value="<?php echo "$nm" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Designation</label>
                    <input type="text" name="des" class="form-control"
                    value="<?php echo "$des" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Qualification</label>
                    <input type="text" name="qua" class="form-control"
                    value="<?php echo "$qua" ?>"
                    >
                </div>
            </div>
        <br>
            <div class="row">
           
                <div class="col-4">
                    <label>Experience</label>
                    <input type="text" name="exp" class="form-control"
                    value="<?php echo "$exp" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Field of Testing</label>
                    <input type="text" name="f_test" class="form-control"
                    value="<?php echo "$f_test" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Training Required</label>
                    <input type="text" name="req" class="form-control"
                    value="<?php echo "$req" ?>"
                    >
                </div>
            </div>
            <br>
            <div class="row">
           <div class="col-4">
                    <label>Remark</label>
                    <input type="text" name="remark" class="form-control"
                    value="<?php echo "$remark" ?>"
                    >
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
           <footer> 
            <div class="text-center" style="font-family: Calibri;margin-top: 150px">
               <div>&#169; Copyright 2020</div>
            <div>Udhyog 4.0 LLP</div>
            </div>
        </footer>
</body>
</html>
