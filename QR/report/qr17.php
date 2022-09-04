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
                    <img class="img-fluid " src="../../img/udhyog_logo.png">
                </div>
                <div class="col-11">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between align-items-center"
                          style="background-color: #F5874F; font-size: 23px; padding: 5px; padding-left: 10px; height: 52px;">
                            <div class="ml-3" style="color: #ffffff;">National Cera Lab - Morvi</div>
                            <a href="../../Logout.php"><img src="../../img/l1.png" width="45px" style="float:right" class="mr-3"></a>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 d-flex justify-content-between align-items-center"
                            style="background-color: #5DC072; font-size:23px; padding: 5px; padding-left: 10px;">
                            <div style="color: #ffffff;">
                                <div class="d-inline-block ml-3"><a href="../../dashboard.php" style="color: #ffffff; text-decoration: none;position: relative;
                            display: inline-block;">Dashboard</a>
                                </div>
                            </div>
                            <div class="">
                                <a href="../../sales_marketing.php"><img class="img-fluid mr-3" src="../../img/SW.png" style="width: 45px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="button" id="btnExport" value="Print" class="float-right mr-2 mt-2" />
                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
                <script type="text/javascript">
                    $("body").on("click", "#btnExport", function () {
                    html2canvas($('#tblCustomers')[0], {
                        onrendered: function (canvas) {
                            var data = canvas.toDataURL();
                            var docDefinition = {
                                content: [{
                                    image: data,
                                    width: 520
                                }]
                            };
                            pdfMake.createPdf(docDefinition).download("QR_17.pdf");
                        }
                        });
                       });
                </script>
            <div id="tblCustomers">
            <table border="1" bgcolor="white" align="center" style="text-align: center; width: 92%;border-color: lightgray;" class="mr-2 mt-5" >
                <tr style="height:35px;border-color:#000000;">
                       <th rowspan="2">National Cera Lab - Morbi</th>
                       <th >List of Format</th>
                       <th >Format:QR/17</th>
                </tr>
                <tr style="height:35px;border-color:#000000;">
                <th>QR/17</th>
                <th>Revision No : 0</th>
                </tr>
                </table>
            <table border="1" bgcolor="white" align="center" style="text-align: center; width: 92%;border-color: lightgray;" class="mr-2">
                 <tr style="height: 35px">
                 <th>No</th>
                 <th>Identification Number</th>
                   <th>Date</th>
                   <th>Name of Customer</th>
                   <th>Address of the Customer</th>
                   <th>City</th>
                   <th>Quantity of Sample</th>
                   <th>Quality of Sample</th>
                   <th>Number of Tiles</th>
                   <th>Sample Collected By</th>
                   <th>Test Description</th>
                   <th>Expected Delivery Date</th>
                   <th>Delivery at</th>
                   <th>Requirements defined and understood</th>
                   <th>Capability and Resources available</th>
                   <th>Condition of Sample Received</th>
                 </tr> 
                 <?php
                $sql = "SELECT  id,i_n,dt,n_c,a_c,c_t,q_s,qua_s,n_t,s_c,des_ts,e_d,d_a,r_d,c_r,c_s FROM qr17"; //You don't need a ; like you do in SQL
                $result = $con-> query($sql);
                if ($result-> num_rows > 0){
                while ($row = mysqli_fetch_array($result)) 
            {
            ?>
            <tr  style="height: 35px">
            <td><?php echo $row['id']?> </td>
            <td><?php echo $row['i_n']?> </td>
            <td><?php echo $row['dt']?> </td>
            <td><?php echo $row['n_c']?> </td>
            <td><?php echo $row['a_c']?> </td>
            <td><?php echo $row['c_t']?> </td>
            <td><?php echo $row['q_s']?> </td>
            <td><?php echo $row['qua_s']?> </td>
            <td><?php echo $row['n_t']?> </td>
            <td><?php echo $row['s_c']?> </td>
            <td><?php echo $row['des_ts']?> </td>
            <td><?php echo $row['e_d']?> </td>
            <td><?php echo $row['d_a']?> </td>
            <td><?php echo $row['r_d']?> </td>
            <td><?php echo $row['c_r']?> </td>
            <td><?php echo $row['c_s']?> </td>
</tr>
   
<?php
}
echo "</table>";
}

$con->close();
?>  <table border="1" bgcolor="white" align="center" style="text-align: center; width: 92%;border-color: black;" class="mr-2">
        <tr style="height:35px;border-color:#000000;">
            <th colspan="1">Prepaid By : </th>
            <th colspan="2">As on</th>
            <th colspan="2">Appoved By </th>
        </tr>
        <tr style="height:35px;border-color:#000000;">
            <th colspan="1"> </th>
            <th colspan="2"> </th>
            <th colspan="2"> </th>
        </tr> 
        </table>
            </table>   
            </div>
    </div>
</body>
</html>