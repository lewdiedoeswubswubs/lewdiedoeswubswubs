<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "fedumcoda";

  if (!$conn = msqli_connect($dbhost,$dbuser,$dbpass,$dbname))
  {
    die("Failed to connect");
  }
?>
