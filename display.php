<?php

$server = 'localhost';
$username = "root";
$password = "";
$dbname = "insert";

$conn = mysqli_connect($server, $username, $password, $dbname);

$q = "select * from insertdata ";
$query = mysqli_query($conn,$q);
$result = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) > 0){
	while ($result = mysqli_fetch_assoc($query)) {
?>
<tr>
	<td> <?php echo $result['id'] ?> </td>
	<td> <?php echo $result['Name'] ?> </td>
	<td> <?php echo $result['Email'] ?> </td>
	<td> <?php echo $result['Mobile'] ?> </td>
	<td> <?php echo $result['Address'] ?> </td>

	<td><a href="update.php?id=<?php echo $result['id']; ?>" ><i class="far fa-edit"></i></a></td>

	<td><a href="delete.php?id= <?php echo $result['id']; ?>" ><i class="far fa-trash-alt"></i></a></td>

</tr>
<?php
}
}
?>