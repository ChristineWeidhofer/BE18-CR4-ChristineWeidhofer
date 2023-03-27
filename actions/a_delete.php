<?php 
require_once 'db_connect.php';

if ($_POST) {
    $id = $_POST['id'];
    $picture = $_POST['image'];
    ($picture =="product.png")?: unlink("../assets/$picture");

    $sql = "DELETE FROM media WHERE id = {$id}";
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "Successfully Deleted!";
    } else {
        $class = "danger";
        $message = "The entry was not deleted due to: <br>" . $connect->error;
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Delete</title>
        <?php require_once '../components/boot.php'?>  
        <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Deleted</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?=$message;?></p>
                <a href='../index.php'><button class="btn btn-success" type='button'>Back to Start</button></a>
            </div>
        </div>
    </body>
</html>