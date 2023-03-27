<?php
require_once 'navigation.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <?php require_once 'components/boot.php'?>
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
  <main>
    <div class="text-center bg-light bg-gradient rounded p-5 shadow half mx-auto my-5">
      <h2 class='mb-3'>Want to get in touch?</h2>
      <h4>Contact us via the following methods:</h4>
      <table class="table mt-3 mx-auto">
        <tr>
          <td><a href="https://instagram.com"><i class="bi bi-instagram fs-4" aria-label="instagram"></i></a></td>
          <td><a href="https://facebook.com"><i class="bi bi-facebook fs-4" aria-label="facebook"></i></a></td>
          <td><a href="https://instagram.com"><i class="bi bi-twitter fs-4" aria-label="twitter"></i></a></td>
        </tr>
      </table>

      <h4 class="mb-4">Want to visit us?</h4>
      <table class="table w-75 mt-3 mx-auto">
        <tr>
          <td>Big Library</td>
        </tr>
        <tr>
          <td>123, Great Street</td>
        </tr>
        <tr>
          <td>New York, NY</td>
        </tr>
      </table>
    </div>
  </main>
</body>
</html>