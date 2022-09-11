<?php

 
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="echostyle.css" />

<link rel="stylesheet" href="view.css" />
</head>
<body>
</head>
<body>

             <header> 

      
        <h1>TA MANAGEMENT SYSTEM</h1>
       
         </header>


          <div class="nav">
                             <ul>
                                       <li><a href="index.php">HOME</a></li>

                                       <li><a href="dashboard.php">DASHBORD</a>
		
		

                                       

                                       <li><a href="logout.php">LOGOUT</a></li>
                             </ul> 
            </div> 






<div class="form">

<h2>TA BILL</h2>







<table width="100%" border="1" class="data-tabletwo">
<thead>
<tr><th>NAME</th><th>EMP_CODE</th><th>REGION</th><th>LOATION</th><th>A/C_NUMBER</th><th>IFSC</th><th>OPRATIONS</th></tr>
</thead>
<tbody>
<?php

$msur= $_SESSION['username'];
$count=1;
$sel_query="Select * from tahead WHERE submittedby='$msur';";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>

<td align="center"><?php echo $row["NAME"]; ?></td>
<td align="center"><?php echo $row["EMP_CODE"]; ?></td>
<td align="center"><?php echo $row["REGION"]; ?></td>
<td align="center"><?php echo $row["LOCATION"]; ?></td>
<td align="center"><?php echo $row["A_C_NUMBER"]; ?></td>
<td align="center"><?php echo $row["IFSC"]; ?></td>
<td align="center"><a href="deltahead.php?id=<?php echo $row["id"]; ?>">Delete</a></td>



</tr>



<?php $count++; }?>


</tbody>
</table>


<br/><br/>


<table width="100%" border="1" class="data-table">
<thead>
<tr><th>SI.NO</th><th>DATE</th><th>FROM</th><th>TO</th><th>KM</th><th>MODE OF TRAVEL</th><th>FARE</th><th>LOAL CONVEYANCE</th><th>BORDING AND LOADING</th><th>SPARES</th><th>COURIERS</th><th>TOTAL</th><th colspan="2">OPRATIONS</th></tr>

</thead>
<tbody>
<?php


$count=1;

$msu= $_SESSION['username'];
$sel_query="Select * from tatable WHERE submittedby='$msu' ORDER BY id";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["DATE"]; ?></td>
<td align="center"><?php echo $row["PALCE_FROM"]; ?></td>
<td align="center"><?php echo $row["PLACE_TO"]; ?></td>
<td align="center"><?php echo $row["KM"]; ?></td>
<td align="center"><?php echo $row["MODE_OF_TRAVEL"]; ?></td>
<td align="center"><?php echo $row["FARE"]; ?></td>
<td align="center"><?php echo $row["LOAL_CONVEYANCE"]; ?></td>
<td align="center"><?php echo $row["BORDING_AND_LOADING"]; ?></td>
<td align="center"><?php echo $row["SPARES"]; ?></td>
<td align="center"><?php echo $row["COURIERS"]; ?></td>
<td align="center"><?php echo $row["TOTAL"]; ?></td>
<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>




<?php $count++; }?>


</tbody>
</table>






<table width="100%" border="1" class="data-table">
<thead>

<?php
$count=1;
$sumq="SELECT SUM(TOTAL) FROM tatable WHERE submittedby='$msu'";
$wtotal=mysqli_query($con,$sumq);
$ms=mysqli_fetch_assoc($wtotal);
?>
<tr>
<th>TOTAL</th>
<th align="center"><?php echo  $ms["SUM(TOTAL)"]; ?></th>
</tr>


<?php $count++; ?>

</thead>
</table>












<br /><br /><br /><br />


<center><button onclick="myFunction()" >Print</button></center><br /><br />

<script>
function myFunction() {
  window.print();
}
</script>

</div>

<div class="footer">

       </div>
</body>
</html>
