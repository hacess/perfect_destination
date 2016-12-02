<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/js/bootstrap.min.js"></script>
  <script type="text/javascript">
 function pcheck()
  {
	  var pwd= document.getElementById("p1").value;
	  var cpwd=document.getElementById("p2").value;
	  if(pwd!=cpwd)
	  {
		  alert("password not same");
	  }
	  
  }
   </script>
<title>Register</title>
</head>
<body>
<?php include("header.html");?>
<div class="row">
<div class="col-sm-4">

</div>
<div class="col-sm-4">
<h1 align="center" style="font-size:36px"><b>REGISTER</b></h1>
<div class="contact-form">
  <form role="form" method="post" action="registercode.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password" id="p1">
    </div>
    <div class="form-group">
      <label for="pwd2">Confirm Password:</label>
      <input type="password" class="form-control" name="pwd2" id="p2" placeholder="Enter password Again" onChange="pcheck()">
    </div>
    <div class="form-group">
      <label for="addr">Address:</label>
      <input type="text" class="form-control" name="addr" placeholder="Enter Address">
    </div>
    <div class="form-group">
      <label for="num">Contact Number:</label>
      <input type="number" class="form-control" name="num" placeholder="Enter contact number">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
  </div>
</div>
<?php include("footer.html");?>
</body>
</html>