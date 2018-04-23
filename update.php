<?php
session_start();
include 'connect.php';
$conn=connect();
$e_id=$_POST['e_id'];
$t_id=$_POST['t_id'];
$date=$_POST['date'];
$money=$_POST['money'];
$type=$_POST['type'];
$month=$_POST['month'];
$queried="INSERT INTO task VALUES('".$t_id."','".$e_id."','".$date."','".$month."','".$type."','".$money."')";
$success = $conn->query($queried);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);
    echo "<script>window.location = 'http://localhost/fourth/button3.php'</script>";
}
else
  {
  echo "<script type='text/javascript'>alert('Query Successful');</script>";
  echo "<script>window.location = 'http://localhost/fourth/button3.php'</script>";
}
?>
