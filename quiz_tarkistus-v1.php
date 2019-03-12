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

	// Check to see score is set 
	if(!isset($_SESSION['score'])) {
		$_SESSION['score'] = 0;
	}
	
	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice']; 
		$next = $number+1;
	
	/*
	*	Get total questions
	*/
	$query = "SELECT * FROM `questions`
		  WHERE Quiz_idQuiz = 1";
	//Get result
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $results->num_rows;

	/*
	*	Get correct choise
	*/
	$query = "SELECT * FROM `choises`
			WHERE Questions_Number = $number AND Correct_answer = 1 AND Q_id = 1";

	// Get results
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	// Get row
	$row = $result->fetch_assoc();

	//Set correct answer
	$correct_choise = $row['idChoises'];

	//Compare
	if($correct_choise == $selected_choice) {
	//Answer correct
		$_SESSION['score']++;
		}


	if($number == $total) {
		header('location: final.php');
		exit();
	}
		else {
			header('location: test_one.php?n='.$next);
		}	
	}
?>