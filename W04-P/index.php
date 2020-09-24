<?php
  $link = mysqli_connect('localhost', 'root', 'rootroot', 'dbp');
  $query = "SELECT * from color";
  $result = mysqli_query($link, $query);
  $list = '';
  while($row = mysqli_fetch_array($result)){
    $escaped_title = htmlspecialchars($row['title']);
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$escaped_title}</a></li>";
  }

  $article = array (
    'title' => 'Welcome',
    'description' => 'Color is ...'
  );

  $update_link = '';
  $delete_link = '';
  $member = '';

  if(isset($_GET['id'])){
    $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
    $query = "SELECT * FROM color LEFT JOIN member ON color.color_id = member.id WHERE color.id={$filtered_id}";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $article['title'] = htmlspecialchars($row['title']);
    $article['description'] = htmlspecialchars($row['description']);
    $article['name'] = htmlspecialchars($row['name']);

    $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
    $delete_link = '
    <form action="process_delete.php" method="POST">
      <input type="hidden" name="id" value="'.$_GET['id'].'">
      <input type="submit" value="delete">
      </form>
  ';
  $member = "<p>by {$article['name']}</p>";
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
    <a href="member.php">member</a>
    <ol> <?= $list ?> </ol>
    <a href="create.php"> create </a>
    <?=$update_link?>
    <?=$delete_link?>
    <h2> <?= $article['title'] ?> </h2>
    <p><?= $article['description'] ?></p>
    <?= $member ?>
  </body>
</html>
