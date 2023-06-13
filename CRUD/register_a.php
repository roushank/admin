<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM register where username='$username'");
if(mysqli_num_rows($sql)>0)
{
    echo "Username Already Exists"; 
	
}
if(isset($_POST['save']))
{
    
     $username = $_POST['username'];
	 $password = $_POST['password'];
        $query="INSERT INTO register(username, password ) VALUES ('$username', '$password')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: login.php?status=success");
    
}

?>