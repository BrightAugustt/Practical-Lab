<?php

ob_start();
include "dbConn.php"; 
ob_end_clean();
?>

<?php
   
// when user hits the Update button
if(isset($_POST['Update'])) 
{
   // previous word is stored in edit_term
  // new word is stored in new_term
    $edit_term = $_POST['edited']; 
    $new_term = $_POST['update_term'];

    $edit = mysqli_query($conn,"UPDATE `practical_lab_table` SET `search_term`='$new_term', where `search_term`='$edit_term' ");
  
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:practical_form.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "Error updating record: " . $conn->error;
    }     
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<h3>Update Data</h3>
    <form method="POST">

       <label for ="update">Previous word:</label>
       
       <input id="update" name="update"value="<?php echo $_POST['edited'];  ?>" >
   
       <label for ="update2">Change word to :</label>
      <input type="text" id="update_term" name="update_term" >
      <br><br>
      <input type="submit" name="Update" value="Update">
    </form>

</body>
</html>

