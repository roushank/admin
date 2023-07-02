<?php
 include ("database.php");
if(isset($_POST['save']))
{
    $member_id = $_POST['member_id'];
    $password = $_POST['password'];
  // Check username and password in the database
    $sql = mysqli_query($conn, "SELECT * FROM registermember WHERE member_id='$member_id' AND password='$password'");
    $row = mysqli_fetch_array($sql);

    if(is_array($row))
    {
        // Credentials are correct, store them in session variables
        $_SESSION["member_id"] = $row['member_id'];
        $_SESSION["password"] = $row['password'];

        // Redirect to the "insert.php" page
        header("Location: memberprofile.php");
        exit;
    }
    else
    {
        echo "Invalid Username/Password";
    }
}
?>