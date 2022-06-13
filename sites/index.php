<?php
session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($conn);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Letsgo</h2>
  </body>
</html>
