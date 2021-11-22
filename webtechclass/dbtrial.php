<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab_trial";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



// Adding to a database
if(isset($_POST['Submit'])){

     $search_term = $_POST['search_term'];

     $run = mysqli_query($conn, "INSERT INTO 'practical_lab_table' VALUES ('$search_term')");
}
else{
     echo "New record has been added successfully";
}

//Closing the connection
$conn->close();
?>


<!DOCTYPE HTML>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
</head>
<body>

     <!--Edit word-->
     <form method="POST" action="edit_form.php">

          <br><br>

          <input type="text" name="edit" value="edit">


          <br><br>
     </form>
</body>
</html>

</


