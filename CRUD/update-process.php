<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE members set user_id='" . $_POST['user_id'] . "', 
fullname='" . $_POST['fullname'] . "', 
email='" . $_POST['email'] . "' ,
password='" . $_POST['password'] . "',
gender='" . $_POST['gender'] . "',
dor='" . $_POST['dor'] . "',
amount='" . $_POST['amount'] . "',
paid_date='" . $_POST['paid_date'] . "' 
WHERE user_id='" . $_POST['user_id'] . "'");

$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM members WHERE user_id='" . $_GET['user_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Member Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="http://localhost/CRUD/retrive.php">Member List</a>
</div>
<br>
<input type="hidden" name="user_id" class="txtField" value="<?php echo $row['user_id']; ?>">

<br>
First Name: <br>
<input type="text" name="fullname" class="txtField" value="<?php echo $row['fullname']; ?>">
<br>
email :<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
password<br>
<input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
gender<br>
<input type="text" name="gender" class="txtField" value="<?php echo $row['gender']; ?>">

              
<br>
dor<br>
<input type="date" name="dor" class="txtField" value="<?php echo $row['dor']; ?>">
<br>
amount<br>
<input type="text" name="amount" class="txtField" value="<?php echo $row['amount']; ?>">
<br>
paid_date<br>
<input type="date" name="paid_date" class="txtField" value="<?php echo $row['paid_date']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">



</form>
</body>
</html>

