
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


    if (isset($_REQUEST['nm'])) {
        // removes backslashes
        $nm = stripslashes($_REQUEST['nm']);
        $nm = mysqli_real_escape_string($con, $nm);
        $types    = stripslashes($_REQUEST['types']);
        $types    = mysqli_real_escape_string($con, $types);
        $addd    = stripslashes($_REQUEST['addd']);
        $addd    = mysqli_real_escape_string($con, $addd);
        $cons    = stripslashes($_REQUEST['cons']);
        $cons    = mysqli_real_escape_string($con, $cons);
        $st    = stripslashes($_REQUEST['st']);
        $st    = mysqli_real_escape_string($con, $st);
        $ct    = stripslashes($_REQUEST['ct']);
        $ct    = mysqli_real_escape_string($con, $ct);
        $pin    = stripslashes($_REQUEST['pin']);
        $pin    = mysqli_real_escape_string($con, $pin);
        $web    = stripslashes($_REQUEST['web']);
        $web    = mysqli_real_escape_string($con, $web);
        $em    = stripslashes($_REQUEST['em']);
        $em    = mysqli_real_escape_string($con, $em);
        $ln    = stripslashes($_REQUEST['ln']);
        $ln    = mysqli_real_escape_string($con, $ln);
        $cell    = stripslashes($_REQUEST['cell']);
        $cell    = mysqli_real_escape_string($con, $cell);
        $fx    = stripslashes($_REQUEST['fx']);
        $fx    = mysqli_real_escape_string($con, $fx);
        $sez    = stripslashes($_REQUEST['sez']);
        $sez    = mysqli_real_escape_string($con, $sez);
        $gst    = stripslashes($_REQUEST['gst']);
        $gst    = mysqli_real_escape_string($con, $gst);
        $pan    = stripslashes($_REQUEST['pan']);
        $pan    = mysqli_real_escape_string($con, $pan);
        $li    = stripslashes($_REQUEST['li']);
        $li    = mysqli_real_escape_string($con, $li);
        $file = $_FILES['file']['name'];
        $file_type=$_FILES['file']['tmp_name'];
        move_uploaded_file($file_type,"upload/Doc/".$file);
        $fac    = stripslashes($_REQUEST['fac']);
        $fac    = mysqli_real_escape_string($con, $fac);
        $lor    = stripslashes($_REQUEST['lor']);
        $lor    = mysqli_real_escape_string($con, $lor);
        $se    = stripslashes($_REQUEST['se']);
        $se    = mysqli_real_escape_string($con, $se);
        $sf    = stripslashes($_REQUEST['sf']);
        $sf    = mysqli_real_escape_string($con, $sf);
        $oa    = stripslashes($_REQUEST['oa']);
        $oa    = mysqli_real_escape_string($con, $oa);
        $cl    = stripslashes($_REQUEST['cl']);
        $cl    = mysqli_real_escape_string($con, $cl);
        $sd    = stripslashes($_REQUEST['sd']);
        $sd    = mysqli_real_escape_string($con, $sd);
        

        $query    = "INSERT into `lol` (nm,types,addd,cons,st,ct,pin,web,em,ln,cell,fx,sez,gst,pan,li,file,fac,lor,se,sf,oa,cl,sd)
                    VALUES ('$nm','$types','$addd','$cons','$st','$ct','$pin','$web','$em','$ln','$cell','$fx','$sez','$gst','$pan','$li','$file','$fac','$lor','$se','$sf','$oa','$cl','$sd')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            ?>
                <script>
                    alert ('your data will be successfully submit');
                    location.replace('master.php');
                </script>

             <?php
        }
        else {
            ?>
                <script>
                    alert ('required Field Are Missing.');
                    location.replace('master.php');
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
                            <a  href="master.php" class="abc ml-5">New</a>
                            <a href="Modify/LOL.php" class="abc ml-5">Modify</a>
                            <a href="Report/LOL.php" class="abc ml-5">Report</a>
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
                        
                        <div class="float-left btn-group" style="width: 8.5%;background-color: white; height: 585px;  ">
 
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
               <form action="" method="post" enctype="multipart/form-data" style="overflow-Y: scroll; overflow-x: hidden; height:575px;">

                   <div class="row">
                        <div class="col-4">
                            <label>Name of Laboratory</label>
                            <input type="text" name="nm" class="form-control">
                        </div>
                        <div class="col-4">
                            <label>Type of Laboratory</label>
                            <input type="text" name="types" class="form-control">
                        </div>
                        <div class="col-4">
                            <label>Address</label>
                            <input type="text" name="addd" class="form-control">
                        </div>
                    </div>
                        <br>
                    <div class="row">
                             <div class="col-4">
                                <label>Country</label>
                                <select name="cons" class="countries form-control" id="countryId">
                                    <option>Select Country</option>
                                </select>
                            </div>  
                            <div class="col-4">
                                <label>State</label>
                                <select name="st" class="states form-control" id="stateId">
                                    <option>Select State</option>
                                </select>
                            </div>                
                             <div class="col-4">
                                <label>City</label>

                                <select name="ct" class="cities form-control" id="cityId">
                                    <option>Select City</option>
                                </select>
                           </div>  
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-4">
                                <label>Pin Code</label>
                                <input type="text" name="pin" class="form-control">
                            </div>  
                            <div class="col-4">
                                <label>Web Page</label>
                                <input type="text" name="web" class="form-control">
                            </div>                
                             <div class="col-4">
                                <label>Email</label>
                                <input type="Email" name="em" class="form-control">
                            </div>  
                    </div>
                    <br>
                     <div class="row">
                        <div class="col-4">
                            
                            <label>Contact Details - LandLine</label>
                            <input type="text" name="ln" class="form-control">
                        </div>  
                        <div class="col-4">
                            <label>Contact Details - Cell</label>
                            <input type="text" name="cell" class="form-control" >
                        </div>                
                         <div class="col-4">
                            <label>Fax</label>
                            <input type="text" name="fx" class="form-control">
                        </div>  
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            
                            <label>Part of SEZ</label>
                            <select class="form-control" name="sez">
                                <option>yes</option>
                                <option>No</option>
                            </select>
                        </div>  
                        <div class="col-4">
                            <label>GSTIN</label>
                            <input type="text" name="gst" class="form-control">
                        </div>                
                         <div class="col-4">
                            <label>PAN/TAN</label>
                            <input type="text" name="pan" class="form-control">
                        </div>  
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <label>Legal Identity</label>
                            <input type="text" name="li" class="form-control">
                        </div>  
                        <div class="col-4">
                            <label>Upload Legal Identity</label>
                            <input type="file" name="file" class="form-control" onChange=" validatePDF(this)">
                        </div>                
                         <div class="col-4">
                            <label>Type of Facility</label>
                            <input type="text" name="fac" class="form-control">
                        </div>  
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <label>Name of the Parent Organization (if any)</label>
                            <input type="text" name="lor" class="form-control">
                        </div> 
                        <div class="col-4">
                            <label>Type of Service</label>
                            <select name="se" class="form-control">
                                <option>Open to Others</option>
                                <option>Partly Open to Others</option>
                                <option>An in-house Activity</option>
                            </select>
                        </div>
                         <div class="col-4">
                            <label>Site Facility</label>
                            <input type="text" name="sf" class="form-control">
                        </div>   
                        
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4">
                            <label>Other Accreditation</label>
                            <input type="text" name="oa" class="form-control">
                        </div> 
                        <div class="col-4">
                            <label>Organization Chart of Laboratory</label>
                            <input type="text" name="cl" class="form-control">
                        </div> 
                        <div class="col-4">
                            <label>System Document File</label>
                            <input type="text" name="sd" class="form-control">
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
        
</div>   
</div>
</div>
<?php
    }
?>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
<script type="text/javascript" src="JS/country.js"></script>

</body>
</html>
