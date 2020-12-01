<?php


define("SITENAME", "PAYDAY");

define("BASEURL", "http://localhost/PROJECTS/git/loan/");

define("SERVER", "localhost");
define("DB_NAME", "loan");
define("DB_USER", "root");
define("DB_PASSWORD", "");

define("LOAN_TABLE", "loan");
define("CONTACT_TABLE", "contact");

// Create connection
$conn = mysqli_connect(SERVER, DB_USER, DB_PASSWORD, DB_NAME);
// Create connection



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {//echo "Connected successfully";



}
