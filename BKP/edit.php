<?php

 
require('cone.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from libt where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/styles2.css" />
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
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$StdPIN=$_REQUEST['Std_PIN'];
$StdNAME=$_REQUEST['Std_NAME'];
$BookNAME=$_REQUEST['Book_NAME'];
$BookBUNDLENO=$_REQUEST['Book_BUNDLE_NO'];
$BookAUTHOR=$_REQUEST['Book_AUTHOR'];
$update="update libt set Std_PIN='".$StdPIN."',Std_NAME='".$StdNAME."',Book_NAME ='".$BookNAME."',Book_BUNDLE_NO  ='".$BookBUNDLENO."',Book_AUTHOR='".$BookAUTHOR  ."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />


<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<p><input type="text" name="Std_PIN" placeholder="Enter Std_PIN" required value="<?php echo $row['Std_PIN'];?>"/></p>					
<p><input  type="text" name="Std_NAME"  placeholder="Enter Std_NAME" required value="<?php echo $row['Std_NAME'];?>" /><p>
<p><input  type="text" name="Book_NAME"  placeholder="Enter Book_NAME" required value="<?php echo $row['Book_NAME'];?>" /><p>
<p><input  type="text" name="Book_BUNDLE_NO" placeholder="Enter Book_BUNDLE_NO" required value="<?php echo $row['Book_BUNDLE_NO'];?>" /><p>
<p><input  type="text" name="Book_AUTHOR" placeholder="Enter Mode of Book_AUTHOR " required  value="<?php echo $row['Book_AUTHOR'];?>" /><p>					





<p><input name="submit" type="submit" value="Update" /></p><br\>
<p><a href=search.php style="padding: 10px 25px 8px; color: #fff; background-color: #0067ab; text-shadow: rgba(0,0,0,0.24) 0 1px 0; font-size: 16px; box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0; border: 1px solid #0164a5; border-radius: 2px; margin-top: 10px; cursor:pointer;"  >CANCEL</a></p>
</form>
<?php } ?>

<br /><br /><br /><br />

</div>
</div>
</body>
</html>
