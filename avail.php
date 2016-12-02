<?php include("connection.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Availibility</title>
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
<h1 align="center" style="font-size:36px"><b>Check Availibility</b></h1>
  <form role="form" method="post" action="avail_code.php">
        
     <div class="form-group">
      <label for="addr">Booking Date:</label>
      <input type="date" class="form-control" name="dte" >
    </div>
    <div class="form-group">
    <table>
      <tr><label for="count">Number of Member:</label></tr>
     <tr><td>Adult:</td><td><input type="number" class="form-control" name="atotal" value="1"></td> <td>Child:</td><td><input type="number" class="form-control" name="ctotal" value="0">
      </table>
    </div>
    <div class="form-group">
      <label for="hotel">Hotel:</label>
      <select class="form-control" name="hotel">
      <option>3 star</option>
      <option>4 star</option>
      <option>5 star</option>
      </select>
    </div>
    <button type="submit" class="btn btn-default">Check</button>
  </form>
  </div>
</body>
</html>