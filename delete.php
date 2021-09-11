<?php

$server = 'localhost';
$username = "root";
$password = "";
$dbname = "insert";

$conn = mysqli_connect($server, $username, $password, $dbname);

$id = $_GET['id'];

$deletequery = "delete from insertdata where id = $id";

$query = mysqli_query($conn, $deletequery);

if($query){
	?>

	<script type="text/javascript">
		alert('deleted successfull');
	</script>

	<?php
	header('location:index.html');
	
}else{
	?>
	<script type="text/javascript">
		alert('not deleted');
	</script>
<?php
}

?>