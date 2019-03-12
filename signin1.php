<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Quiz Master</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<style>
		body,h1 {font-family: "Raleway", sans-serif}
		body, html {height: 100%}
		.bgimg {
    			background-image: ;
    			min-height: 100%;
    			background-position: center;
    			background-size: cover;
			}
	</style>

	</head>

	<body>
		<div class="bgimg w3-display-container w3-animate-opacity w3-text-black">
			<div class="w3-display-topleft w3-padding-large w3-xlarge">QM</div>
			<div class="w3-display-topright w3-padding w3-small">
				<p class="w3-button w3-medium w3-center"><a href="index.php">Back</a></p>
			</div>
			<div class="w3-display-topmiddle w3-padding">
				<h1 class="w3-jumbo w3-animate-top">Registration</h1>
				<hr class="w3-border-grey" style="margin:auto;width:40%">
			</div>
		</div>
	</td>

<!-- the cell in which form is, starts here -->


	<div class="w3-display-middle w3-padding">
		
		
<?php

// logic code starts here -->

// getting the values back from sign2.php 
$idfname = $_GET['idfname']; 
$idlname=$_GET['idlname'];
$idemail=$_GET['idemail'];

$error = $_GET['id'];
$error1 = $_GET['id1'];
if($error != "")
	{
	echo "<b>Check information below</b><br><br><font color=\"#FF0000\" >$error</font>";
	}
	elseif($error != "")
	{
	echo "user name in correct";
	}
?>




	<form method="post" action="signin2.php"> 
		<p><strong>Please fill in information below <br>
		* - marked are mandatory</strong></p>


		First name *
		<input type="text" name="fname" value = '<?php echo $idfname; ?>' size=200 maxlength=200>

		Last name *
		<input type="text" name="lname" value = '<?php echo $idfname; ?>' size=200 maxlength=200>

		Email *
		<input type="text" name="email" value = '<?php echo $idemail; ?>' size=200 maxlength=200>

		Password *
		<input type="password" name="password"  size=200 maxlength=200>

		<input type="submit" name="submit" value="Register">


	</form>
	
</div>


<!-- the cell in which form is, ends here -->




</tr>
</table>
	</body>
</html>
