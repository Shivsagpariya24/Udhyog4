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
        Udhyog4.0 LLP | List of Equipment
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
                                <a href="../list_of_Personnel.php"><img class="img-fluid mr-3" src="../img/QSW.png" style="width: 45px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            <table border="1" bgcolor="white" align="center" style="text-align: center; width: 92%;border-color: lightgray;" class="mr-2 mt-3" >
        
                 <tr style="height: 35px">
                   <th>No</th>
                   <th>Employee Type</th>
                   <th>Name</th>
                   <th>Designation </th>
                   <th>Specialization</th>
                   <th>Experience</th>
                   <th>Relevant Technical Training</th>
                   <th>Landline No</th>
                   <th>Mobile No</th>
                   <th>Email</th>
                   <th>Proposed Authorized</th>
                   <th>File</th>
                   <th>Update</th>
                 </tr> 
                 <?php
                $sql = "SELECT  id,et,nm,des,sp,ex,rt,ln,mn,em,pa,upl FROM lop"; //You don't eted a ; like you do in SQL
                $result = $con-> query($sql);
                if ($result-> num_rows > 0){
                while ($row = mysqli_fetch_array($result)) 
            {
            ?>
        <tr  style="height: 35px">
            <td><?php echo $row['id']?> </td>
            <td><?php echo $row['et']?> </td>
            <td><?php echo $row['nm']?> </td>
            <td><?php echo $row['des']?> </td>
            <td><?php echo $row['sp']?> </td>
            <td><?php echo $row['ex']?> </td>
            <td><?php echo $row['rt']?> </td>
            <td><?php echo $row['ln']?> </td>
            <td><?php echo $row['mn']?> </td>
            <td><?php echo $row['em']?> </td>
            <td><?php echo $row['pa']?> </td>
            <td style="text-align: left; font-weight: bold;"><a style="text-decoration-line: none;color: black" href="../upload/personnel/<?php echo $row['upl'] ?>" ><?php echo $row['upl']?></a> </td>
            
            <?php
               echo "
               <td><a href='../Report/LOP(u).php?id=$row[id]&et=$row[et]&nm=$row[nm]&des=$row[des]&sp=$row[sp]&ex=$row[ex]
               &rt=$row[rt]&ln=$row[ln]&mn=$row[mn]&em=$row[em]&pa=$row[pa]&upl=$row[upl]'>update</td>
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
    </div>
</body>
</html>