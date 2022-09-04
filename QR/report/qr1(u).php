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
$r_n= $_GET['r_n'];
$dt= $_GET['dt'];
$des= $_GET['des'];
$dep= $_GET['dep'];
$doc= $_GET['doc'];
$doc_n= $_GET['doc_n'];
$det= $_GET['det'];
$roc= $_GET['roc'];
?>

<?php
   if(isset($_POST['submit'])) 
  {
    $id=$_POST['id'];
    $r_n= $_POST['r_n'];
    $dt= $_POST['dt'];
    $des= $_POST['des'];
    $dep= $_POST['dep'];
    $doc= $_POST['doc'];
    $doc_n= $_POST['doc_n'];
    $det= $_POST['det'];
    $roc= $_POST['roc'];

    $query="UPDATE qr1 SET r_n='$r_n',dt='$dt',des='$des',dep='$dep',doc='$doc',doc='$doc',doc_n='$doc_n',roc='$roc'  where id=".$ourid;
    $data = mysqli_query($con,$query);

    if($data)
    { 
    ?> 
        <script>
        alert('Record successfully Update');
         location.replace('qr1.php');
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
                                <a href="../../Formats.php"><img class="img-fluid mr-3"
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
                    <label>Requisitioner Name</label>
                    <input type="text" name="r_n" class="form-control"
                    value="<?php echo "$r_n" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Date</label>
                    <input type="date" name="dt" class="form-control"
                    value="<?php echo "$dt" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Designation</label>
                    <input type="text" name="des" class="form-control"
                    value="<?php echo "$des" ?>"
                    >
                </div>
            </div>
        <br>
            <div class="row">
           
                <div class="col-4">
                    <label>Department</label>
                    <input type="text" name="dep" class="form-control"
                    value="<?php echo "$dep" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Document Title</label>
                    <input type="text" name="doc" class="form-control"
                    value="<?php echo "$doc" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Document / Format No.</label>
                    <input type="text" name="doc_n" class="form-control"
                    value="<?php echo "$doc_n" ?>"
                    >
                </div>
            </div>
            <br>
            <div class="row">
           <div class="col-4">
                    <label>Details of change required</label>
                    <input type="text" name="det" class="form-control"
                    value="<?php echo "$det" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Reason of Change</label>
                    <input type="text" name="roc" class="form-control"
                    value="<?php echo "$roc" ?>"
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
