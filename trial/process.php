<!--THIS IS TO insert into database-->
<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $fullname = $_POST['fullname'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $gender = $_POST['gender'];
     $dor = $_POST['dor'];
     $amount = $_POST['amount'];
     $paid_date = $_POST['paid_date'];
	 $sql = "INSERT INTO members (fullname,email,password,gender,dor,amount,paid_date)
	 VALUES ('$fullname','$email','$password','$gender','$dor','$amount','$paid_date')";
	 if (mysqli_query($conn, $sql)) {
		//echo "New record created successfully !";
		header("Location: insert.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>