<?php include 'database.php'; ?>

<?php
include_once( './uservalidation.php' );
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Quiz_Master</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<h1>RESET  </h1>
<br>
	<p><b>Please select the student whose quiz you want to reset as well as the quiz itself.
<br>Afterwards select the the reset button to rest and reopen the quiz for the sele´cted student.</b></p>
	<div class="">
	<br>
	<h4>Select Student</h4>
		<?php
			$query = "SELECT * FROM student";

			$names = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
					while($n = $names->fetch_assoc())
		{
$select = "<select name = 'selection'><option disabled selected value> -- STUDENT -- </option>";

							while($n = $names->fetch_assoc())
		{
		$fullname = $n['last_name'] ."&nbsp;" . $n['first_name'];
		$select.= '<option value="'.$n['email'].'">'.$fullname.' '.$n['email'].'</option>';



		}
$select.='</select>';
echo '<form method="post" action="reset.php">';
echo $select;
$selected = $_POST['selection'];
$results = mysql_query(
"SELECT *
FROM student
WHERE email = '$selected' ");


		}

		?>
<br>
	<h4>Select Quiz</h4>


		
<select name = "quiz">
	<option value='1'> Quiz 1</option> 
	<option value='2'> Quiz 2</option> 
	<option value='3'> Quiz 3</option> 
	<option value='4'> Quiz 4</option> 
	<option value='5'> Quiz 5</option> 
</select>

<form method="POST" action='reset.php'>





	



	</div>
	<br>



<input type="submit" name="button1"  value="Reset">
</form>
	<?php
	$sql1 = "UPDATE student SET quiz1_sc = NULL WHERE email = '$selected'";
		$sql2 = "UPDATE student SET quiz2_sc = NULL WHERE email = '$selected'";
		$sql3 = "UPDATE student SET quiz3_sc = NULL WHERE email = '$selected'";
		$sql4 = "UPDATE student SET quiz4_sc = NULL WHERE email = '$selected'";
		$sql5 = "UPDATE student SET quiz5_sc = NULL WHERE email = '$selected'";
		
		
		
	$quiz=$_POST['quiz'];
	// this is here to confirm the change. If you want to see the changed result, you need to search the student again.
   //$sql = "UPDATE student SET '$quiz' = NULL WHERE email = '$selected' ";
	

if (isset($_POST['button1']))
{
	if ($quiz == 1) {
			mysql_query($sql1);
		}
		if ($quiz == 2) {
			mysql_query($sql2);
		}
		if ($quiz == 3) {
			mysql_query($sql3);
		}
		if ($quiz == 4) {
			mysql_query($sql4);
		}
		if ($quiz == 5) {
			mysql_query($sql5);
		}

   echo $quiz . " grade from user " . $selected . " has been resetted.";
}


?>
	</body>
</html>