<?php
if( isset($_POST['user_login']) )
	{
	define( 'LOGGING_IN', true );
    	include_once( './studentvalidation.php' );
  	process_login();
	} else {
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Student login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
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
				<h1 class="w3-jumbo w3-animate-top">Student login</h1>
				<hr class="w3-border-grey" style="margin:auto;width:40%">
		
			</div>
	
			<div class="w3-display-middle w3-padding">
				<form name="loginform" id="loginform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	
    					Email <input name="username" type="text" id="username" size="200" maxlength="200">
	
    					Password <input name="password" type="password" id="password" size="200" maxlength="200">

    					<input type="submit" name="user_login" value="Login" />
    				</form>
			</div>
		</div>

	</body>
</html>
<?php
}
?>