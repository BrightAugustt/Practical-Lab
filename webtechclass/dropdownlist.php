<?php
  // session start
session_start();

// check if session is set or not
if (isset($_SESSION['name'])){
   $name = $_SESSION['name'];
   $prefer = $_SESSION['prefer'];
} else {
     $name =[ ];
     $prefer  =[ ];
}


//saving user session
$_SESSION['name'] =$name;
$_SESSION['prefer'] =$prefer;
include "database_connection_test.php"
?>

 
<!DOCTYPE HTML>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
</head>
<body>
     //Names of the users
     <label for ="names"> 
     <select name = "Names" id = "names">
          <option value="kwame">Kwame</option>
          <option value="ama">Ama</option>
          <option value="william">William</option>
          <option value="grace">Grace</option>
     </select>
  //Preferences 
     <label for="preferences">Choose your prefernces:</label>

     <select name="prefer" id="listpreference" multiple>
          <option value="football">Football</option>
          <option value="banku">Banku</option>
          <option value="rice">Rice</option>
          <option value="waakye">Waakye</option>
          <option value="driving">Driving</option>
     </select>

     <?php
     // Inserting of values into tables
     $sql = "INSERT INTO quiz_table (my_id, user_id,user_choices)
     VALUES (class_quiz_db)";

     if ($conn->query($sql) === TRUE) {
    
      echo "<br>"."New record created successfully";
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }

     //Selecting from  Database
     $sql = "SELECT my_id, user_id,user_choices FROM quiz_table";
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
     // output data of each row
          while($row = $result->fetch_assoc()) {
          echo "id: " . $row["my_id"]. " - ID: " . $row["user_id"]. " " . $row["user_choices"]."<br>";
          }
     } else {
          echo "0 results";
          }
     ?>
</body>
</html> 


