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
                                       <li><a href="index.php">HOME</a></li>

                                       <li><a href="dashboard.php">DASHBOARD</a>
					

                                       

                                       <li><a href="logout.php">LOGOUT</a></li>
                             </ul> 
            </div>

<table width="100%" border="1" style="margin-top:50px;margin-bottom:10px;" class="data-tabletwo">
<thead>
<tr>
<th>SI.NO</th>
<th>ACC NO</th>
<th>BOOK NAME</th>
<th>AUTHOR</th>
<th>BOOK CATEGORY</th>
<th>PUBLISHER</th>
<th>PUBLISHED YEAR</th>
<th>EDITION</th>
<th>NO.OF PAGES</th>
<th>PRICE</th>
<th>RACK</th>
<th>STATUS</th>
<th colspan="2">OPTIONS</th>
</tr>
</thead>
<tbody>
<?php
include("db.php");
include("auth.php");
$count=1;
$sel_query="Select * from bookdb ORDER BY id ;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["no"]; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["author"]; ?></td>
<td align="center"><?php echo $row["bookcategory"]; ?></td>
<td align="center"><?php echo $row["publisher"]; ?></td>
<td align="center"><?php echo $row["pyear"]; ?></td>
<td align="center"><?php echo $row["edition"]; ?></td>
<td align="center"><?php echo $row["pages"]; ?></td>
<td align="center"><?php echo $row["price"]; ?></td>
<td align="center"><?php echo $row["rack"]; ?></td>
<td align="center"><?php echo $row["status"]; ?></td>

<!--<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">a</td>-->

<td><button onclick="window.location.href ='delete.php?id=<?php echo $row["id"]; ?>';"> DEELTE </button><br></td>
<td><button onclick="window.location.href ='edit.php?id=<?php echo $row["id"]; ?>';"> EDIT </button><br></td>
</tr>

<?php $count++; }?>
</table>
<div class="footer">
<p>COPYRIGHT@17DCME</p>
      
      
       </div>
</body>
</html>