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
   
    // When form submitted, insert values into the database.

   
    if (isset($_POST['submit'])) {
        
        $Section = $_POST['Section'];
        $Groupp  = $_POST['Groupp'];
        $Sub_group = $_POST['Sub_group'];
        $Product = $_POST['Product'];
        $Test = $_POST['Test'];
        $Test_method  = $_POST['Test_method'];
        $Test_method2 = $_POST['Test_method2'];
        $Year_of_publish  = $_POST['Year_of_publish'];
        $file = $_FILES['file']['name'];
        $file_type=$_FILES['file']['tmp_name'];
        move_uploaded_file($file_type,"upload/technical/".$file);
        $create_datetime = date("Y-m-d H:i:s");
        
        $query    = "INSERT into `technical` (Section,Groupp,Sub_group,Product,Test,Test_method,Year_of_publish,file,create_datetime)
                    VALUES ('$Section','$Groupp','$Sub_group','$Product','$Test','$Test_method $Test_method2','$Year_of_publish','$file','$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            ?>
                <script>
                    alert ('your data will be successfully submit');
                    location.replace('Technical.php');
                </script>

             <?php
        }
        else {
            ?>
                <script>
                    alert ('required Field Are Missing.');
                    location.replace('Technical.php');
                </script>

             <?php
        }
    } else {

?>

<html>
 
<head>
	<meta charset="utf-8">
    <title>Technical | Udhyog4.0 LLP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/Technical.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script language="JavaScript" type="text/javascript">
            function HandleBrowseClick()
            {
                var fileinput = document.getElementById("browse");
                fileinput.click();
            }
            function Handlechange()
            {
            var fileinput = document.getElementById("browse");
            var textinput = document.getElementById("filename");
            textinput.value = fileinput.value;
            }
    </script>
    <script language="JavaScript">
        var formOK = false;
        function validatePDF(objFileControl){
        var file = objFileControl.value;
        var len = file.length;
        var ext = file.slice(len - 4, len);
        if(ext.toUpperCase() == ".PDF"){
        formOK = true;
        }
        else{
        formOK = false;
        alert("Only PDF files allowed.");
     }
    }
    </script>
</head>

<body style="background-color: #E6E7E8">
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
                            <a href="Technical.php" class="abc ml-5">New</a>
                            <a href="Modify/QT(modify).php" class="abc ml-5">Modify</a>
                            <a href="Report/table.php" class="abc ml-5">Report</a>
                            </div>
                            </div>
                            <div class="">
                                <a href="Mechanical.php"><img class="img-fluid mr-3"
                                src="img/Mechanical_White.png" style="width: 45px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <br>
    <div class="form" style="margin-left: 8.5%">
        <form action="" method="post" enctype="multipart/form-data">
            <br>
            <div class="row">
           <div class="col-4">
                    <label>Section</label>
                    <select  name="Section" class="form-control" required>
                                                <option>Select</option>
                                                <option>Testing</option>
                                                <option>Calibration</option>
                    </select>
                </div>
                <div class="col-4">
                    <label>Group</label>
                    <select  name="Groupp" class="form-control" required>
                                                <option>Select</option>>
                                                <option>Mechanical </option>
                                                <option>Chemical</option>
                                                <option>Biological</option>
                                                <option>Electrical</option>
                                                <option>Electronics</option>
                                                <option>Fluid Flow</option>
                                                <option>Forensic</option>
                                                <option>Non-Destructive</option>
                                                <option>Photometry</option>
                                                <option>Radiological</option>
                                                <option>Diagnostic Radiology QA Testing</option>
                                                <option>Software & IT System</option>
                    </select>
                </div>
                <div class="col-4">
                    <label>Sub_Group</label>
                    <select class="form-control" name="Sub_group" required>
                        <option selected>Select</option>
                        <option value="Building Material">Building Material</option>
                                                <option>Mechanical Properties of Metals</option>
                                                <option>Metallography Test</option>
                                                <option>Soil and Rock</option>
                                                <option>Testing-NDT</option>
                                                <option>Standard-Quality</option>
                                                <option>Standard-Techanical</option>
                                                <option>Quality Manual</option>
                                                <option>Quality Manual Procedure</option>
                                                <option>Quality Section</option>
                                                <option>Sales & Marketing</option>
                                                <option>Purchase & store</option>
                    </select>
                </div>
            </div>
        <br>
            <div class="row">
            <div class="col-4">
                    <label >Product</label>
                    <select  class="form-control" name="Product" required>
                        <option selected>Select</option>
                                                <option>Ceramic Tiles</option>
                                            </select>
                </div>                
                <div class="col-4">
                    <label>Test</label>
                    <select  name="Test" class="form-control" required>
                        <option selected>Select</option>
                                                <option>Breaking Strength</option>
                                                <option>Flatness - Centre Curvature</option>
                                                <option>Flatness-Edge Curvature</option>
                                                <option>Length</option>
                                                <option>Modulus of Rupture(MoR)</option>
                                                <option>Rectangularity</option>
                                                <option>Straightness</option>
                                                <option>Thickness</option>
                                                <option>Water Absorption</option>
                    </select>
                </div>
                <div class="col-4">
                    <label style="margin-left: 05px">Standard</label>
                    <br>
                        &nbsp;<input type="radio"  name="Test_method" id="method" value="IS" required> IS&nbsp;
                        <input type="radio"  name="Test_method" id="method1" value="ISO"> ISO&nbsp;
                        <input type="radio" name="Test_method" id="method2" value="ASTM"> ASTM&nbsp;
                        <input type="radio" name="Test_method" id="method3" value="AISI"> AISI&nbsp;
                        <input type="radio" name="Test_method" id="method4" value="OTHER"> OTHER&nbsp;
                </div>  
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Test_method</label><br>
                    <input type="text" name="Test_method2" style="width: 440px; height: 37px" id="textnumber1" disabled="disabled">
                    <script type="text/JavaScript">
                        $(function(){
                        $("input[name='Test_method']").click(function(){
                        if(($("#method").is(":checked")) || ($("#method1").is(":checked"))
                        || ($("#method2").is(":checked")) || ($("#method3").is(":checked")) || ($("#method4").is(":checked")) ){
                        $("#textnumber1").removeAttr("disabled");    
                        $("#textnumber1").focus();
                        }
                        else{
                        $("#textnumber1").attr("disabled","disabled");
                        }
                        });
                        });
                        </script>
                </div>
                <div class="col-4">
                    <label>Year of Publish</label>
                    <select  class="form-control" name="Year_of_publish" required>
                        <option selected>Select</option>
                            <?php
                            for ($i=1950; $i<=2021; $i++)
                            {
                             ?>
                             <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php
                              }
                            ?>
                    </select>
                </div> 
            </div>
            <br>       <br>
            <div class="row text-center">
                <div class="col-12">
                    <input type="file" id="browse" name="file" style="display: none;" onChange=" validatePDF(this) "  required>
                    
                    <input type="button" value="BROWSE" onclick="HandleBrowseClick();"/ required class="submit">
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
?>
</body>
</html>