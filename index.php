<?php
require_once 'actions/db_connect.php';
require_once 'navigation.php';

$sql = "SELECT * FROM `media` ORDER BY `title` ASC";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {    
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ // getting our records and put them in responsive table (scrollable on small screens)
    $tbody .= "<tr>

      <td><img class='img-thumbnail img-bordered' src='assets/" .$row['image']."'</td>
      <td>" .$row['title']."</td>
      <td>" .$row['author_last']."</td>
      <td><a href='details.php?id=" .$row['id']."'><button class='btn btn-success btn-sm' type='button'>Details</button></a>
      <td><a href='publisher.php?pub_name=" .$row['pub_name']."'><button class='btn btn-secondary btn-sm' type='button'>{$row['pub_name']}</button></a>
      <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Update</button></a>
      <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>

      </tr>";
  };
} else {
  $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Big Library</title>
  <?php require_once 'components/boot.php'?>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  <div class="manageIndex container-fluid mt-3">
    <h2 class="text-center m-5">Complete List of Media</h2>
    <div class="text-center mx-auto d-flex justify-content-evenly">
      <a href="create.php"><button class="btn btn-warning btn-gradient text-dark mb-4">Add Media</button></a>
    </div>
    <div class="table-responsive-sm mb-5">
      <table class='table'>
        <thead class='table-light'>
          <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Author</th>
            <th>Details</th>
            <th>Publisher</th>
            <th>Action</th>
          </tr>
        </thead>
      <tbody>
      <?= $tbody;?>
      </tbody>
      </table>
    </div>
  </div>
</body>
</html>