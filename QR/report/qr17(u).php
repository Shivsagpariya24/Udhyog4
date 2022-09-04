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
   if(isset($_POST['submit'])) 
  {
         $id=$_GET['id'];
         $i_n = $_POST['i_n'];
         $dt = $_POST['dt'];
         $n_c = $_POST['n_c'];
         $a_c = $_POST['a_c'];
         $c_t = $_POST['c_t'];
         $q_s = $_POST['q_s'];
         $qua_s =$_POST['qua_s'];
         $n_t = $_POST['n_t'];
         $s_c = $_POST['s_c'];
         $des_ts = $_POST['des_ts'];
         $d=implode(",", $des_ts);
         $e_d = $_POST['e_d'];
         $d_a = $_POST['d_a'];
         $r_d = $_POST['r_d'];
         $c_r = $_POST['c_r'];
         $c_s = $_POST['c_s'];


    $query="UPDATE qr17 SET i_n='$i_n',dt='$dt',n_c='$n_c',a_c='$a_c',c_t='$c_t',q_s='$q_s',qua_s='$qua_s',n_t='$n_t',s_c='$s_c',des_ts='$d',e_d='$e_d',d_a='$d_a',r_d='$r_d',c_r='$c_r',c_s='$c_s'  where id='$id'";
    $data = mysqli_query($con,$query);

    if($data)
    { 
    ?> 
        <script>
        alert('Record successfully Update');
         location.replace('qr17.php');
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
                                <a href="../qr-17.php"><img class="img-fluid mr-3"
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

            $result="SELECT * FROM qr17 where id = '$id'";


            $query_run = mysqli_query($con, $result);
                
                  if(mysqli_num_rows($query_run) > 0)
                  {
                      while ($row = mysqli_fetch_array($query_run)) {
                        $a=$row["des_ts"];
                        $b=explode(",",$a);
                ?>
                <div class="row">
                        <div class="col-4">
                            <label>Identification Number</label>
                            <input type="text" name="i_n" class="form-control"
                            value="<?php echo $row['i_n'];echo $row['id']; ?>"
                            readonly>
                        </div> 
                        <div class="col-4">
                            <label>Date</label>
                            <input type="date" name="dt" class="form-control"
                            value="<?php echo $row['dt']; ?>"
                            >
                        </div>
                        <div class="col-4">
                            <label>Name of Customer</label>
                            <input type="text" name="n_c" class="form-control"
                            value="<?php echo $row['n_c']; ?>"
                            >
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-4">
                            <label>Address of the Customer</label>
                            <input type="text" name="a_c" class="form-control"
                            value="<?php echo $row['a_c']; ?>"
                            >
                        </div>
                        <div class="col-4">
                            <label>City</label>
                            <input type="text" name="c_t" class="form-control"
                            value="<?php echo $row['c_t']; ?>"
                            >
                        </div>
                        <div class="col-4">
                            <label>Quantity of Sample</label>
                            <select class="form-control" name="q_s" required>
                                <option value="<?php echo $row['q_s'] ?>"><?php echo $row['q_s']; ?></option>
                                    <option>Accepted</option>
                                    <option>Rejected</option>
                            </select>
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-4">
                            <label>Quality of Sample</label>
                            <select class="form-control" name="qua_s" required>
                                <option value="<?php echo $row['qua_s'] ?>"><?php echo $row['qua_s']; ?></option>
                                    <option>Accepted</option>
                                    <option>Rejected</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label>Number of Tiles</label>
                            <input type="text" name="n_t" class="form-control"
                            value="<?php echo $row['n_t']; ?>">

                        </div>
                        <div class="col-4">
                            <label>Sample Collected By</label>
                            <input type="text" name="s_c" class="form-control"
                            value="<?php echo $row['s_c']; ?>">

                        </div>
                        </div>
                <br>
                <div class="row">
                        <div class="col-4">
                            <label>Test Description</label><br>
                             <input type="checkbox" name="des_ts[ ]" value="Length"
                             <?php
                                if(in_array("Length", $b))
                                {
                                    echo "checked";
                                }
                            ?>
                             > Length
                            <input type="checkbox" name="des_ts[ ]"  value="Width"
                            <?php if(in_array("Width",$b))
                            {
                                echo "checked";
                            } ?>
                            > Width
                            <input type="checkbox" name="des_ts[ ]" value="Thickness"
                            <?php
                                if(in_array("Thickness", $b))
                                {
                                    echo "checked";
                                }
                            ?>
                            > Thickness
                            <input type="checkbox" name="des_ts[ ]" value="Straightness"
                            <?php
                                if(in_array("Straightness", $b))
                                {
                                    echo "checked";
                                }
                            ?>
                            > Straightness<br> 
                            <input type="checkbox" name="des_ts[ ]" value="Rectangularity"
                            <?php
                                if(in_array("Rectangularity", $b))
                                {
                                    echo "checked";
                                }
                            ?>
                            > Rectangularity

                        </div>
                        <div class="col-4">
                            <label>Expected Delivery Date</label>
                            <input type="date" name="e_d" class="form-control"
                            value="<?php echo $row['e_d']; ?>"
                            >
                        </div>
                        <div class="col-4">
                            <label>Delivery at</label>
                            <input type="text" name="d_a" class="form-control"
                            value="<?php echo $row['d_a']; ?>"
                            >
                        </div>
                </div>
                <br>
                <div class="row">
                        <div class="col-4">
                        <label>Requirements defined and understood </label>
                            <select class="form-control" name="r_d" required>
                                <option value="<?php echo $row['r_d'] ?>"><?php echo $row['r_d']; ?></option>
                                <option>YES</option>
                                <option>NO</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label>Capability and Resources available</label>
                            <select class="form-control" name="c_r" required>
                                <option value="<?php echo $row['c_r'] ?>"><?php echo $row['c_r']; ?></option>
                                <option>YES</option>
                                <option>NO</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label>Condition of Sample Received</label>
                            <select class="form-control" name="c_s" required>
                                <option value="<?php echo $row['c_s'] ?>"><?php echo $row['c_s']; ?></option>
                                <option>Ok</option>
                                <option>Sealed</option>
                                <option>Open</option>
                            </select>
                        </div>
                </div>
                <br>
                <div class="row text-center">
                        <div class="col-12">
                            <input type="submit" name="submit" value="Submit" class="submit">
                        </div>
                </div>
</form>
<br>

</div>
           <footer> 
            <div class="text-center" style="font-family: Calibri;margin-top: 150px">
               <div>&#169; Copyright 2020</div>
            <div>Udhyog 4.0 LLP</div>
            </div>
        </footer>
        <?php
    }
}
?>
</body>
</html>
