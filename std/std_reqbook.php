<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/news.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

           <header> 

        <img src="logo.png" alt="LOGO GOSE HEAR" ></img>
        <center><h1>Dr.YC JAMES YEN GOVT POLYTECHNIC,KUPPAM</h1><center>
        <h2>LIBRARY MANAGEMENT SYSTEM</h2> 
         </header>


           <div class="nav">
                             <ul>
                                       <li><a href="std_index.php">HOME</a></li>

                                       <li><a href="std_dashboard.php">DASHBOARD</a>
		
		

                                       

                                       <li><a href="std_logout.php">LOGOUT</a></li>
                             </ul> 
            </div> 
<?php
include 'db.php';
include("auth.php");
if(isset($_POST['new']) && $_POST['new']==1)
{
$bname=$_REQUEST['name'];
$cglcode=$_REQUEST['cglcode'];
$br=strtoupper($_REQUEST['br']);
$stdno=$_REQUEST['stdno'];
$sdpin=$cglcode."-".$br."-".$stdno;
$bauthor=$_REQUEST['author'];
$ots=$_REQUEST['ots'];

$q="insert into reqbook (pin, name, author,others) values('$sdpin','$bname','$bauthor','$ots')";
$st=mysqli_query($con,$q) or die(mysqli_error($con));
//header('Location: suss_newinsert.php');

if($st)
{

$alt='<p style="color:red;font-size:1.5em;">REQUEST SENT<p>';
echo $alt;
}
	
	
	

}



?>













<form action=""  method="post" align="center">
<input type="hidden" name="new" value="1" />

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

<input type="textbox" name="name" required placeholder="ENTER BOOK NAME."><br \><br \>

<input type="textbox" name="author" required placeholder="ENTER AUTHOR NAME"><br \><br \>
<textarea style="margin-bottom:10px;width: 300px; height: 199px;" name="ots">NONE</textarea>
<div class="submitbtn">
<input type="submit" name="" placeholder="enter your msg">
</div>

</form>















<body>
</html>

