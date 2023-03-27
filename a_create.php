<?php
require_once 'db_connect.php';

if ($_POST) {   
    $picture = (isset($_POST['image'])) ? $_POST['image'] : "";
    $title = (isset($_POST['title'])) ? mysqli_real_escape_string($connect, $_POST['title']) : "";
    $descr = (isset($_POST['descr'])) ? mysqli_real_escape_string($connect, $_POST['descr']) : "";
    $author_first = (isset($_POST['author_first'])) ? mysqli_real_escape_string($connect, $_POST['author_first']) : "";
    $author_last = (isset($_POST['author_last'])) ? mysqli_real_escape_string($connect, $_POST['author_last']) : "";
    $ISBN = (isset($_POST['ISBN'])) ? mysqli_real_escape_string($connect, $_POST['ISBN']) : "";
    $type = (isset($_POST['type'])) ? $_POST['type'] : "";
    $pub_date = (isset($_POST['pub_date'])) ? mysqli_real_escape_string($connect, $_POST['pub_date']) : "";
    $pub_name = (isset($_POST['pub_name'])) ? mysqli_real_escape_string($connect, $_POST['pub_name']) : "";
    $pub_city = (isset($_POST['pub_city'])) ? mysqli_real_escape_string($connect, $_POST['pub_city']) : "";
    $status = (isset($_POST['status'])) ? mysqli_real_escape_string($connect, $_POST['status']) : "";
    $uploadError = '';

    $sql = "INSERT INTO `media`(`image`, `title`, `descr`, `author_first`, `author_last`, `ISBN`, `type`, `pub_date`, `pub_name`, `pub_city`, `status`) VALUES ('$picture','$title','$descr','$author_first','$author_last','$ISBN','$type','$pub_date','$pub_name','$pub_city','$status')";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> $author_last </td>
            </tr></table><hr>";
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
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
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
        <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Everything worked out?</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
            </div>
            <div class="text-center w-25 mx-auto">
                <a href="../index.php"><button class="btn btn-warning btn-gradient text-dark">Back to Start</button></a>
            </div>
        </div>
    </body>
</html>