<?php
  // Create a connettion to the logindb database.
   // Set the encoding and the access deatils as constants:

  Define("DB_HOST", 'localhost');
  Define("DB_USER", 'colossus');
  Define("DB_PASSWORD", 'Fstc0mput3r');
  Define("DB_NAME", 'paypaldb');

  $dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  mysqli_set_charset($dbcon, 'utf8');

?>
