<?php include 'database.php'; ?>
<?php 
// copying the value of varibale from sign1.php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$pass=$_POST["password"];

$check = 1;

//  check if the fields are empty
$error = "";
if($fname == "")
{
$error = $error."First name!<br>";
$check = 0;
}
if($lname == "")
{
$error = $error."Last name!<br>";
$check = 0;
}
if($email == "")
{
$error = $error."Email!<br>";
$check = 0;
}

// if password is empty or if other field is empty (then also password needs to be re-entered)

if($pass == "" || $check == 0)
{
$error = $error."Password!<br>";
}

$sql = "INSERT INTO student (first_name, last_name, email, password)
			 VALUES ('$fname', '$lname', '$email', '$pass')";
if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Quiz Master</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<table width="900" border="0" align="center">
			<tr>
				<td width="150"></td>
				<td width="750" colspan="2">
		<div class="osa_3">
			<p>
			<br/>
	        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quiz Master</p>
		</div>	</td>
			</tr>
		
		<tr>
    			<td width="150" valign="top">
				<div class="osa_1">
					<p>
						<center>
							<?php include("../Desktop/links.php");	?>	
						</center>
					</p>

					<br><br>
				</div>
			</td>

<!-- the cell in which form is, starts here -->
	<td width="750" colspan="2" >
		<div class="osa_4">

			<p><b>Information below was saved</b></p>

			<table>
				</tr>
				<tr>
					<td>First name </td>
					<td><?php echo " $fname"; ?></td>
				</tr>
				<tr>
					<td>Last name </td>
					<td><?php echo " $lname"; ?></td>
				</tr>
				<tr>
					<td>email </td>
					<td><?php echo " $email"; ?></td>
				</tr>

				<tr>
					<td>Password</td>
					<td><?php echo " $pass"; ?></td>

				</tr>

			</table>

			<br><br>
			<strong><a href="student-login.php">Login from here</a></strong>
			<br><br>
			<strong><a href="index.php">Return to the homepage</a></strong>

		</div>
	</td>
<!-- the cell in which form is, ends here -->
			</tr>
		</table>
	</body>
</html>


