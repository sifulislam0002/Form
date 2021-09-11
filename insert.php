<?php

$server = 'localhost';
$username = "root";
$password = "";
$dbname = "insert";

$conn = mysqli_connect($server, $username, $password, $dbname);



if(isset($_POST['submit'])){

	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])){

		$Name = $_POST['name'];
		$Email = $_POST['email'];
		$Mobile = $_POST['mobile'];
		$Address = $_POST['address'];

		$query = "insert into insertdata(Name,Email,Mobile,Address) values('$Name', '$Email', '$Mobile', '$Address')";

		$run = mysqli_query($conn,$query) or die(mysql_error());

	}
	else{
		echo "all fill please";
	}
}
header('location: index.html')

 ?>