<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Creation</title>
</head>
<body>
	<form action="my_form.php" method="GET">
		<input type="text" name="searchBox">
		<br>
		<br>
		<input type="submit" name="Submit">
		
	</form>

	<h2><strong>SECOND SEARCH BOX</strong></h2>
	<form action="results_page.php" method="GET">
		
		<input type="text" name="searchBox2">
		<input type="submit" name="Submit">
	</form>

	<form action="my_form.php" method="POST">

		 <p> <label for="password">Password</label>
                <input type="password" placeholder="Enter password" id="password" name="password">
                <small id='passwordError'></small>
        </p>

        <p>
        <label for="password2">Confirm Password</label>
                <input type="password" placeholder="Confirm Your Password" id="password2" name="password2">
                <small id='password2Error'></small>
        </p>
        <small id='success'></small>
            <button type="submit" id='submitBtn' name="submit">Submit</button>

	</form>

	<?php 

		//check for numbers
	$regex = "/[^0-9]+$/";
	if (isset($_GET['Submit'])) {
		
		if (!preg_match($regex,$_GET['searchBox'])) {
			
			$output = "correct input";

		}else{
			$output = "Enter characters of numbers only.";
		}
	}
		
		// get form data
		$form1Input = $_GET['searchBox'];
		echo $form1Input;
		if (isset($output)) {
			echo $output;
		}

		// Check if passwords entered are the same
		if(isset($_POST["submit"])){
		    if ($_POST['password']!= $_POST['password2'])
		    {
		        echo("Password did not match! Try again. ");
		    }else{
		        echo("Passwords are the same, proceed ");
		    }

		}

	?>
</body>
</html>