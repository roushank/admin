<?php
// $con=mysqli_connect("localhost","root","","scms");
// if(!$con)
// {
//     die('connection failed'.mysqli_connect_error());
// }
$servername='localhost';
$username='root';
$password='';
$dbname = "scms";
$con=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
