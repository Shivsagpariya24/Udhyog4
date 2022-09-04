<?php
    session_start();
    if($_SESSION['name']==true)
    {

    }
    else
    {
        header('location:index.php');
    }
     $con = mysqli_connect("localhost","root","","login") or die("connection faild");
?>
<?php
   if(isset($_POST['submit'])) 
  {
    $id=$_GET['id'];
    $Section=$_POST['Section'];
    $Groupp= $_POST['Groupp'];
    $Sub_group= $_POST['Sub_group'];
    $Product= $_POST['Product'];
    $Test= $_POST['Test'];
    $Test_method= $_POST['Test_method'];
    $Test_method2=$_POST['Test_method2'];
    $file = $_FILES['file']['name'];
    $file_type=$_FILES['file']['tmp_name'];
    move_uploaded_file($file_type,"../upload/".$file);
    $Year_of_publish= $_POST['Year_of_publish']; 
    

    $query="UPDATE technical SET Section='$Section',Groupp='$Groupp',Sub_group='$Sub_group',Product='$Product',Test='$Test',Test_method='$Test_method $Test_method2',file='$file',Year_of_publish='$Year_of_publish'  where id='$id'";
    $data = mysqli_query($con,$query);

    if($data)
    { 
    ?> 
        <script>
        alert('Record successfully Update');
         // location.replace('table.php');
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
                                <a href="../Report/table.php"><img class="img-fluid mr-3"
                                src="../img/Mechanical_White.png" style="width: 45px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <br>
    <div class="form" style="margin-left: 8.5%">
        <form action="" method="post" enctype="multipart/form-data">
            <?php
           $id=$_GET['id'];

            $result="SELECT * FROM technical where id = '$id'";

            $query_run = mysqli_query($con, $result);
                  
                  if(mysqli_num_rows($query_run) > 0)
                  {
                      while ($row = mysqli_fetch_array($query_run)) {
    ?>
            <div class="row">
           <div class="col-4">
                    <label>Section</label>
                    <select  name="Section" class="form-control" required>
                        <option value="<?php echo $row['Section'] ?>"><?php echo $row['Section']; ?></option>
                                                <option>Testing</option>
                                                <option>Calibration</option>
                    </select>
                </div>
                <div class="col-4">
                    <label>Group</label>
                    <select  name="Groupp" class="form-control" required>
                                                <option value="<?php echo $row['Groupp'] ?>"><?php echo $row['Groupp']; ?></option>
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
                        <option value="<?php echo $row['Sub_group'] ?>"><?php echo $row['Sub_group']; ?></option>
                        <option>Building Material</option>
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
                        <option value="<?php echo $row['Product'] ?>"><?php echo $row['Product']; ?></option>
                        <option>Ceramic Tiles</option>
                    </select>
                </div>                
                 <div class="col-4">
                    <label id="collz">Test</label>
                    <select  name="Test" class="form-control" required>
                       <option value="<?php echo $row['Test'] ?>"><?php echo $row['Test']; ?></option>
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
                    <label>Standard</label>
                    <br>
                        <input type="radio" name="Test_method" id="method" value="IS" required
                        <?php
                        if($row['Test_method'] == 'IS')
                            echo "checked";
                        ?>
                        >IS&nbsp;
                        <input type="radio" name="Test_method" id="method1" value="ISO"
                        <?php
                        if($row['Test_method'] == 'ISO')
                            echo "checked";
                        ?>
                        >ISO&nbsp;
                        <input type="radio" name="Test_method" id="method2" value="ASTM"
                        <?php
                        if($row['Test_method'] == 'ASTM')
                            echo "checked";
                        ?>
                        >ASTM&nbsp;
                        <input type="radio" name="Test_method" id="method3" value="AISI"
                        <?php
                        if($row['Test_method'] == 'AISI')
                            echo "checked";
                        ?>
                        >AISI&nbsp;
                        <input type="radio" name="Test_method" value="OTHER" id="method4"
                        <?php
                        if($row['Test_method'] == 'OTHER')
                            echo "checked";
                        ?>
                        >OTHER&nbsp;

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    <label>Test_method</label><br>
                <input type="text" name="Test_method2" style="width: 440px; height: 37px" id="textnumber1" disabled="disabled" value="<?php echo $row['Test_method']; ?>">
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
                        <option value="<?php echo $row['Year_of_publish'] ?>"><?php echo $row['Year_of_publish']; ?></option>
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
                    <input type="file" id="browse" name="file" style="display: none;" onChange=" validatePDF(this)"required>
                    <input type="button" value="BROWSE" onclick="HandleBrowseClick();"/ required class="submit">
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

</body>
</html>
