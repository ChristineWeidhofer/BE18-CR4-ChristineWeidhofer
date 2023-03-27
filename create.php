<?php
require_once 'navigation.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Big Library  |  Add Media</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body>
        <fieldset class="two-thirds mx-auto my-5">
            <h2 class='text-center mt-2'>Add Medium</h2>
            <form class="mx-auto my-5" action="actions/a_create.php" method= "post" enctype="multipart/form-data">
            <h6 class='text-center pb-4'>Please fill in all the fields</h6>
                <table class='table form-headers'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Medium Title" /></td>
                    </tr>    
                    <tr>
                        <th>Description (250 Characters max.)</th>
                        <td><textarea class='form-control' type="text" name="descr"  placeholder="Medium Description" maxlength="250" rows="5"></textarea></td>
                    </tr>  
                    <tr>
                        <th>Author First Name</th>
                        <td><input class='form-control' type="text" name= "author_first" placeholder="Author First Name" /></td>
                    </tr>
                    <tr>
                        <th>Author Last Name</th>
                        <td><input class='form-control' type="text" name= "author_last" placeholder="Author Last Name" /></td>
                    </tr>
                    <tr>
                        <th>ISBN Number</th>
                        <td><input class='form-control' type="text" name= "ISBN" placeholder="e.g. 000-0-000-00000-0" /></td>
                    </tr>
                    <tr>
                        <th>Type (Click to change)</th>
                        <td><select class='form-select' type="text" name="type">
                            <option value="Graphic Novel">Graphic Novel</option>
                            <option value="Novel">Novel</option>
                            <option value="Non-Fiction">Non-Fiction</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Publication Date</th>
                        <td><input class='form-control' type="text" name= "pub_date" placeholder="e.g. 1981-06-07" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name= "pub_name" placeholder="Publisher Name" /></td>
                    </tr>
                    <tr>
                        <th>Publisher City</th>
                        <td><input class='form-control' type="text" name= "pub_city" placeholder="Publisher City" /></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <!-- <td><input class='form-control' type="text" name= "status" placeholder="available or reserved" /></td> -->
                        <td><select class='form-select' type="text" name="status" aria-label="Choose your status" value="<?php echo $status ?>">
                            <option value="availabe">available</option>
                            <option value="reserved">reserved</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="text" name="image" /></td>
                    </tr>
                    <tr>
                    <th><a href="index.php"><button class='btn btn-warning btn-gradient text-dark' type="button">Back to Start</button></a></th>
                        <td><button class='btn btn-success justify-end' type="submit">Insert Product</button></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>