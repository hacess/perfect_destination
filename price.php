<?php include("check.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hotel Price</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"> </script>
</head>

<body>
  <?php
	include("connection.php");
	$r=0;
	if(isset($_POST['hotel']))
	{$h=$_POST['hotel'];
	$sql="select * from price where item='$h'";
	$s=mysql_query($sql);
	if(mysql_num_rows($s))
		{
			while($row=mysql_fetch_array($s))
				{
					$a=$row['amount'];
				
					
				}
		}
		$r=$a;
	}
			                             
?>
<div class="row">
<div class="col-sm-4">
<form action="price.php" method="post">
    <div class="form-group">
      <label for="hotel"><h1 style="font-size:24px" align="center">Hotel:</h1></label>
      <select class="form-control" name="hotel" >
      <option value="budget">Budget</option>
      <option value="2star"> 2 star</option>
      <option value="5star">3-5 star</option>
      </select>
    </div>
<div class="form-group">
<table><tr><td><label for="price">Rate:</label></td><td>
<input type="text" class="form-control" name="price" value="<?php echo $r; ?>" disabled >
</td><td></td><td><input type="submit" class=" btn btn-default" value="check"></td></tr></table></div>
</form>
<div align="center" >
<form action="book.php">
<input type="submit" value="Back" class="btn btn-default">
</form>
</div>
</div>
<?php
	if(isset($_POST['hotel']))
	{$h=$_POST['hotel'];
	$sql="select * from image where name='$h'";
	$s=mysql_query($sql);
	if(mysql_num_rows($s))
		{
			while($row=mysql_fetch_array($s))
				{
					$i=$row['url'];			
				}
		}
	}
			                             
?>
<div class="col-sm-4">
<?php
if(isset($_POST['hotel']))
{
	$h=$_POST['hotel'];
	echo "<h1 style=\"font-size:120px\">$h</h1>";
}
?>
</div>
<div class="col-sm-4">
<img src="<?php echo$i;?>">
</div>
</div>
<?php include("footer.html"); ?>
</body>
</html> 

