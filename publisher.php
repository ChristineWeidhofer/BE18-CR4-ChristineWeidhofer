<?php

require_once 'actions/db_connect.php';
require_once 'navigation.php';

$pub = $_GET["pub_name"];
$sql = "SELECT * FROM media WHERE pub_name = '$pub'"; // select all data from db of specific publisher only

$result = mysqli_query($connect ,$sql);
$cbody = "";

if(mysqli_num_rows($result)  > 0) {
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ // get records an put into table       
    $cbody .= '
    
    <div class="card shadow mx-auto d-flex flex-column flex-md-row p-5 my-5" style="width: 85%;">
      <div class="wrap1">
        <img src="assets/' . $row['image'] . '" class="card-img-top" alt="' . $row['title'] . '">
      </div>
      <div class="wrap2 ps-md-4">
        <div class="card-body">
          <h5 class="card-title fw-bold">' . $row['title'] . '</h5>
          <p class="card-text">' . $row['descr'] . '</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Author: ' . $row['author_first'] . " " .  $row['author_last'] . '</li>
          <li class="list-group-item">Type: ' . $row['type'] . '</li>
          <li class="list-group-item">Published by: ' . $row['pub_name'] . ' in ' . $row['pub_city'] . ' in ' . $row['pub_date'] . '</li>
          <li class="list-group-item">ISBN: ' . $row['ISBN'] . '</li>
          <li class="list-group-item">Status: <b>' . $row['status'] . '</b></li>
        </ul>
        <div class="card-body">
          <a href="index.php" class="card-link btn btn-warning btn-gradient">Back to Start</a>
        </div>
      </div>
    </div>
      
      ';
  
  };
} else {
  $cbody =  "<h3 class='text-center'>No Data Available </h3>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <?php require_once 'components/boot.php'?>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  <div class="manageProduct mt-3 mx-auto">
    <h2 class="text-center m-5">In our library by the same publisher:</h2>
    <table class='table'>
      <thead class='table-secondary'>
      </thead>
      <tbody>
        <?= $cbody;?>
      </tbody>
    </table>
  </div>
</body>
</html>