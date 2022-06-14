<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "fedumcoda";

  $mysqli = new mysqli(hostname: $dbhost, username: $dbuser, password: $dbpass, database: $dbname);

  if($mysqli -> connect_errno) {
    die("Connection error: ". $mysqli ->connecterror);
  }
  return $mysqli;
?>
