<?php
 include ("database.php");
if(isset($_POST['save']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
  // Check username and password in the database
    $sql = mysqli_query($conn, "SELECT * FROM register WHERE username='$username' AND password='$password'");
    $row = mysqli_fetch_array($sql);

    if(is_array($row))
    {
        // Credentials are correct, store them in session variables
        $_SESSION["username"] = $row['username'];
        $_SESSION["password"] = $row['password'];

        // Redirect to the "insert.php" page
        header("Location: insert.php");
        exit;
    }
    else
    {
        echo "Invalid Username/Password";
    }
}
?>
