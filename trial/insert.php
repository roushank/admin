<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="style.css">
</head>
  <body>
	<form method="post" action="process.php">
        First name:<br>
        <input type="text" class="form-control form-control-lg" name="fullname">
        <br>
        email:<br>
        <input type="text" class="form-control form-control-lg"  name="email">
        <br>
        password:<br>
        <input type="text" class="form-control form-control-lg" name="password">
        <br>
        gender:<br>
        <input type="gender" class="form-control form-control-lg" name="gender">
        <br><br>
        dor:<br>
        <input type="date" class="form-control form-control-lg" name="dor">
        <br><br>
        amount:<br>
        <input type="text" class="form-control form-control-lg"  name="amount">
        <br><br>
        paid_date:<br>
        <input type="date" class="form-control form-control-lg" name="paid_date">
        <br><br>
        <input type="submit" class="form-control form-control-lg" name="save" value="add">
        <a href="retrive.php"> click here to view member list</a>

	</form>
  </body>
</html>