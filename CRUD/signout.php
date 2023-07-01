<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["fullname"]);
header("Location:login.php");
?>