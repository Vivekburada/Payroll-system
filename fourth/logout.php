<?php
session_start();
$message = "Logout Alert";
echo "<script type='text/javascript'>alert('$message');</script>";
  echo "<script>window.location = 'http://localhost/fourth/auth.php'</script>";
  session_unset();
  session_destroy();
?>
