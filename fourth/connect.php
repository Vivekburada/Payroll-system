<?php
// change dbname here
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "    ";  //your phpmyadmin password
 $dbname = "    "; //your database name 

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}

?>
