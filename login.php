   <?php
if(isset($_GET['err']))
{
	if($_GET['err']==1)
	{
		echo "<script>alert(\"Invalid Email 0r Password\")</script>";
	}
}
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
<title>Login</title>
</head>
<body>
<?php include("header.html");?>
<div class="row">
<div class="col-sm-4">

</div>
<div class="col-sm-4">
<div class="contact-form">
<h1 align="center" style="font-size:36px"><b>LOGIN</b></h1>
  <form role="form" method="post" action="login_code.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Log in</button>
  </form>
  </div>
  </div> 
</div>
<?php include("footer.html");?>
</body>
</html>