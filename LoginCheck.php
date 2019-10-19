<?php
	session_start();

	$Name = "";
	$Pass = "";
	$Value = "";

	if (isset($_REQUEST['submit'])) {
		$Name = $_REQUEST['name'];
		$Pass = $_REQUEST['pass'];
		if (empty($Name) == true || empty($Pass) == true) {
			header('location: Login.html');
		}
		else
		{

			$readFile = fopen('data.txt', 'r');
			$readData = fgets($readFile);
			$user = explode("|", "$readData");
			fclose($readFile);
			
			for ($i=0; $i < count($user) ; $i=$i+2) { 
				if ($Name == $user[$i] && $Pass == $user[$i+1]) {
					$Value = true;
					break;
				}
			}
			if ($Value == true) {
				header('location: HomePage.php');
			}
			else
				header('location: Login.html');
		}
	}
	else
		header('location: Login.html');
?>