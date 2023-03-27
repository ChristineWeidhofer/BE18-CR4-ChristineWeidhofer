<?php
require_once 'actions/db_connect.php';
require_once 'navigation.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM media WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result); // get records
    if (mysqli_num_rows($result) == 1) { // check if 1 record
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
        $status = $data['status'];
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
        <title>Edit Medium</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body>
        <fieldset class="two-thirds mx-auto my-5">
            <legend class='h2'>Update:<img class='img-thumbnail img-bordered ms-4' src='assets/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <h6 class='text-center pb-4'>Please fill in all the fields</h6>
                <table class="table form-headers">
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title" value="<?php echo $title ?>"/></td>
                    </tr>    
                    <tr>
                        <th>Description (250 Characters max.)</th>
                        <td><input class='form-control' type="text" name="descr" maxlength="250" value="<?php echo $descr ?>" /></td>
                    </tr>  
                    <tr>
                        <th>Author First Name</th>
                        <td><input class='form-control' type="text" name= "author_first" value="<?php echo $author_first ?>"/></td>
                    </tr>
                    <tr>
                        <th>Author Last Name</th>
                        <td><input class='form-control' type="text" name= "author_last" value="<?php echo $author_last ?>"/></td>
                    </tr>
                    <tr>
                        <th>ISBN Number</th>
                        <td><input class='form-control' type="text" name= "ISBN" value="<?php echo $ISBN ?>"/></td>
                    </tr>
                    <tr>
                        <th>Type (Click to change)</th>
                        <td><select class='form-select' type="text" name="type" aria-label="Choose your type" value="<?php echo $type ?>">
                            <option value="Graphic Novel">Graphic Novel</option>
                            <option value="Novel">Novel</option>
                            <option value="Non-Fiction">Non-Fiction</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Publication Date</th>
                        <td><input class='form-control' type="text" name= "pub_date" value="<?php echo $pub_date ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name= "pub_name" value="<?php echo $pub_name ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publisher City</th>
                        <td><input class='form-control' type="text" name= "pub_city" value="<?php echo $pub_city ?>" /></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <!-- <td><input class='form-control' type="text" name= "status" value="<?php echo $status ?>" /></td> -->
                        <td><select class='form-select' type="text" name="status" aria-label="Choose your status" value="<?php echo $status ?>">
                            <option value="availabe">available</option>
                            <option value="reserved">reserved</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="text" name="image" value="<?php echo $picture ?>"/></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back to Start</button></a></td>
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>