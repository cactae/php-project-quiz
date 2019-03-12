<?php include_once( './studentvalidation.php' ); ?>

<?php
mysql_connect("127.0.0.1:50508", "azure", "6#vWHD_$"); 
mysql_select_db('quizmdb'); 
$user = $_SESSION['valid_user'];

$testi = mysql_query("
SELECT * FROM student
WHERE email = '$user'");

	while($r=mysql_fetch_array($testi))
		{
		$nimi=$r["first_name"];
		$result1=$r["quiz1_sc"];
		$result2=$r["quiz2_sc"];
		$result3=$r["quiz3_sc"];
		$result4=$r["quiz4_sc"];
		$result5=$r["quiz5_sc"];
		}



//$result1 = mysql_query($testi);

$error = "Quiz already done! Ask you teacher to open it again."
?>

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
				<p class="w3-button w3-medium"><a href="example_logout2.php">Sign out</a></p>
			</div>
			<div class="w3-display-topmiddle w3-padding">
				<h1 class="w3-xxlarge w3-animate-top">Choose a quiz: </h1>
				<hr class="w3-border-grey" style="margin:auto;width:40%">
		
			</div>

			<div class="w3-display-topmiddle w3-padding">
				<br><br><br><br><br><br><br>
				<table class="w3-table w3-xlarge">
					<?php
						if($result1 > 0) { ?>
							<tr><td><strong> Quiz 1 - PHP <?php echo '<span class="error">';?><?php echo $error; ?></span></td></tr>
						<?php }else{ ?> <tr><td><strong><?php echo '<a href="test_one.php?n=1">'; ?>Quiz 1 - PHP</a></td></tr> <?php  } ?>

						<?php
						if($result2 > 0) { ?>
							<tr><td><strong> Quiz 2 - Java <?php echo '<span class="error">';?><?php echo $error; ?></span></td></tr>
					<?php }else{ ?> <tr><td><strong><?php echo '<a href="test_two.php?n=11">'; ?>Quiz 2 - Java</a></td></tr><?php  } ?>

					<?php
						if($result3 > 0) { ?>
							<tr><td><strong> Quiz 3 - HTML <?php echo '<span class="error">';?><?php echo $error; ?></span></td></tr>
					<?php }else{ ?> <tr><td><strong><?php echo '<a href="test_three.php?n=21">'; ?>Quiz 3 - HTML</a></td></tr><?php  } ?>

					<?php
						if($result4 > 0) { ?>
							<tr><td><strong> Quiz 4 - Javascript <?php echo '<span class="error">';?><?php echo $error; ?></span></td></tr>
					<?php }else{ ?> <tr><td><strong><?php echo '<a href="test_four.php?n=31">'; ?>Quiz 4 - JavaSricpt</a></td></tr><?php  } ?>

					<?php
						if($result5 > 0) { ?>
							<tr><td><strong> Quiz 5 - Lemmings <?php echo '<span class="error">';?><?php echo $error; ?></span></td></tr>
					<?php }else{ ?> <tr><td><strong><?php echo '<a href="test_five.php?n=41">'; ?>Quiz 5 - Lemmings </a></td></tr><?php  } ?>
				</table>
			</div>
			</td>
		</div>
	</body>
</html>
