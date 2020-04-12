<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>--Experimenta aqui</title>

	<!-- Bootstrap CDN-->

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

	<!--Modified Bootstrap-->
	<link rel="stylesheet" href="./css/bootstrap.min.css" />


	<!-- Font Awesome CDN -->
	<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>

	

	<!--Custom Stylesheet-->
	 <link rel="stylesheet" href="./css/custom.css" /> 

	

	<!--css Date Picker-->
	<link rel="stylesheet" href="css/bootstrap-datepicker.standalone.css" />

</head>

<body>
	<h2>Sign up: Error handlers </h2>

	<form action="scripts/signup.php" method="POST">
		<?php 
			if (isset($_GET['first'])) {
				$first = $_GET['first'];
				echo '<input type="text" name="first" placeholder="First Name" value="'.$first.'">'; 
				echo '<br>';
			}
			else {
				echo '<input type="text" name="first" placeholder="First Name">';
				echo '<br>';
			}

			if (isset($_GET['last'])) {
				$last = $_GET['last'];
				echo '<input type="text" name="last" placeholder="Last Name" value="'.$last.'">'; 
				echo '<br>';
			}
			else {
				echo '<input type="text" name="last" placeholder="Last Name">';
				echo '<br>';
			}
		?>

		<input type="text" name="email" placeholder="e-mail">
		<br>

		<?php 
			if (isset($_GET['uid'])) {
				$uid = $_GET['uid'];
				echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">'; 
				echo '<br>';
			}
			else {
				echo '<input type="text" name="uid" placeholder="Username">';
				echo '<br>';
			}
		
		?>

		<input type="password" name="pwd" placeholder="Password">
		<br>
		<button type= "submit" name="submit">Sign Up</button>

	</form>
<?php
	/*
	//Obtain full url
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if (strpos($fullUrl, "signup=empty") == true) {

		echo "<p class='error'>No has llenado todos los campos</p>";
		exit();
	}
	else if (strpos($fullUrl, "signup=char") == true) {

		echo "<p class='error'>¡Has usado caracteres inválidos!</p>";
		exit();
	}

	else if (strpos($fullUrl, "signup=invalidemail") == true) {

		echo "<p class='error'>Correo no válido</p>";
		exit();
	}
	elseif (strpos($fullUrl, "signup=success") == true) {

		echo "<p class='success'>Has sido registrado</p>";
		exit();
	}
	*/

	if (!isset($_GET['signup'])) {
		exit();
	}
	else {
		$signupCheck = $_GET['signup'];

		if ($signupCheck == "empty") {
			echo "<p class='error'>No has llenado todos los campos</p>";
			exit();
		}
		elseif ($signupCheck == "char") {
			echo "<p class='error'>¡Has usado caracteres inválidos!</p>";
			exit();
		}
		elseif ($signupCheck == "invalidemail") {
			echo "<p class='error'>Correo no válido</p>";
			exit();
		}
		elseif ($signupCheck == "success") {
			echo "<p class='success'>Has sido registrado</p>";
			exit();
		}
	}
?>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	<!--Obligatorio que la libreria datepicker este en el footer justo despues de los js de bootstrap para no causar conflicto-->
	
	<script src="js/bootstrap-datepicker.min.js"> </script>
	
	<script src="locales/bootstrap-datepicker.es.min.js"></script>
	
	<!-- js para personalizar -->
	<script src="js/apps.js"></script>






</body>
</html>