
<?php

  if(isset($_GET['page']))
      $page = $_GET['page'];
  else 
      $page = 'toDoList';


  $inserted = include('./dist/views/' . $page . '.php');
  if(!$inserted)
      echo "Requested page not found aha";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script async src="./dist/bundle.js"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
 <script src="https://kit.fontawesome.com/b6b1bd1320.js" crossorigin="anonymous"></script>
  
  <title>KrisjanisNimanis</title>
</head>
<body>
  
  <div class="list-container">
  
  </div>





</body>
</html>