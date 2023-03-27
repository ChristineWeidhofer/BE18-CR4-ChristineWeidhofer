<?php
require_once 'db_connect.php';

if ($_POST) {    
    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $descr = mysqli_real_escape_string($connect, $_POST['descr']);
    $author_first = mysqli_real_escape_string($connect, $_POST['author_first']);
    $author_last = mysqli_real_escape_string($connect, $_POST['author_last']);
    $ISBN = mysqli_real_escape_string($connect, $_POST['ISBN']);
    $type = $_POST['type'];
    $pub_date = mysqli_real_escape_string($connect, $_POST['pub_date']);
    $pub_name = mysqli_real_escape_string($connect, $_POST['pub_name']);
    $pub_city = mysqli_real_escape_string($connect, $_POST['pub_city']);
    $status = $_POST['status'];
    $id = $_POST['id'];
    $uploadError = '';
    $picture = $_POST['image'];

    $sql = "UPDATE media SET title = '$title', descr = '$descr', author_first = '$author_first', author_last = '$author_last', ISBN = '$ISBN', type = '$type', pub_date = '$pub_date', pub_name = '$pub_name', pub_city = '$pub_city', status = '$status', image = '$picture' WHERE id = $id";

    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
    }
    mysqli_close($connect);    
} else {
    header("Location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
        <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Did everything work out fine?</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
            </div>
            <div>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back to Update</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Back to Start</button></a>
            </div>
        </div>
    </body>
</html>