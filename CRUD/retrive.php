<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM members");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    
		<td>First Name</td>
		
		<td>Email</td>
		<td>DOR</td>
		<td>update</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	   
		<td><?php echo $row["fullname"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["dor"]; ?></td>

		<td><a href="http://localhost/CRUD/update-process.php?user_id=<?php echo $row["user_id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>