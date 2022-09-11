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
<p><h1 align="center">Welcome to Dashboard.</h1></p>

<div class="button" align="center">
<h2 style="color:red;">BOOK OPTIONS</h2><hr/><br/>
<!--<button onclick="window.location.href = 'issue.php';">ISSUE</button>-->
<a href="issue.php"><h3>ISSUE</h3></a>
<a href="recover.php"><h3>RECOVER</h3></a>

<a href="newbookinsert.php"><h3>ADD NEW BOOK</h3></a>
<a href="notify.php"><h3>SEND NOTIFICATION TO STUDENTS</h3></a>
<a href="reqbook_fetch.php"><h3>VIEW STUDENTS REQUESTS</h3></a>
<h2 style="color:red;">SEARCH OPTIONS</h2><hr/><br/>
<a href="pin.php"><h3>SEARCH WITH PIN</h3></a>
<a href="live_search.php"><h3>SEARCH BOOK</h3></a>



</div>


<br /><br /><br /><br />

</div>
</body>
</html>
