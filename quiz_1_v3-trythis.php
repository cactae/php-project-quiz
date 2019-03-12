<?php include 'database.php'; ?>
<?php  //Set quiz number
	$number = (int) $_GET['n'];
	
	/*
	Get question
	*/
	$query = "SELECT * FROM questions
				WHERE Number = $number";
				
	// Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	$question = $result->fetch_assoc();
	
	/*
	Get choises
	*/
	$query = "SELECT * FROM choises
				WHERE Questions_Number = $number";
				
	// Get result
	$choises = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	$question = $result->fetch_assoc();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>QuizMaster</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="900" border="0" align="center">
<tr>
	<td width="100"><h2>
			<br/>
	       Quiz 1</h2>
	</td>
	<td width="750" colspan="2">
	<div class="section_1">

		</div>	</td>
</tr>
<tr>


<br><br>
</div>
</td>

<!-- the cell in which form is, starts here -->

<td width="750" colspan="2" >
<div class="osa_4">
	<?php // Yrittää luoda kysymykset kysymysnumerosta ?>
	<?php  // for ($question; $question>=10; $question++) : ?>
	<p class="question"><?php echo $question['Text']; ?></p>
	<form method="post" action="quiz_tarkistus.php"></form>
	<ul class="answers">
	<?php //while($row = $choises->fetch_assoc()): 	?>
	<input type="radio" name="q1" value="<?php //echo $row['idChoises'] ?>" id="q1a"><label for="q1a"><?php //echo $row['Text'] ?></label><br/>
	<?php // endwhile; ?>
	<?php // endfor; ?>
	</ul>
	
	<p class="question">2. Question</p>
	<ul class="answers">
	<input type="radio" name="q2" value="a" id="q2a"><label for="q2a">Answer 1</label><br/>
	<input type="radio" name="q2" value="b" id="q2b"><label for="q2b">Answer 2</label><br/>
	<input type="radio" name="q2" value="c" id="q2c"><label for="q2c">Answer 3</label><br/>
	<input type="radio" name="q2" value="d" id="q2d"><label for="q2d">Answer 4</label><br/>
	</ul>
	
	<p class="question">3. Question</p>
	<ul class="answers">
	<input type="radio" name="q3" value="a" id="q3a"><label for="q3a">Answer 1</label><br/>
	<input type="radio" name="q3" value="b" id="q3b"><label for="q3b">Answer 2</label><br/>
	<input type="radio" name="q3" value="c" id="q3c"><label for="q3c">Answer 3</label><br/>
	<input type="radio" name="q3" value="d" id="q3d"><label for="q3d">Answer 4</label><br/>
	</ul>
	
	<p class="question">4. Question</p>
	<ul class="answers">
	<input type="radio" name="q4" value="a" id="q4a"><label for="q4a">Answer 1</label><br/>
	<input type="radio" name="q4" value="b" id="q4b"><label for="q4b">Answer 2</label><br/>
	<input type="radio" name="q4" value="c" id="q4c"><label for="q4c">Answer 3</label><br/>
	<input type="radio" name="q4" value="d" id="q4d"><label for="q4d">Answer 4</label><br/>
	</ul>
	
	<p class="question">5. Question</p>
	<ul class="answers">
	<input type="radio" name="q5" value="a" id="q5a"><label for="q5a">Answer 1</label><br/>
	<input type="radio" name="q5" value="b" id="q5b"><label for="q5b">Answer 2</label><br/>
	<input type="radio" name="q5" value="c" id="q5c"><label for="q5c">Answer 3</label><br/>
	<input type="radio" name="q5" value="d" id="q5d"><label for="q5d">Answer 4</label><br/>
	</ul>
	
	<p class="question">6. Question</p>
	<ul class="answers">
	<input type="radio" name="q6" value="a" id="q6a"><label for="q6a">Answer 1</label><br/>
	<input type="radio" name="q6" value="b" id="q6b"><label for="q6b">Answer 2</label><br/>
	<input type="radio" name="q6" value="c" id="q6c"><label for="q6c">Answer 3</label><br/>
	<input type="radio" name="q6" value="d" id="q6d"><label for="q6d">Answer 4</label><br/>
	</ul>
	
	<p class="question">7. Question</p>
	<ul class="answers">
	<input type="radio" name="q4" value="a" id="q4a"><label for="q4a">Answer 1</label><br/>
	<input type="radio" name="q4" value="b" id="q4b"><label for="q4b">Answer 2</label><br/>
	<input type="radio" name="q4" value="c" id="q4c"><label for="q4c">Answer 3</label><br/>
	<input type="radio" name="q4" value="d" id="q4d"><label for="q4d">Answer 4</label><br/>
	</ul>
	
	<p class="question">8. Question</p>
	<ul class="answers">
	<input type="radio" name="q8" value="a" id="q8a"><label for="q8a">Answer 1</label><br/>
	<input type="radio" name="q8" value="b" id="q8b"><label for="q8b">Answer 2</label><br/>
	<input type="radio" name="q8" value="c" id="q8c"><label for="q8c">Answer 3</label><br/>
	<input type="radio" name="q8" value="d" id="q8d"><label for="q8d">Answer 4</label><br/>
	</ul>
	
	<p class="question">9. Question</p>
	<ul class="answers">
	<input type="radio" name="q9" value="a" id="q9a"><label for="q9a">Answer 1</label><br/>
	<input type="radio" name="q9" value="b" id="q9b"><label for="q9b">Answer 2</label><br/>
	<input type="radio" name="q9" value="c" id="q9c"><label for="q9c">Answer 3</label><br/>
	<input type="radio" name="q9" value="d" id="q9d"><label for="q9d">Answer 4</label><br/>
	</ul>
	
	<p class="question">10. Question</p>
	<ul class="answers">
	<input type="radio" name="q10" value="a" id="q10a"><label for="q10a">Answer 1</label><br/>
	<input type="radio" name="q10" value="b" id="q10b"><label for="q10b">Answer 2</label><br/>
	<input type="radio" name="q10" value="c" id="q10c"><label for="q10c">Answer 3</label><br/>
	<input type="radio" name="q10" value="d" id="q10d"><label for="q10d">Answer 4</label><br/>
	</ul>
	
	
	<div id="submit">
		<input type="submit" value="Submit">
		<input type="hidden" name="number" value="<?php echo $number; ?> />
	</div>
	</form> <!--
	<div id="category1">
		<p><strong>Question 1:</strong>Correct answer is <strong>Answer 1</strong>.</p>
	</div>
	
	<div id="category2">
		<p><strong>Question 2:</strong>Correct answer is <strong>Answer 2</strong>.</p>
	</div>
	
	<div id="category3">
		<p><strong>Question 3:</strong>Correct answer is <strong>Answer 4</strong>.</p>
	</div>
	
	<div id="category4">
		<p><strong>Question 4:</strong>Correct answer is <strong>Answer 1</strong>.</p>
	</div>
	
	<div id="category5">
		<p><strong>Question 5:</strong>Correct answer is <strong>Answer 2</strong>.</p>
	</div>
	
	<div id="category6">
		<p><strong>Question 6:</strong>Correct answer is <strong>Answer 3</strong>.</p>
	</div>
	
	<div id="category7">
		<p><strong>Question 7:</strong>Correct answer is <strong>Answer 4</strong>.</p>
	</div>
	
	<div id="category8">
		<p><strong>Question 8:</strong>Correct answer is <strong>Answer 2</strong>.</p>
	</div>
	
	<div id="category9">
		<p><strong>Question 9:</strong>Correct answer is <strong>Answer 1</strong>.</p>
	</div>
	
	<div id="category10">
		<p><strong>Question 10:</strong>Correct answer is <strong>Answer 3</strong>.</p>
	</div>
	
	<div id="category11">
		<p><strong>You answered all questions correct!</strong>.</p>
	</div>
	
</div> -->
</td> 
      


</tr>
</table>
</body>
</html>
