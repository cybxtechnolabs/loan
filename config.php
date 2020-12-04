<?php


define("SITENAME", "YOUR SITE NAME HERE");

define("BASEURL", "http://localhost/PROJECTS/loan");

define("SERVER", "localhost");
define("DB_NAME", "loan");
define("DB_USER", "root");
define("DB_PASSWORD", "");

define("LOAN_TABLE", "loan");
define("CONTACT_TABLE", "contact");

define("EMAIL", "info@paydayme.com");



  // Create connection
  $conn = mysqli_connect(SERVER, DB_USER, DB_PASSWORD, DB_NAME);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } else {//echo "Connected successfully";
  }

  $title = SITENAME;
  if(strpos($_SERVER['PHP_SELF'],"index")) {
      $title = SITENAME;
  } else if(strpos($_SERVER['PHP_SELF'],"faq" )) {
      $title = 'HOME | '.SITENAME;
  } else if(strpos($_SERVER['PHP_SELF'],"your-privacy-rights" )) {
      $title = 'PRIVACY | '.SITENAME;
  } else if(strpos($_SERVER['PHP_SELF'],"terms-and-conditions")) {
      $title = 'TERMS | '.SITENAME;
  } else if(strpos($_SERVER['PHP_SELF'],"contact")) {
      $title = 'CONTACT | '.SITENAME;
  } else if(strpos($_SERVER['PHP_SELF'],"apply")) {
      $title = 'APPLY | '.SITENAME;
  }

 
 
