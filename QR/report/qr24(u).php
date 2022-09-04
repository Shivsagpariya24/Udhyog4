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
   if(isset($_POST['submit'])) 
  {
    $id=$_GET['id'];
    $c_a = $_POST['c_a'];
    $mon = $_POST['mon'];

    $query="UPDATE qr24 SET c_a='$c_a',mon='$mon'  where id='$id'";
    $data = mysqli_query($con,$query);

    if($data)
    { 
    ?> 
        <script>
        alert('Record successfully Update');
         location.replace('qr24.php');
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
<script language="JavaScript">
            var formOK = false;
            function validatePDF(objFileControl)
            {
            var file = objFileControl.value;
            var len = file.length;
            var ext = file.slice(len - 4, len);
            if(ext.toUpperCase() == "qr_24.PDF")
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
                                <a href="../qr-24.php"><img class="img-fluid mr-3"
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
            <?php
            $id=$_GET['id'];

            $result="SELECT * FROM qr24 where id = '$id'";

            $query_run = mysqli_query($con, $result);
                  
                  if(mysqli_num_rows($query_run) > 0)
                  {
                      while ($row = mysqli_fetch_array($query_run)) {
    ?>

     <div class="row">
                <div class="col-4">
                <label>Clauses Audited</label>
                <select name="c_a" class="form-control">
                <option value="<?php echo $row['c_a'] ?>"><?php echo $row['c_a']; ?></option>
                <option>4.1</option>
                <option>4.2</option>
                <option>5.1</option>
                <option>5.2</option>
                <option>5.3</option>
                <option>5.4</option>
                <option>5.5</option>
                <option>5.6</option>
                <option>5.7</option>
                <option>6.1</option>
                <option>6.2</option>
                <option>6.3</option>
                <option>6.4</option>
                <option>6.5</option>
                <option>6.6</option>
                <option>7.1</option>
                <option>7.2</option>
                <option>7.3</option>
                <option>7.4</option>
                <option>7.5</option>
                <option>7.6</option>
                <option>7.7</option>
                <option>7.8</option>
                <option>7.9</option>
                <option>7.10</option>
                <option>7.11</option>
                <option>8.1</option>
                <option>8.2</option>
                <option>8.3</option>
                <option>8.4</option>
                <option>8.5</option>
                <option>8.6</option>
                <option>8.7</option>
                <option>8.8</option>
                <option>8.9</option>
                </select>
                </div>
                <div class="col-4">
                <label>Month</label>
                <select name="mon" class="form-control">
                <option value="<?php echo $row['mon'] ?>"><?php echo $row['mon']; ?></option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
                </select>
                </div>
                </div>
            <br>
            
          <div class="row text-center">
                <div class="col-12">
                    <input type="submit" name="submit" value="Submit" class="submit">
                </div>
            </div>
                <br>
                <?php
            }
        }
            ?>
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
