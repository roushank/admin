<?php
 
 //session_start();
 //error_reporting(0);
 include('../constant/connect.php');
 
 
if(isset($_POST['save']))
{
    $userid = mysqli_real_escape_string($con,$_POST['userid']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
  // Check username and password in the database
    $sql = mysqli_query($con, "SELECT * FROM users WHERE userid='$userid' AND password='$password'");
    // $row = mysqli_fetch_array($sql);
    //new added code
    $num=mysqli_num_rows($sql);
    if ($num>0) {
      /*echo "login";*/
      $row=mysqli_fetch_assoc($sql);
      $_SESSION["userid"] = $row['userid'];
        $_SESSION["password"] = $row['password'];

        // Redirect to the "dashboard.php" page
        header("Location: dashboard.php");
        exit;
    }
    // new added code ended

    // if(is_array($row))
    // {
    //     // Credentials are correct, store them in session variables
    //     $_SESSION["userid"] = $row['userid'];
    //     $_SESSION["password"] = $row['password'];

    //     // Redirect to the "insert.php" page
    //     header("Location: dashboard.php");
    //     exit;
    // }
    else
    {
        echo "Invalid Username/Password";
    }
}
?>