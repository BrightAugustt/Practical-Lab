<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Work Space</title>
</head>
<body>
	<h1><strong>WELCOME TO THE WORK PAGE</strong></h1>

	<?php

	require "my_add_functions.php";

	include "other_functions.php";

	echo "Value for the addnumbers: ". Addnumbers(6,7). " ";

	

	echo "Value for multiby100: ". mulby100(6). " ";
	?>

</body>
</html>