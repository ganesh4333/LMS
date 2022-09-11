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
$StdPIN=$_REQUEST['Std_PIN'];
$StdNAME=$_REQUEST['Std_NAME'];
$BookNAME=$_REQUEST['Book_NAME'];
$BookBUNDLENO=$_REQUEST['Book_BUNDLE_NO:'];
$BookAUTHOR=$_REQUEST['Book_AUTHOR'];
$trne_date = date("Y-m-d ");
if($StdPIN==""||$StdNAME==""||$BookNAME==""||$BookBUNDLENO==""||$BookAUTHOR=="")
{

$ermsg='<p style="color:red;font-size:1.5em;">MUST FILL ALL FIELDS<p>';
	echo $ermsg;
}
else{
$q="insert into libt (Std_PIN, Std_NAME, Book_NAME, Book_BUNDLE_NO,Book_AUTHOR,DATE) values('$StdPIN','$StdNAME','$BookNAME','$BookBUNDLENO','$BookAUTHOR','$trne_date')";
$st=mysqli_query($con,$q) or die(mysqli_error($con));
header('Location: suss.php');

if($st)
{

$alt='<p style="color:red;font-size:1.5em;">data inserted<p>';
echo $alt;
}
	
	
	}

}



?>













<form action=""  method="post">
<input type="hidden" name="new" value="1" />

<input type="textbox" name="Std_PIN" placeholder="ENTER Std_PIN"><br \><br \>

<input type="textbox" name="Std_NAME" placeholder="ENTER Std_NAME"><br \><br \>

<input type="textbox" name="Book_NAME" placeholder="ENTER Book_NAME"><br \><br \>

<input type="textbox" name="Book_BUNDLE_NO:" placeholder="ENTER Book_BUNDLE NO:"><br \><br \>

<input type="textbox" name="Book_AUTHOR" placeholder="ENTER Book_AUTHOR"><br \><br \>
<div class="submitbtn">
<input type="submit" name="" placeholder="enter your msg">
</div>

</form>















<body>
</html>

