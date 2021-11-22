<?php
ob_start();
include "dbConn.php"; 
ob_end_clean();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Display records from Database</title>
</head>
<body>
<!-- Table to display the searh term, edit and delete --->
<table border="2">
  <tr>
    <td>Search Term</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

  if(isset($_POST['search'])){ 

    $find = $_POST['search_term']; //input  

  //select search term which equals to find
  // find = fetch input from database

  $records = "SELECT * FROM practical_lab_table where search_term='$find' " ;

  $results = $conn->query($records);

  if ($results -> num_rows > 0){

      while ($data = mysqli_fetch_array($results)){
      ?>
        <tr>
          <td> <?php echo $data['search_term']; ?></td>
                 <!-- Edit button -->
          <td><form method="POST" action="edit.php">
          <input type="hidden" name="edited" value="<?php  $_POST['search_term'];  ?>">
        <input type="submit" name="edit" value="Edit">
      </form></td>
         
             <!-- Delete button -->
          <td><form method="POST" action="delete.php">
          <input type="hidden" name="deleted" value="<?php  $_POST['search_term'];  ?>">
        <input type="submit" name="delete" value="Delete">
      </form></td>

        </tr>  
      <?php
      }

  }  
} 
 

?>

</table>
</body>
</html>
