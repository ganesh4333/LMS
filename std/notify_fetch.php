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

<table width="100%" border="1" style="margin-top:50px;margin-bottom:10px;" class="data-tabletwo">
<thead>
<tr>
<th>SI.NO</th>
<th>DATE</th>
<th>NOTIFICATION</th>


</tr>
</thead>
<tbody>
<?php
include("db.php");
include("auth.php");
$count=1;
$sel_query="Select * from updates ORDER BY id ;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["date"]; ?></td>
<td align="center"><?php echo $row["text"]; ?></td>

</tr>

<?php $count++; }?>
</table>
<div class="footer">
<p>COPYRIGHT@17DCME</p>
      
      
       </div>
</body>
</html>