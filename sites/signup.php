<?php
session_start();
    include("connection.php");
    include("functions.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $username = $_POST['user_name'];
      $password = $_POST['password'];
      $email = $_POST['$email'];
      $name = $_POST['$name'];
      if(!empty($user_name)&& !empty($password)&& !is_numeric($user_name))
      {
        $user_ID = random_num(9);
        $query = "INSERT INTO tblmembers (user_ID, email, username, password, name) VALUES ('$user_ID', '$email', '$username', '$password', '$name')";
        mysqli_query($conn,$query);
        header("Location: login:php");
        die;
      }else
      {
        echo "Please enter some valid information";
      }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login - Fedumcoda</title>
    <link rel="stylesheet" href="../stylesheets/styles.css">
  </head>
  <body>
    <div class="body_thing">
      <h1>Sign-up</h1>
      <div class="form">
        <form class="" method="post">
          <div class="text_field">
            <input type="text" name="user_name" placeholder="username">
          </div>
          <div class="text_field">
            <input type="text" name="name" placeholder="name">
          </div>
          <div class="text_field">
            <input type="email" name="email" placeholder="Email">
          </div>
          <div class="text_field">
            <input type="password" name="password" placeholder="Password">
          </div>
          <div class="text_field">
            <input type="password" name="passwordConfirm" placeholder="Confirm Password">
          </div>
          <div class="text_field">
            <label for="">Receive updates through email</label>
            <input type="checkbox" name="" value="">
          </div>
          <div class="text_field">
            <input type="submit" name="Login" value="Sign In">
          </div>
          <div class="register">
            <p>Already have an account?<a href="index.html">Log in!</a></p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
