<?php
ob_start();
include "dbConn.php"; 
ob_end_clean();

include "select.php";

$search_term = $_POST["search_term"];


// run when the submit button is hit
if(isset($_POST['submit'])){
  //Adding to a databse

      $add_term = $_POST['search_term'];

      //Inserts the term the user inputs
      $insert = mysqli_query($conn, "INSERT INTO `practical_lab_table`(`search_term`) VALUES ('$add_term')");

      if (!$insert) {
         echo mysqli_error($conn);
      }

     else{
      echo "New record has been added successfully!";
    }

}


$conn-> close();

?>




