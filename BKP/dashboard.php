<?php

 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
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


<div class="form">
<p><h1 align="center">Welcome to Dashboard.</h1></p>

<div class="button" align="center">
<h2 style="color:red;">BOOK OPTIONS</h2><hr/><br/>
<a href="insert.php"><h3> ISSUE BOOK</h3></a>
<a href="recover.php"><h3> RECOVER BOOK</h3></a>
<h2 style="color:red;">ADD OPTIONS</h2><hr/><br/>

<a href="newbookinsert.php"><h3>ADD NEW ARRIVALS</h3></a>
<a href="bookinsert.php"><h3>ADD NEW BOOK</h3></a>
<a href="notify.php"><h3>SEND NOTIFICATION TO STUDENTS</h3></a>

<h2 style="color:red;">SEARCH OPTIONS</h2><hr/><br/>
<a href="pin.php"><h3>SEARCH BOOKS ISSUED WITH PIN</h3></a>
<a href="live_search.php"><h3>SEARCH BOOKS ISSUED</h3></a>
<h2 style="color:red;">VIWE OPTIONSS</h2><hr/><br/>
<a href="view.php"><h3>ALL RECORDS</h3></a>

</div>


<br /><br /><br /><br />

</div>
</body>
</html>
