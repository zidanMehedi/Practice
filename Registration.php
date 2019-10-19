<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<center>
		<form action="RegCheck.php" method="POST">
			<div>
				<h1>Registration</h1>
				<span>
					<?php 
					echo ""; 
					?>	
				</span>
			<table border="0px" align="center" width="30%">
				<tr>
					<td>Name</td>
					<td>:&nbsp;<input type="text" name="name"></td>
				</tr>
				<tr><td></td></tr>
				<tr>
					<td>Email</td>
					<td>:&nbsp;<input type="text" name="email"></td>
				</tr>
				<tr><td></td></tr>
				<tr>
					<td>Date of Birth</td>
					<td>:&nbsp;<input type="date" name="dob"></td>
				</tr>
				<tr><td></td></tr>
				<tr>
					<td>Contact No</td>
					<td>:&nbsp;<input type="text" name="contNo"></td>
				</tr>
				<tr><td></td></tr>
				<tr>
					<td>Address</td>
					<td>:&nbsp;<textarea name="address" id="" cols="21" rows="3"></textarea></td>
				</tr>
				
				<tr>
					<td></td>
				</tr>
				<tr>
					<td>Blood Group</td>
					<td>
						&nbsp;
						<select name="blood">
							<option value=""></option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
						</select>
					</td>
				</tr>
				<tr><td></td></tr>
				<tr>
					<td>Password</td>
					<td>:&nbsp;<input type="password" name="pass"></td>
				</tr>
				<tr><td></td></tr>
				<tr>
					<td>Option</td>
					<td>: &nbsp;
						<input type="checkbox" name="option[]" value="A">A &ensp;
						<input type="checkbox" name="option[]" value="B">B &ensp;
						<input type="checkbox" name="option[]" value="C">C
					</td>
				</tr>
				<tr><td></td></tr>
				<tr>
					<td>Gender</td>
					<td>: &nbsp;
						<input type="radio" name="gender" value="Male">Male
						&emsp;
						<input type="radio" name="gender" value="Female">Female
					</td>
				</tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr></tr>
				<tr><td></td></tr>
				<tr></tr>
				<tr></tr>
				<br>
				<br>
				<br>

				<tr align="center">
					<td colspan="2"><input type="submit" name="reg" value="Register" align="center"></td>
				</tr>
			</table>
		</div>
		</form>
	</center>
</body>
</html>