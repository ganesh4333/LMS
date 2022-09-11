<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/styles2.css" />
<link rel="stylesheet" href="css/fs.css" />
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

<?php
include 'cone.php';
include("auth.php");
if(isset($_POST['new']) && $_POST['new']==1)
{
$txt=$_REQUEST['txt'];
$trne_date =  date("Y-m-d ");
if($txt=="")
{

$ermsg='<p style="color:red;font-size:1.5em;">PLEASE ENTER NOTIFICATION<p>';
	echo $ermsg;
}
else{
$q="insert into updates (text,date) values('$txt','$trne_date')";
$st=mysqli_query($con,$q) or die(mysqli_error($con));
header('Location: suss.php');

if($st)
{

$alt='<p style="color:red;font-size:1.5em;">NOTIFICATION SENT...<p>';
echo $alt;
}
	
	
	}

}



?>













<form action=""  method="post">
<input type="hidden" name="new" value="1" />
<center><textarea rows="4" cols="50" name="txt"></textarea></center>

<div class="submitbtn">
<center><input type="submit" name="" ></input></center>
</div>

</form>















<body>
</html>

