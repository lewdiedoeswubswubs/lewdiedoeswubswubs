<?php
$is_invalid = false;
if ($_SERVER["REQUEST_METHOD"] === "POST"){
  $mysqli = require __DIR__ . "/connection.php";
  $sql = sprintf("SELECT * FROM tblmember WHERE email = '%s'", $mysqli ->real_escape_string($_POST["email"]));
  $result = $mysqli->query($sql);
  $user = $result->fetch_assoc();
  if($user){
    if(password_verify($_POST["password"], $user["password_hash"])){
      die("login successful");
    }
  }
  $is_invalid = true;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup - Fedumcoda</title>
    <link rel="stylesheet" href="../stylesheets/styles.css">
  </head>
  <body>

    <div class="body_thing">
      <h1>LOGIN</h1>
      <?php if ($is_invalid): ?>
        <em>Invalid Login</em>
      <?php endif; ?>
      <div class="form">
        <form class="" method="post">
          <div class="text_field">
            <input type="email" name="email" placeholder="Email">
          </div>
          <div class="text_field">
            <input type="password" name="password" placeholder="Password">
          </div>
          <div class="text_field">
            <input type="submit" name="Login" value="Login">
          </div>
          <div class="register">
            <p>Don't have an account?<a href="signup.php">Sign Up!</a></p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
