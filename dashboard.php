<?php

 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/news.css" />
</head>
<style>
fieldset
{
background-color:yellow;
float:left;
margin-left:20px;
margin-top:20px;
height:100%;
width:250px;
}
fieldset legend{background-color:blue
;color:yellow;}
fieldset a p{font-size:20px;font-weight:bold;}
</style>
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


<p><h1 align="center">Welcome to Dashboard.</h1></p>







 <fieldset><br/>
  <legend>ISSUE OR RECOVER</legend>
 <center><a href="issue.php" class="button"> <p> ISSUE BOOK</p> </a> </center><br/>
 
  <center>   <a href="recover.php" class="button"><p>RETURN BOOK</p></a> </center>
 </fieldset>





 <fieldset><br/>
  <legend>ADD OR REMOVE</legend>
 <center> <a href="newbookinsert.php" class="button"><p>ADD NEW BOOK</p></a> </center><br/>
 
   <center>  <a href="book_view.php" class="button"><p>REMOVE/EDIT A BOOK</p></a> </center>
 </fieldset>



 <fieldset>
  <legend>NOTIFICATIONS</legend>
  <center><a href="notify.php" class="button"><p>SEND NOTIFICATION TO STUDENTS</p></a> </center><br/>
 
  <center>   <a href="reqbook_fetch.php" class="button"><p>VIEW STUDENT SUGGESTIONS</p></a> </center>
 </fieldset>





 <fieldset>
  <legend>SEARCH OPTIONS</legend>
  <center><a href="pin.php" class="button"><p>SEARCH WITH PIN</p></a> </center><br/>
 
 <center>    <a href="live_search.php
	" class="button"><p>SEARCH BOOk</p></a> </center>
	
	<center>    <a href="acc_search.php
	" class="button"><p>SEARCH BOOk WITH ACC.NO </p></a> </center>
 </fieldset>












<br /><br /><br /><br />



</body>
</html>














