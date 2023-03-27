<?php 
require_once 'actions/db_connect.php';
require_once 'navigation.php';

if ($_GET['id']) { // getting the id of our record
    $id = $_GET['id'];
    $sql = "SELECT * FROM media WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $title = $data['title'];
        $descr = $data['descr'];
        $author_first = $data['author_first'];
        $author_last = $data['author_last'];
        $ISBN = $data['ISBN'];
        $type = $data['type'];
        $pub_date = $data['pub_date'];
        $pub_name = $data['pub_name'];
        $pub_city = $data['pub_city'];
        $picture = $data['image'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Product</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body>
        <fieldset class="bg-light rounded shadow mx-auto my-5">
            <legend class='h2 mb-3'>Do you really want to delete?</legend>
            <h6>You have selected the medium below:</h6>
            <table class="table mt-3 mx-auto">
                <tr>
                    <td><img class='img-thumbnail img-bordered medium ms-4' src='assets/<?php echo $picture ?>' alt="<?php echo $title ?>"></td>
                    <td class="fs-5"><?php echo $title?> by <?php echo $author_first . " " . $author_last?></td>
                </tr>
            </table>

            <h3 class="mb-4">Do you really want to delete this product?</h3>
            <form action ="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="hidden" name="image" value="<?php echo $picture ?>" />
                <button class="btn btn-danger" type="submit">Yes, delete it!</button>
                <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
            </form>
        </fieldset>
    </body>
</html>