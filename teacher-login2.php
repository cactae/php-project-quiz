<?php include 'database.php'; ?>

<?php include_once( './uservalidation.php' ); ?>

<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<title>Quiz_Master</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
			<p class="w3-button w3-medium w3-center"><a href="example_logout.php">Sign out</a></p>
		</div>
		<div class="w3-display-middle w3-padding">
			<h1 class="w3-jumbo w3-animate-top">Students: </h1>
			<hr class="w3-border-grey" style="margin:auto;width:40%">
		<?php
	
		//Get quiz score

			$query = "SELECT * FROM student";

			$names = $mysqli->query($query) or die($mysqli->error.__LINE__);

			while($n = $names->fetch_assoc())
			{
$link_address = 'reset.php';

		echo "<table border='1'>
			<tr>
				<th>Student Name </th>
				<th>Quiz 1 Score </th>
				<th>Quiz 2 Score </th>
				<th>Quiz 3 Score </th>
				<th>Quiz 4 Score </th>
				<th>Quiz 5 Score </th>
			</tr>";


		while($n = $names->fetch_assoc())
		{
			$fullname = $n['last_name'] ."&nbsp;" . $n['first_name'];
			echo "<tr>";
			echo "<td>$fullname</td>";
			echo "<td>" . $n['quiz1_sc'] . "</td>";
			echo "<td>" . $n['quiz2_sc'] . "</td>";
			echo "<td>" . $n['quiz3_sc'] . "</td>";
			echo "<td>" . $n['quiz4_sc'] . "</td>";
			echo "<td>" . $n['quiz5_sc'] . "</td>";

			echo "</tr>";
		}

		echo "</table>";
  




		echo "<br>";
		echo "<br>";
	
		}

// if(isset($_POST['reset'])) {

// $deletequary = "DELETE FROM Session WHERE

// }
?>	
<p class="w3-button w3-medium w3-center"><a href="reset.php">Reset quizzes</a></p>



<!--
<?php
	
/*

echo "<input type='submit' name='submit' value='Submit'>";
		
while($n = $names ->fetch_assoc()){
	
}		

while($n = $names->fetch_assoc()){
  

echo "<select name = 'selection'>";
echo "<option disabled selected value> -- SUBJECT -- </option>";


		$select.='<option value="'.$rs['first_name'].'">'.$rs['first_name'].' '.$n['first_name'].'</option>';
echo 	"<option value='Bio'>Biology</option>";
echo 	"<option value='Geo'>Geology</option>";
echo 	"<option value='Fin'>Finnish</option>";
echo 	"<option value='His'>History</option>";
echo  "</select>";
}
*/
?>

<form method='post' action='teacher-login2.php'>
<input type='submit' name='button1'  value='Reset'>
</form>
-->
</div>



</body>
</html>


