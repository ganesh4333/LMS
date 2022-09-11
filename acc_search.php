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




<form action=""  method="post" align="center">
<input type="hidden" name="new" value="1" />
<input type="textbox" name="pno" required placeholder="ENTER ACC NO:"><br \><br \>

<div class="submitbtn">
<input type="submit" name="" >
</div>
</form>


<table width="1%" border="1" class="data-tabletwo">
<thead>
<tr>
<center><th>SI.NO</th></center>
<center><th>PIN</th><center>
<center><th>ACC NO</th></center>
<center><th>BOOK NAME</th></center>
<center><th>AUTHOR</th></center>
<center><th>BOOK CATEGORY</th></center>
<center><th>PUBLISHER</th></center>
<center><th>PUBLISHED YEAR</th></center>
<center><th>EDITION</th></center>
<center><th>NO.OF PAGES</th></center>
<center><th>PRICE</th></center>
<center><th>RACK</th></center>
<center><th>TAKEN DATE&TIME</th></center>
</tr>
</thead>
<tbody>


<?php
include 'db.php';
include("auth.php");
$accno="";
if(isset($_POST['new']) && $_POST['new']==1)
{
$count=1;
$pno=strtoupper($_REQUEST['pno']);
$sel_query="Select * from bookdb WHERE no='$pno';";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<tr align="center">
<td align="center"><b><?php echo $count;?></b></td>
<td align="center"><b><?php echo $row["pin"];?></b></td>
<td align="center"><b><?php echo $row["no"];?></b></td>
<td align="center"><b><?php echo $row["name"];?></b></td>
<td align="center"><b><?php echo $row["author"];?></b></td>
<td align="center"><?php echo $row["bookcategory"]; ?></td>
<td align="center"><?php echo $row["publisher"]; ?></td>
<td align="center"><?php echo $row["pyear"]; ?></td>
<td align="center"><?php echo $row["edition"]; ?></td>
<td align="center"><?php echo $row["pages"]; ?></td>
<td align="center"><?php echo $row["price"]; ?></td>
<td align="center"><?php echo $row["rack"]; ?></td>
<td align="center"><b><?php echo $row["date"];?></b></td>

<?php $count++; }?>
<?php if($count!=1){
	
	echo '<h3 style="color:#ff0066;"><span class="blink_text">DATA FOUND<span></h3>';
}
else{echo '<h3 style="color:#ff0066;"><span class="blink_text">NO DATA FOUND<span></h3>';}
 ?>









<?php  }?>
</tr>

</tbody>





<body>
</html>