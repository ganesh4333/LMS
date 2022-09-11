<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/styles2.css" />
<link rel="stylesheet" href="css/tstyle.css" />
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

<table width="100%" border="1" class="data-tabletwo">
<thead>
<tr>
<th>PIN</th>
<th>NAME</th>
<th>BOOK NAME</th>
<th>BUNDLE NO</th>
<th>AUTHOR</th>
<th>TAKEN IN</th>
</tr>
</thead>
<tbody>
<?php
include 'cone.php';
include("auth.php");
$count=1;
$sel_query="Select * from libt ORDER BY id ;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $row["Std_PIN"]; ?></td>
<td align="center"><?php echo $row["Std_NAME"]; ?></td>
<td align="center"><?php echo $row["Book_NAME"]; ?></td>
<td align="center"><?php echo $row["Book_BUNDLE_NO"]; ?></td>
<td align="center"><?php echo $row["Book_AUTHOR"]; ?></td>
<td align="center"><?php echo $row["DATE"]; ?></td>
</tr>

<?php  }?>
</body>
</html>