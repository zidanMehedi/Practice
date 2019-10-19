<?php

$name = "";
$email = "";
$contNo =  "";
$dob = "";
$address = "";
$gender = "";
$bg = "";
$opt = "";
$pass = "";

if(isset($_REQUEST['reg']))
{
	session_start();
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$contNo =  $_REQUEST['contNo'];
	$dob = $_REQUEST['dob'];
	$address = $_REQUEST['address'];
	$gender = $_REQUEST['gender'];
	$bg = $_REQUEST['blood'];
	//$opt = $_REQUEST['option'];
	$pass = $_REQUEST['pass'];
	$show = "";

	if (empty($_REQUEST['name']) == true || empty($_REQUEST['email']) == true || empty($_REQUEST['contNo']) == true || empty($_REQUEST['dob']) == true || empty($_REQUEST['address']) == true || empty($_REQUEST['pass']) == true || empty($_REQUEST['gender']) == true || empty($_REQUEST['blood']) == true)
	{
		$show = "Please provide all Informations";
		header('location: Registration.php');
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		//setcookie('msg',$show, time()+60, "/");
		$show = "Please provide valid Email";
		header('location: Registration.php');
	}
	elseif (!preg_match("/^[0-9]*$/", $contNo)) {
		if (strlen($contNo) != 11) {
				$show = "Please provide valid Phone Number";
				header('location: Registration.php');
		}
	}
	else
		
		{
			$_SESSION['Uname'] = $name;
			$_SESSION['Upass'] = $pass;
			$_SESSION['Uemail'] = $email;
			$_SESSION['Udob'] = $dob;
			$_SESSION['Uaddress'] = $address;
			$_SESSION['Ugender'] = $gender;
			$_SESSION['Ucon'] = $contNo;
			//$_SESSION['opt'] = $opt;
			$_SESSION['Ubg'] = $bg;

			$Uname = $_SESSION['Uname'];
			$Upass = $_SESSION['Upass'];
			$Uemail = $_SESSION['Uemail'];
			$Udob = $_SESSION['Udob'];
			$Uaddress = $_SESSION['Uaddress'];
			$Ugender = $_SESSION['Ugender'];
			$Ucon = $_SESSION['Ucon'];
			$Ubg = $_SESSION['Ubg'];

			$regFile = fopen('regData.txt', 'a');
			fwrite($regFile, "$Uname"."|"."$Upass"."|"."$Uemail"."|"."$Udob"."|"."$Uaddress"."|"."$Ugender"."|"."$Ucon"."|"."$Ubg\n\n\n");
			fclose($regFile);

			$loginFile = fopen('data.txt', 'a');
			fwrite($loginFile, "$Uname"."|"."$Upass"."|");
			fclose($loginFile);

			setcookie('cUserName', $_REQUEST['name'], time()+30 , '/');

			header('location: Login.html');
		}
}


?>