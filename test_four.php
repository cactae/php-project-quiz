<?php include 'database.php'; ?>

<?php include_once( './studentvalidation.php' ); ?>

<?php
$user = $_SESSION['valid_user'];

$testi = mysql_query("
SELECT * FROM student
WHERE email = '$user'");

	while($r=mysql_fetch_array($testi))
		{
		$nimi=$r["first_name"];
		}
?>
<?php

	//Set question number
	$number = (int) $_GET['n'];


	/*
	* 	Get Questions
	*/
	

	$query = "SELECT * FROM questions
		  WHERE Number = $number AND Quiz_idQuiz = 4";

	//Get result

	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$question = $result->fetch_assoc();

	/*
	* 	Get Choises
	*/
	

	$query = "SELECT * FROM choises
		  WHERE Questions_Number = $number AND Q_id = 4";

	//Get result

	$choises = $mysqli->query($query) or die($mysqli->error.__LINE__);

	

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Quiz Master</title>
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
		<header>
			<div class"">
				<h1>Quiz Master - Quiz 4 - JavaScript</h1>
		
		
			</div>
		</header>
		<main>
			<div class="current">Question <?php echo $question['Qnumber']; ?> of 10</div>
				<p class="question">
					<?php echo $question['Text'];  ?>	
				</p>
				<form method="post" action="quiz_tarkistus_four-v1.php">
					<ul class="">
						<?php while($row = $choises->fetch_assoc()): ?>
						<input name="choice" type="radio" value="<?php echo $row['idChoises']; ?>" /><?php echo $row['Text']; ?></label><br>
						<?php endwhile; ?> 
				
					</ul>
					<input type="submit" value="Submit" />
					<input type="hidden" name="number" value="<?php echo $number; ?>" />
				</form>
		</main>
		<footer>
			<div class="w3-display-middle">
				Copyright &copy; 2017, Quiz Master
			</div>
		</footer>
	</body>
</html>