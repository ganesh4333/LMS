<?php

 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
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
                                       <li><a href="std_index.php">HOME</a></li>

                                       <li><a href="std_dashboard.php">DASHBOARD</a>
					

                                       

                                       <li><a href="std_logout.php">LOGOUT</a></li>
                             </ul> 
            </div>


<div class="form">
<p><h1 align="center">Welcome to Dashboard.</h1></p>

<div class="button" align="center">
<!--<a href="std_new_books.php"><h3> New Aravels</h3></a></br>-->
<a href="std_live_search.php"><h3>SEARCH BOOK</h3></a>
<a href="serach_with_dept.php"><h3>SEARCH BY DEPARTMENT NAME</h3></a>
<a href="notify_fetch.php"><h3>NOTIFICATIONS</h3></a>
<a href="std_reqbook.php"><h3>SUGGEST BOOK TO LIBRARY</h3></a>

</div>


<br /><br /><br /><br />

</div>
<div class="footer">
<p>COPYRIGHT@17DCME</p>
      
      
       </div>
</body>
</html>
