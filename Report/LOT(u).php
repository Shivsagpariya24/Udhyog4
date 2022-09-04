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
$title= $_GET['title'];
$d_no= $_GET['d_no'];
$r_no= $_GET['r_no'];
$i_no= $_GET['i_no'];
$i_date= $_GET['i_date'];
$re_no= $_GET['re_no'];
$p_no= $_GET['p_no'];
$np= $_GET['np'];
?>
<?php
   if(isset($_POST['submit'])) 
  {
    $id=$_POST['id'];
    $TITLE=$_POST['TITLE'];
    $d_no= $_POST['d_no'];
    $r_no= $_POST['r_no'];
    $i_no= $_POST['i_no'];
    $i_date= $_POST['i_date'];
    $re_no= $_POST['re_no'];
    $p_no= $_POST['p_no'];
    $np= $_POST['np'];
    $query="UPDATE lot SET title='$title',d_no='$d_no',r_no='$r_no',i_no='$i_no',i_date='$i_date',re_no='$re_no',p_no='$p_no',np='$np'  where id=".$ourid;
    $data = mysqli_query($con,$query);

    if($data)
    { 
    ?> 
        <script>
        alert('Record successfully Update');
         location.replace('LOT.php');
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
                                <a href="../Report/LOT.php"><img class="img-fluid mr-3"
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
                    <label>Title</label>
                    <input type="text" name="title" class="form-control"
                    value="<?php echo "$title" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Doc No</label>
                    <input type="text" name="d_no" class="form-control"
                    value="<?php echo "$d_no" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Ref.IS.No </label>
                    <input type="text" name="r_no" class="form-control"
                    value="<?php echo "$r_no" ?>"
                    >
                </div>
            </div>
        <br>
            <div class="row">
                <div class="col-4">
                    <label >Issue No</label>
                    <input type="text" name="i_no" class="form-control"
                    value="<?php echo "$i_no" ?>"
                    >
                </div>                
                 <div class="col-4">
                    <label >Issue Date</label>
                    <input type="text" name="i_date" class="form-control"
                    value="<?php echo "$i_date" ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Revision No</label>
                    <input type="text" name="re_no" class="form-control"
                    value="<?php echo "$re_no" ?>"
                    >
                </div> 
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Procedure No.</label>
                    <input type="text" name="p_no" class="form-control"
                    value="<?php echo "$p_no" ?>"
                    >
                </div>  
                <div class="col-4">
                    <label>No.of Pages</label>
                    <input type="text" name="np" class="form-control"
                    value="<?php echo "$np" ?>"
                    >
                </div>                
                  <div class="col-4">
                    <label>Upload</label>
                    <input type="file" name="upl" class="form-control" onChange=" validatePDF(this)">
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
