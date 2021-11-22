<?php
ob_start();
include "dbConn.php"; 
ob_end_clean();
?>


<?php
if (isset($_POST['delete'])) {
  
  //delete button hit for the word is stored in the delete_term
  $delete_term = $_POST['deleted']; 

  $delete_query = mysqli_query($conn,"DELETE from `practical_lab_table` where `search_term`= '$delete_term'"); // delete query

  if($delete_query)
  {   
      mysqli_close($conn);
       // redirects to all records page
      header("location:practical_form.php");
      exit; 
  }
  else
  {
      // display error message if not delete
      echo "Error deleting record"; 
  }
}

//Closing connection
$conn -> close();
?>


