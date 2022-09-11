<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>

<link rel="stylesheet" href="css/news.css" />
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
$bname=$_REQUEST['name'];
$bno=$_REQUEST['no'];
$bauthor=$_REQUEST['author'];

if($bname==""||$bno==""||$bauthor=="")
{

$ermsg='<p style="color:red;font-size:1.5em;">MUST FILL ALL FIELDS<p>';
	echo $ermsg;
}
else{
$q="insert into books(name,no,author) values('$bname','$bno','$bauthor')";
$st=mysqli_query($con,$q) or die(mysqli_error($con));
header('Location: suss_bookinsert.php');

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

<input type="textbox" name="name" placeholder="ENTER BOOK NAME"><br \><br \>

<input type="textbox" name="no" placeholder="ENTER BOOK NO."><br \><br \>

<input type="textbox" name="author" placeholder="ENTER AUTHOR NAME"><br \><br \>

<div class="submitbtn">
<input type="submit" name="" placeholder="enter your msg">
</div>

</form>















<body>
</html>

