<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
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


<?php
include 'db.php';
include("auth.php");
$no="";
if(isset($_POST['new']) && $_POST['new']==1)
{
$cglcode=$_REQUEST['cglcode'];
$br=strtoupper($_REQUEST['br']);
$stdno=$_REQUEST['stdno'];
$sdpin=$cglcode."-".$br."-".$stdno;
date_default_timezone_set('Asia/Kolkata'); 

$trn_date=date("Y-m-d H:i:s");
$accno=$_REQUEST['no'];



$q="UPDATE bookdb SET status='0',pin='$sdpin',date='$trn_date' WHERE no=$accno;";
$q2="insert into booksts (no,pin) values('$accno','$sdpin') ";
$sts=mysqli_query($con,$q) or die(mysqli_error($con));
$sts2=mysqli_query($con,$q2) or die(mysqli_error($con));

if($sts && $sts2)
{

$alt='<p style="color:red;font-size:1.5em;">data inserted<p>';
echo $alt;
}
	
	
	}





?>













<form action=""  method="post" align="center">
<input type="hidden" name="new" value="1" /></input>
<div class="pin">
<input type="textbox" name="cglcode"  required ></input><b>-</b>
<select name="br">

<option value="CM">CM</option> 
<option value="EC">EC</option> 
<option value="EE">EE</option> 
<option value="M">M</option> 

</select><b>-</b>
<input type="textbox" name="stdno"  required >
</div>

<select name="no">
<?php
$sel_query="Select * from bookdb where status='1' ;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>



<option value="<?php echo $row["no"]; ?>"><?php echo $row["no"]; ?></option>


<?php  }?>
</select>
<div class="submitbtn">
<input type="submit" name="" placeholder="enter your msg">
</div>

</form>















<body>
</html>

