<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "fedumcoda";

  if (!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
  {
    die("Failed to connect");
  }
?>
