
<?php
session_start();
 ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="monitor_query.php" method="post">
      Enter database name: <input type="text" name="database" placeholder="Enter Database">
      <input type="submit" name="submit" value="show">
    </form>
  </body>
</html>
