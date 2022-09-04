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
include 'city.php';
$con = mysqli_connect("localhost","root","","login") or die("connection faild");

   if(isset($_POST['submit'])) 
  {
    $id=$_GET['id'];
    $nm=$_POST['nm'];
    $types= $_POST['types'];
    $addd= $_POST['addd'];
    $cons= $_POST['cons'];
    $st=$_POST['st'];
    $ct=$_POST['ct'];
    $pin= $_POST['pin'];
    $web= $_POST['web'];
    $em= $_POST['em'];
    $ln=$_POST['ln'];
    $fx= $_POST['fx'];
    $cell= $_POST['cell'];
    $sez= $_POST['sez'];
    $gst=$_POST['gst'];
    $pan=$_POST['pan'];
    $li= $_POST['li'];
    $file = $_FILES['file']['name'];
    $file_type=$_FILES['file']['tmp_name'];
    move_uploaded_file($file_type,"../upload/Doc/".$file);
    $fac= $_POST['fac'];
    $lor= $_POST['lor'];
    $se= $_POST['se'];
    $sf= $_POST['sf'];
    $oa= $_POST['oa'];
    $cl=$_POST['cl'];
    $sd= $_POST['sd'];

    $query="UPDATE lol SET nm='$nm',types='$types',addd='$addd',cons='$cons',st='$st',ct='$ct',pin='$pin',web='$web',
    em='$em',ln='$ln',fx='$fx',cell='$cell',sez='$sez',gst='$gst',pan='$pan',li='$li',file='$file',
    fac='$fac',lor='$lor',se='$se',sf='$sf',oa='$oa',cl='$cl',sd='$sd' where id='$id'";
    $data = mysqli_query($con,$query);

    if($data)
    { 
    ?> 
        <script>
        alert('Record successfully Update');
         location.replace('LOL.php');
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
                                <a href="../Report/LOL.php"><img class="img-fluid mr-3"
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
           <?php
           $id=$_GET['id'];

            $result="SELECT * FROM lol where id = '$id'";

            $query_run = mysqli_query($con, $result);
                  
                  if(mysqli_num_rows($query_run) > 0)
                  {
                      while ($row = mysqli_fetch_array($query_run)) {
    ?>

        <div class="row">
                <div class="col-4">
                    <label>Name of Laboratory</label>
                    <input type="text" name="nm" class="form-control"
                    value="<?php echo $row['nm']; ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Type of Laboratory</label>
                    <input type="text" name="types" class="form-control"
                    value="<?php echo $row['types']; ?>"
                    >
                </div>
                <div class="col-4">
                    <label>Address</label>
                    <input type="text" name="addd" class="form-control"
                    value="<?php echo $row['addd']; ?>"
                    >
                </div>
            </div>
        <br>
            <div class="row">
                <div class="col-4">
                    <label>Country</label>
                    <select name="cons" class="countries form-control" id="countryId">
                        <option value="<?php echo $row['cons'] ?>"><?php echo $row['cons']; ?></option>
                    </select>
                </div>  
                <div class="col-4">
                    <label>State</label>
                    <select name="st" class="states form-control" id="stateId">
                        <option value="<?php echo $row['st'] ?>"><?php echo $row['st']; ?></option>
                    </select>
                </div>                
                 <div class="col-4">
                    <label>City</label>
                    <select name="ct" class="cities form-control" id="cityId">
                        <option value="<?php echo $row['ct'] ?>"><?php echo $row['ct']; ?></option>
                    </select>
                </div>  
            </div>
            <br>
             <div class="row">
                <div class="col-4">
                    
                    <label>Pin Code</label>
                    <input type="text" name="pin" class="form-control"
                    value="<?php echo $row['pin']; ?>"
                    >
                </div>  
                <div class="col-4">
                    <label>Web Page</label>
                    <input type="text" name="web" class="form-control"
                    value="<?php echo $row['web']; ?>"
                    >
                </div>                
                 <div class="col-4">
                    <label>Email</label>
                    <input type="Email" name="em" class="form-control" required
                    value="<?php echo $row['em']; ?>"
                    >
                </div>  
            </div>
            <br>
             <div class="row">
                <div class="col-4">
                    
                    <label>Contact Details - LandLine</label>
                    <input type="text" name="ln" class="form-control"
                    value="<?php echo $row['ln']; ?>"
                    >
                </div>  
                <div class="col-4">
                    <label>Contact Details - Cell</label>
                    <input type="text" name="cell" class="form-control" required
                    value="<?php echo $row['cell']; ?>"
                    >
                </div>                
                 <div class="col-4">
                    <label>Fax</label>
                    <input type="text" name="fx" class="form-control"
                    value="<?php echo $row['fx'];?>"
                    >
                </div>  
            </div>

            <br>
            <div class="row">
                <div class="col-4">
                    
                    <label>Part of SEZ</label>
                    <select class="form-control" name="sez">
                        <option value="<?php echo $row['sez'] ?>"><?php echo $row['sez']; ?></option>  
                        <option>yes</option>
                        <option>No</option>
                    </select>
                </div>  
                <div class="col-4">
                    <label>GSTIN</label>
                    <input type="text" name="gst" class="form-control"
                    value="<?php echo $row['em']; ?>"
                    >
                </div>                
                 <div class="col-4">
                    <label>PAN/TAN</label>
                    <input type="text" name="pan" class="form-control"
                    value="<?php echo $row['pan'];?>"
                    >
                </div>  
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Legal Identity</label>
                    <input type="text" name="li" class="form-control"
                    value="<?php echo $row['li']; ?>"
                    >
                </div>  
                <div class="col-4">
                    <label>Upload Legal Identity</label>
                    <input type="file" name="file" class="form-control" onChange=" validatePDF(this)" id="browse" required>
                </div>                
                 <div class="col-4">
                    <label>Type of Facility</label>
                    <input type="text" name="fac" class="form-control"
                    value="<?php echo $row['fac']; ?>"
                    >
                </div>  
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Name of the Parent Organization (if any)</label>
                    <input type="text" name="lor" class="form-control"
                    value="<?php echo $row['lor']; ?>"
                    >
                </div> 
                <div class="col-4">
                    <label>Type of Service</label>
                    <select type="text" name="se" class="form-control">
                    <option value="<?php echo $row['se'] ?>"><?php echo $row['se']; ?></option>  
                        <option>Open to Others</option>
                        <option>Partly Open to Others</option>
                        <option>An in-house Activity</option>
                    </select>
                </div>
                 <div class="col-4">
                    <label>Site Facility</label>
                    <input type="text" name="sf" class="form-control"
                    value="<?php echo $row['sf']; ?>"
                    >
                </div>   
                
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Other Accreditation</label>
                    <input type="text" name="oa" class="form-control"
                    value="<?php echo $row['oa']; ?>"
                    >
                </div> 
                <div class="col-4">
                    <label>Organization Chart of Laboratory</label>
                    <input type="text" name="cl" class="form-control"
                    value="<?php echo $row['cl']; ?>"
                    >
                </div> 
                <div class="col-4">
                    <label>System Document File</label>
                    <input type="text" name="sd" class="form-control"
                    value="<?php echo $row['sd']; ?>"
                    >
                </div>   
            </div>
            <br>
            
            <br>
            <div class="row text-center">
                <div class="col-12">
                    <input type="submit" name="submit" value="Submit" class="submit">
                </div>
            </div>
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
        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>


</body>
</html>
