<?php
  date_default_timezone_set('Asia/Tashkent');
  include "dbh.inc.php";
  include "comments.inc.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="background-color: #ddd;">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/kWOuUkLtQZw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <?php
      echo '<form class="" action="'.setComments($conn).'" method="post">
        <input type="hidden" name="uid" value="Anonymous">
        <input type="hidden" name="date" value="'.date("Y-m-d H:i:s").'">
        <textarea name="message" rows="2" cols="65"></textarea><br>
        <button style="margin-bottom: 40px;" type="submit" name="commentSubmit">Comment</button>
      </form>';
      getComments($conn);
     ?>
  </body>
</html>
