<?php

	session_start();

	if(isset($_SESSION['username'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome <?= $_SESSION['Uname']?></h1>

	<br>
	<a href="Logout.php">Logout</a>
</body>
</html>

<?php
	}else{
		header('location: Login.html');

}
	

?>
