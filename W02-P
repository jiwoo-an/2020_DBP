<?php
  $link = mysqli_connect('localhost', 'root', 'rootroot', 'dbp');
  $query = "SELECT * from color";
  $result = mysqli_query($link, $query);
  $list = '';
  while($row = mysqli_fetch_array($result)){
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }

  $article = array (
    'title' => 'Welcome',
    'description' => 'Color is ...'
  );

  if(isset($_GET['id'])){
    $query = "SELECT * FROM color WHERE id={$_GET['id']}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article = array (
      'title' => $row['title'],
      'description' => $row['description']
  );
}
?>

<!DOCTYPE html>
<html>
<style type="text/css">
  h2, p{color: <?= $article['title'] ?>;}
</style>
  <head>
    <meta charset="utf-8">
    <title> Colors </title>
  </head>
  <body>
    <h1><a href="index.php">Colors</a></h1>
    <ol> <?= $list ?> </ol>
    <a href="create.php"> create </a>
    <h2> <?= $article['title'] ?> </h2>
    <p><?= $article['description'] ?></p>

  </body>
</html>
