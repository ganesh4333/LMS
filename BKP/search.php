<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/styles2.css" />
<link rel="stylesheet" href="css/fs.css" />
<link rel="stylesheet" href="css/tstyle.css" />
</head>
<body>

           <header> 

        <img src="logo.png" alt="LOGO GOSE HEAR" ></img>
        <h1>LIBRARY MANAGEMENT SYSTEM</h1>
        <h2>BY 17DCME</h2>
         </header>


          <div class="nav">
                             <ul>
                                       <li><a href="index.php">HOME</a></li>

                                       <li><a href="dashboard.php">DASHBOARD</a>
					

                                       

                                       <li><a href="logout.php">LOGOUT</a></li>
                             </ul> 
            </div>
<form action=""  method="post">
<input type="hidden" name="new" value="1" />
<input type="textbox" name="gno" placeholder="ENTER BUNDLE_NO:"><br \><br \>

<div class="submitbtn">
<input type="submit" name="" placeholder="enter your msg">
</div>


</form>


<table width="100%" border="1" class="data-tabletwo">
<thead>
<tr>
<th>PIN</th>
<th>NAME</th>
<th>TAKEN IN</th>
<th colspan="2">OPRATIONS</th>
</tr>
</thead>
<tbody>








<?php
include 'cone.php';
include("auth.php");
if(isset($_POST['new']) && $_POST['new']==1)
{
$count=1;
$bno=$_REQUEST['gno'];
$sel_query="Select * from libt WHERE Book_BUNDLE_NO='$bno';";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $row["Std_PIN"]; ?></td>
<td align="center"><?php echo $row["Std_NAME"]; ?></td>
<td align="center"><?php echo $row["DATE"]; ?></td>
<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>"><u><b>EDIT</b></u></a></td>

<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>"><u><b>DELETE</b></u></a></td>


</tr>

<?php  }}?>




<body>
</html>