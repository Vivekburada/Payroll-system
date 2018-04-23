<?php
// change dbname here
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "XF56RYZ@2701";
 $dbname = "fourth";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}

?>
