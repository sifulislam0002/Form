<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="js/jquery.throttle.min.js">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<div class="container">
			<br>
			<h1 class="text-center" id="msg">Update data</h1>
			<br>
			<div class="col-lg-4 m-auto">
				<form action="" method="post" id="myform">
					<?php
					$server = 'localhost';
					$username = "root";
					$password = "";
					$dbname = "insert";
					$conn = mysqli_connect($server, $username, $password, $dbname);
					$id = $_GET['id'];
					$q = "select * from insertdata where id = $id";
					$query = mysqli_query($conn,$q);
					$result = mysqli_fetch_assoc($query);
					if(isset($_POST['submit'])){
						if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])){
							$Name = $_POST['name'];
							$Email = $_POST['email'];
							$Mobile = $_POST['mobile'];
							$Address = $_POST['address'];
							$updatequery = "UPDATE `insertdata` SET `id`=[value-1],`Name`=[value-2],`Email`=[value-3],`Mobile`=[value-4],`Address`=[value-5] WHERE 1" ;
							// $run = mysqli_query($conn,$updatequery);
							if($query){
					?>
					<script type="text/javascript">
						alart("successfull");
					</script>
					<?php
					header('location: index.html');
						}
						else{
					?>
					<script type="text/javascript">
						alart ("not successfull");
					</script>
					<?php
						}
					}
					else{
						echo "all fill please";
					}
					}
					?>
					<div class="form-group">
						<label>Name:</label><input type="text" name="name" class="form-control" required="" placeholder="Enter Your Name" value="<?php echo $result['Name'] ?>">
					</div>
					<div class="form-group">
						<label>Email:</label><input type="text" name="email" class="form-control" required="" placeholder="Enter Your Mail" value="<?php echo $result['Email'] ?>">
					</div>
					<div class="form-group">
						<label>Mobile Number:</label><input type="text" name="mobile" class="form-control" required="" placeholder="+8801" value="<?php echo $result['Mobile'] ?>">
					</div>
					<div class="form-group">
						<label>Address:</label><input type="text" name="address" class="form-control" placeholder="Enter Your Address" value="<?php echo $result['Address'] ?>">
					</div>
					<button type="submit" name="submit" id="submit" class="btn btn-success">Update</button>
				</form>
			</div>
		</div>
	</body>
</html>