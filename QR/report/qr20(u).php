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
        $id=$_GET['id'];
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
        
         $query = "UPDATE qr20 SET p_c='$p_c',i_d='$i_d',r_c='$r_c',c_a='$c_a',p_d='$p_d',a_d='$a_d',d_r='$d_r',e_c='$e_c',p_a='$p_a',p_dt='$p_dt',a_dt='$a_dt',e_v='$e_v'  where id='$id'";

         $result   = mysqli_query($con, $query);
        if($result)
    { 
    ?> 
        <script>
        alert('Record successfully Update');
         location.replace('qr20.php');
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

<!-- Navbar -->
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
                            <a href="qr-20.php" class="abc ml-5">New</a>
                            <a href="modify/qr20.php" class="abc ml-5">Modify</a>
                            <a href="report/qr20.php" class="abc ml-5">Report</a>
                            </div>
                            </div>
                            <div class="">
                                <a href="../qr-20.php"><img class="img-fluid mr-3"
                                src="../../img/QSW.png" style="width: 45px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        			
<br><br>

        <div class="form" style="margin-left: 8.5%;">
        <form action="" method="post" enctype="multipart/form-data">
             <?php
            $id=$_GET['id'];

            $result="SELECT * FROM qr20 where id = '$id'";

            $query_run = mysqli_query($con, $result);
                  
                  if(mysqli_num_rows($query_run) > 0)
                  {
                      while ($row = mysqli_fetch_array($query_run)) {
    ?>

            <div class="row">
                <div class="col-4">
                    <label>Potential / Non-conformance</label><br>
                    <textarea name="p_c" class="form-control" value="<?php echo $row['p_c']; ?>" ><?php echo $row['p_c']; ?></textarea>
                </div>

                <div class="col-4">
                    <label>Immediate Disposal </label><br>
                    <textarea name="i_d" class="form-control"  value="<?php echo $row['i_d']; ?>" ><?php echo $row['i_d'];?> </textarea>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-4">
                    <label>Root Cause (s)  of  Non-conformity:</label><br>
                    <textarea name="r_c" class="form-control" value="<?php echo $row['r_c']; ?>" ><?php echo $row['r_c'];?></textarea>
                </div>
                <div class="col-4">
                    <label>Corrective Action :</label><br>
                    <textarea name="c_a" class="form-control" value="<?php echo $row['c_a']; ?>" ><?php echo $row['c_a'];?></textarea>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Proposed Completion Date:</label><br>
                    <input type="date" name="p_d" class="form-control" value="<?php echo $row['p_d']; ?>">
                </div>
                <div class="col-4">
                    <label>Actual Completion Date :</label><br>
                    <input type="date" name="a_d" class="form-control" value="<?php echo $row['a_d']; ?>">
                </div>
                <div class="col-4">
                    <label>Deptt. Rep. :</label><br>
                    <input type="text" name="d_r" class="form-control" value="<?php echo $row['d_r']; ?>">
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Effectiveness comments  </label><br>
                    <textarea name="e_c" class="form-control" value="<?php echo $row['e_c']; ?>" ><?php echo $row['e_c'];?></textarea>
                </div>
                <div class="col-4">
                    <label>Preventive Action :</label><br>
                    <textarea name="p_a" class="form-control" value="<?php echo $row['p_a']; ?>" ><?php echo $row['p_a'];?></textarea>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Proposed Date</label><br>
                    <input type="date" name="p_dt" class="form-control" value="<?php echo $row['p_dt']; ?>">
                </div>
                <div class="col-4">
                    <label>Actual Completion Date :</label><br>
                    <input type="date" name="a_dt" class="form-control" value="<?php echo $row['a_dt']; ?>">
                </div>
                <div class="col-4">
                    <label>Effectiveness Verified by Quality Manager</label><br>
                    <input type="text" name="e_v" class="form-control" value="<?php echo $row['e_v']; ?>">
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
}
?>
</body>
</html>