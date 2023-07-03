<?php
 
 //session_start();
 //error_reporting(0);
 include('../constant/connect.php');
 
 
if(isset($_POST['save']))
{
    $userid = $_POST['userid'];
    $password = $_POST['password'];
  // Check username and password in the database
    $sql = mysqli_query($con, "SELECT * FROM users WHERE userid='$userid' AND password='$password'");
    $row = mysqli_fetch_array($sql);

    if(is_array($row))
    {
        // Credentials are correct, store them in session variables
        $_SESSION["userid"] = $row['userid'];
        $_SESSION["password"] = $row['password'];

        // Redirect to the "insert.php" page
        header("Location: dashboard.php");
        exit;
    }
    else
    {
        echo "Invalid Username/Password";
    }
}
?>