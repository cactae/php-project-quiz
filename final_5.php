<?php include 'database.php'; ?>
<?php include_once( './studentvalidation.php' ); ?>

<?php
	$user = $_SESSION['valid_user'];
	$fscore = $_SESSION['score'];

	$testi = mysql_query("
	SELECT * FROM student
	WHERE Id = '$user'");

?>

<?php


		$sql = "UPDATE student 
			 SET quiz5_sc = '$fscore'
			 WHERE email = '$user'";
		if ($mysqli->query($sql) === TRUE) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . $mysqli->error;
		}

?>

<!doctype html>
<html>
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
	
		<main>
			<div class="">
				<h2>You have completed the quiz</h2>
				<p>Final score: <?php echo $_SESSION['score']; ?></p>
				<a href="student-login2.php" class="">Back to quizzes</a>
			</div>
		</main>

		<?php $_SESSION['score'] = 0; ?>

	</body>
</html>