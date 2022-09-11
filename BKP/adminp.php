<?php

 
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/echostyle.css" />

<link rel="stylesheet" href="view.css" />
</head>
<body>
</head>
<body>

             <header> 

      
        <h1>ADMIN PANAL</h1>
       
         </header>


          <div class="nav">
                             <ul>                                   	
		                                                                           <li><a href="logout.php">LOGOUT</a></li>
                             </ul> 
            </div> 






<div class="form">

<h2>REGISTERED USERS</h2>










<br/><br/>


<table width="100%" border="1" class="data-table">
<thead>
<tr><th>SI.NO</th><th>USER_NAME</th><th>EMAIL</th><th>#PASS</th><th>TIME&DATE</th><th>OPRATIONS</th></tr>

</thead>
<tbody>
<?php


$count=1;

$msu= $_SESSION['username'];
$sel_query="Select * from users  ORDER BY id";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["username"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["password"]; ?></td>
<td align="center"><?php echo $row["trn_date"]; ?></td>
<td align="center"><a href="edita.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>



<?php $count++; }?>


</tbody>
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
