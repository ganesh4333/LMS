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
<form action=""  method="post" align="center" >
<input type="hidden" name="new" value="1" /></input>
<select name="branch" style="width:100px;">
<option value="COMPUTER ENGINEERING">COMPUTERS</option> 
<option value="ELECTRONICS & COMMUNICATION ENGG">ELECTRONICS</option> 
<option value="ELECTRICAL & ELECTRONICS ENGG">ELECTRICAL</option> 
<option value="MECHANICAL ENGINEERING">MECHANICAL</option> 
<option value="CIVIL ENGINEERING">CIVIL</option> 
<option value="GENERAL">GENERAL</option> 
</select>
<div class="submitbtn">
<input type="submit" name="" placeholder="enter your msg">
</div>
</form>
<table width="100%" border="1" style="margin-top:50px;margin-bottom:10px;" class="data-tabletwo">
<thead>
<tr>
<th>SI.NO</th>
<th>ACC NO</th>
<th>BOOK NAME</th>
<th>AUTHOR</th>
<th>PUBLISHER</th>
<th>BOOK CATEGORY</th>
<th>PUBLISHED YEAR</th>
<th>EDITION</th>
<th>NO.OF PAGES</th>
<th>PRICE</th>
<th>RACK</th>
<th>STATUS</th>

</tr>
</thead>
<tbody>
<?php
include("db.php");
include("auth.php");

 if(isset($_POST['new']) && $_POST['new']==1)
{
	$br=$_REQUEST['branch'];


$count=1;
$sel_query="Select * from bookdb  WHERE branch='$br' ;";
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



</tr>

<?php $count++; }}?>
</table>
<div class="footer">
<p>COPYRIGHT@17DCME</p>
      
      
       </div>
</body>
</html>