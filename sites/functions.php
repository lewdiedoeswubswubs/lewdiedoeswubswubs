<?php
if (empty($_POST["user_name"])){
  die("Name is required");
}
if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
  die("Valid email is required");
}
if(strlen($_POST["password"]) < 8) {
  die("Password must be at least 8 characters");
}
if(!preg_match("/[a-z]/i", $_POST["password"])){
  die("Password must contain atleast one letter");
}
if(!preg_match("/[0-9]/i", $_POST["password"])){
  die("Password must contain atleast one number");
}
if($_POST["password"] !== $_POST["passwordConfirm"]){
  die("Password must match!");
}
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
$mysqli = require __DIR__ . "\connection.php";
$sql = "INSERT INTO tblmember (username, email, password_hash)
        VALUES (?, ?, ?)";
$stmt = $mysqli ->stmt_init();
if (!$stmt -> prepare($sql)){
  die("SQL error: ".$mysqli->error);
}
$stmt->bind_param("sss", $_POST["user_name"],$_POST["email"],$password_hash);
if($stmt ->execute()) {
  echo "Signup Bruh";
}
else {
  die($mysqli->error. "" . $mysqli->errorno);
}

?>
