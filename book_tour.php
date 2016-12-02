<?php include("connection.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Book</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"> </script>
</head>

<body>
<?php include("header.php"); ?>
<div class="row">
<div class="col-sm-4">
</div>
<div class="col-sm-4">
<div class="contact-form">
<h1 align="center" style="font-size:36px"><b>Book Now</b></h1>
  <form role="form" method="post" action="tour_code.php">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['user']['name'];?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['user']['email'];?>">
    </div>
    <div class="form-group">
      <label for="num">Number:</label>
      <input type="number" class="form-control" name="num" value="<?php echo $_SESSION['user']['num'];?>">
    </div>
    <div class="form-group">
      <label for="addr">Address:</label>
      <input type="text" class="form-control" name="addr" value="<?php echo $_SESSION['user']['addr'];?>">
    </div>
    <div class="form-group">
    <table>
      <tr><label for="count">Number of Member:</label></tr>
     <tr><td>Adult:</td><td><input type="number" class="form-control" name="atotal" value="1"></td> <td>Child:</td><td><input type="number" class="form-control" name="ctotal" value="0">
      </table>
    </div>
    <?php
	$sql="select * from price where item='tour'";
	$s=mysql_query($sql);
	if(mysql_num_rows($s))
	{
		while($row=mysql_fetch_array($s))
		{
			$r=$row['amount'];
		}
	}
	?>
    <div class="form-group">
	<label for="price">Rate:</label>
      <input type="text" class="form-control" name="price" value="<?php echo $r ; ?>" disabled>
    </div>
     <div class="form-group">
      <label for="addr">Date:</label>
      <input type="date" class="form-control" name="dte"  >
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Book </button>
  </form>
  </div>
</body>
</html>