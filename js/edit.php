<?php
include('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from bookdb where id='".$id."'";
$result = mysqli_query($con,$query) or die(mysql_error($con));
$row= mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/news.css" />
</head>
<body>
             <header> 

        <img src="logo.png" alt="LOGO GOSE HEAR" ></img>
        <center><h1>Dr.YC JAMES YEN GOVT POLYTECHNIC,KUPPAM</h1><center>
        <h2>LIBRARY MANAGEMENT SYSTEM</h2> 
         </header>


          <div class="nav">
                             <ul>
                                       <li><a href="index.php">HOME</a></li>

                                       <li><a href="dashboard.php">DASHBOARD</a>
					

                                       

                                       <li><a href="logout.php">LOGOUT</a></li>
                             </ul> 
            </div>

<div class="form">

<h1>Update Book data</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$no=$_REQUEST['no'];
$name=$_REQUEST['name'];
$author=$_REQUEST['author'];

$update="update bookdb set no='".$no."',name='".$name."',author='".$author."',status='1',pin='0' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error($con));
$status = "Record Updated Successfully. </br></br><a href='book_view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />


<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<p><input type="text" name="no" placeholder="Enter ACC NO" required value="<?php echo $row['no'];?>"/></p>					
<p><input  type="text" name="name"  placeholder="Enter Name" required value="<?php echo $row['name'];?>" /><p>
<p><input  type="text" name="author"  placeholder="Enter Author" required value="<?php echo $row['author'];?>" /><p>





<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>

<br /><br /><br /><br />

</div>
</div>
</body>
</html>
