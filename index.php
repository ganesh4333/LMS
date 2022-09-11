<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome Home</title>
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
<center><p><h1>Welcome <?php echo $_SESSION['username']; ?>!</h1></p></center>
<center><img src="2.jpg" ></img></center>
<br\><br\><br\><br\><br\><br\><br\><br\>
<center><img style="margin-top:150px;"src="down.gif"></img>
<h3 style="color:#ff0066;"><span class="blink_text"><a href="dashboard.php">DASHBOARD</a><span></h3></center>



<br /><br /><br /><br />

</div>

<div class="footer">
<p>COPYRIGHT@17DCME</p>
      
      
       </div>
 </body>




</body>
</html>
