
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Results Page</title>
</head>
<body>
	<form action="my_form.php" method="Get">
		<input type="text" name="searchBox">
		<br>
		<br>
		<input type="submit" name="Submit">
		
	</form>

	<h2><strong>SECOND SEARCH BOX</strong></h2>
	<form action="results_page.php" method="Get" >
		
		<input type="text" name="searchBox2">
		<input type="submit" name="Submit">
	</form>

	<?php
		// get results data
		$results2output = $_GET['searchBox2'];
		echo $results2output;
	?>

</body>
</html>