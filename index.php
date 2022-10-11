<!-- Didn't finish last step -->

<?php 
  $page_title = 'Shopping list';
  $page = 'home';

  $page = $_GET['page'] ?? $page;

  $items = [];

  if (isset($_POST['items'])) {
    $items = $_POST['items'];
    var_dump($items);
  }

  // Right after, add a PHP condition. The expression in the condition should be true when the array $_POST['items'] is not empty.
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <nav>
    <a href="?page=home">Home</a>
    <a href="?page=form">Form</a>
  </nav>
  <h1 class="headline"><?= $page_title?></h1>
  <?= $page == 'home' ? include_once 'home.php' : ""  ?>
  <?= $page == 'form' ? include_once 'form.php' : ""  ?>
</body>
</html>