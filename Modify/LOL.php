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

<!DOCTYPE html>
<html>
<head>
    <title>
        Udhyog4.0 LLP 
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body style="background-color: #E6E7E8">
    <div class="container-fluid">
            <div class="row">
                <div class="col-1 d-flex justify-content-between align-items-center" style="background-color: #ffffff;">
                    <img class="img-fluid " src="../img/udhyog_logo.png">
                </div>
                <div class="col-11">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center"
                          style="background-color: #F5874F; font-size: 23px; padding: 5px; padding-left: 10px; height: 52px;">
                            <div class="ml-3" style="color: #ffffff;">National Cera Lab - Morvi</div>
                            <a href="../Logout.php"><img src="../img/l1.png" width="45px" style="float:right" class="mr-3"></a>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 d-flex justify-content-between align-items-center"
                            style="background-color: #5DC072; font-size:23px; padding: 5px; padding-left: 10px;">
                            <div style="color: #ffffff;">
                                <div class="d-inline-block ml-3"><a href="../dashboard.php" style="color: #ffffff; text-decoration: none;position: relative;
                            display: inline-block;">Dashboard</a>
                                </div>
                            </div>
                            <div class="">
                                <a href="../master.php"><img class="img-fluid mr-3" src="../img/QSW.png" style="width: 45px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div style="overflow-x:auto; margin-left: 130px;" class="mr-4">
            <table border="1" bgcolor="white" align="center" style="text-align: center; width: 92%;border-color: lightgray;" class="mr-2 mt-3" >
            <tr>
            <tr style="height: 35px">
                 <th>No</th>
                 <th>Name of Laboratory</th>
                   <th>Type of Laboratory</th>
                   <th>Address</th>
                   <th>Counrty</th>
                   <th>State</th>
                   <th>City</th>
                   <th>Pin Code</th>
                   <th>Web page</th>
                   <th>Email</th>
                   <th>Con. Lan</th>
                   <th>Con. Cell</th>
                   <th>Fax</th>
                   <th>Part of SEZ</th>
                   <th>GSIIN</th>
                   <th>PAN/TAN</th>
                   <th>Legal Inden.</th>
                   <th>Upload Inden.</th>
                   <th>Facility</th>
                   <th>Organization</th>
                   <th>Service</th>
                   <th>Site Facility</th>
                   <th>Other Accr.</th>
                   <th>Chart of Labor.</th>
                   <th>System Doc.</th>
                 </tr> 
                 <?php
                $sql = "SELECT  id,nm,types,addd,cons,st,ct,pin,web,em,ln,cell,fx,sez,gst,pan,li,file,fac,lor,se,sf,oa,cl,sd FROM lol"; //You don't need a ; like you do in SQL
                $result = $con-> query($sql);
                if ($result-> num_rows > 0){
                while ($row = mysqli_fetch_array($result)) 
            {
            ?>
            <tr  style="height: 35px">
            <td><?php echo $row['id']?> </td>
            <td><?php echo $row['nm']?> </td>
            <td><?php echo $row['types']?> </td>
            <td><?php echo $row['addd']?> </td>
            <td><?php echo $row['cons']?> </td>
            <td><?php echo $row['st']?> </td>
            <td><?php echo $row['ct']?> </td>
            <td><?php echo $row['pin']?> </td>
            <td><?php echo $row['web']?> </td>
            <td><?php echo $row['em']?> </td>
            <td><?php echo $row['ln']?> </td>
            <td><?php echo $row['cell']?> </td>
            <td><?php echo $row['fx']?> </td>
            <td><?php echo $row['sez']?> </td>
            <td><?php echo $row['gst']?> </td>
            <td><?php echo $row['pan']?> </td>
            <td><?php echo $row['li']?> </td>
            <td style="text-align: left; font-weight: bold;"><a style="text-decoration-line: none;color: black" href="../upload/Doc/<?php echo $row['file']?>" ><?php echo $row['file']?></a> </td>
            <td><?php echo $row['fac']?> </td>
            <td><?php echo $row['lor']?> </td>
            <td><?php echo $row['se']?> </td>
            <td><?php echo $row['sf']?> </td>
            <td><?php echo $row['oa']?> </td>
            <td><?php echo $row['cl']?> </td>
            <td><?php echo $row['sd']?> </td>
            <?php
                            echo "
                            <td><a href='../Report/LOL(u).php?id=$row[id]'>update</td>
                            ";
                    ?> 
        </tr>
<?php
}
echo "</table>";
}

$con->close();
?> 
            </table>  
            </div>
    
</body>
</html>