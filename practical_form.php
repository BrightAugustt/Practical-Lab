<!DOCTYPE html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <h1>Welcome!</h1>
  <h6>SEARCH FOR WORD</h6>


  <!-- ADD FORM -->
  <form method="POST" action="insert.php">

  <label for="search_term">Add Word to Database: </label>
  <input type="text" id="search_term" name="search_term">
  
  <br><br>
    <br><br>
    <input type="submit" name="submit" value="Submit">

    <br><br>
</form>

    <form method="POST" action="select.php">

    <label for="search_term">Search for word in Database: </label>
  <input type="text" id="search_term" name="search_term">
  
  <br><br>
    <br><br>
    <input type="submit" name="search" value="Search">

    <br><br>
    </form>



</body>

</html>