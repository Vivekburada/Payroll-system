<?php
session_start();
  ?>
<html>
<head>
<title>Dashboard</title>

<style>
table, th, td {
   border: 1px solid black;
     width: 60%;
}
th {
    height: 60px;
}
.tiles
{
  text-align: center;
}
#label {
  font-size: 24;
  font-weight: bold;

}

#t{
  width: 250px;
  height: 30px;

  border-radius: 20px ;
  background-color: #eee;
  box-shadow: 1px 2px 5px rgba(0,0,0,.09);
  border: solid 5px #cbc9c9;
  margin-left: 30px;
  margin-top: 25px;

}
#buttonstyler
{
  border : 0px;
  background-color:black;
  height : 50px;
  width : 125px;
  font-weight: bold;
  font-family: sans-serif;
  color : #eee;
}
.buttonstyler
{
  border : 0px;
  background-color:black;
  height : 50px;
  width : 125px;
  font-weight: bold;
  font-family: sans-serif;
  color : #eee;
}
#save
{
  width: 250;
  height: 40;
  position: relative;
  font-size: 24;
  color:black;
  background-color: #eee;
  margin-left: 30px;
  margin-top: 25px;
  border: solid 5px #cbc9c9;
  border-radius: 15px;

}
body{

    background-color: #eee;
}
h1{
  font-size: 38;
  font-weight: bold;
  font-family: monospace;
}
h3{
  color : #ff9900;
  font-size: 38;
  font-weight: bold;
  font-family : fantasy
}
#h2{
  color : #eee;
  font-size: 24;
  font-weight: bold;
  font-family:inherit;
  padding: 10px;
}
#dash{
  border-radius: 10px;
border-color: #000066;
  margin-left: 10%;
  margin-right: 10%;
  height: 100%;
  background-color: #ff9900;
  margin-top: 100px;
  margin-bottom: 10%;
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>
<center><h1>Dashboard</h1></center>
<center><h3> <?php echo "Welcome ".$_SESSION['user']."";?></h3></center>
<?php include 'connect.php'; ?>
<!-- <?php include 'd_title.php'; ?> -->

<div class='tiles' >
  <a href="logout.php" ><input type="button" class="buttonstyler" value="Logout"></a>
</div>

<div id='dash'>
<center>  <h1 > This is the Employee page </h1></center>
<?php
$user=$_SESSION['user'];
$conn=connect();
$result = mysqli_query($conn,"SELECT  t.month as month,sum(t.money)+s.basic+s.med_all+s.incentive-s.pf-s.insurace as temp FROM task as t,salary as s WHERE t.e_id='$user' and t.e_id=s.e_id group by t.month");
echo "<center><table border=1><tr><th>Month</th><th>salary</th></tr>";
// If the query completed without errors, fetch a result

if ($result) {
  $i=0;
  while($row = mysqli_fetch_array($result)) {
  $userid[$i]=$row["temp"];
  $eid[$i]=$row["eid"];
  echo "<tr><td>";
  echo $row['month'];
  echo "</td><td>";
  echo $row['temp'];
  echo "</td></tr>";
  $i++;

}
echo "</table></center>";
}
// Otherwise display the error
else echo "An error occurred: ". mysql_error();
?>

<div>

  <center>  <h1 > Task status </h1></center>
  <?php
  $user=$_SESSION['user'];
  $conn=connect();
  $result = mysqli_query($conn,"SELECT  date,month,type,money FROM task WHERE e_id='$user'");
  echo "<center><table border=1><tr><th>date</th><th>month</th><th>type</th><th>Money</th></tr>";
  // If the query completed without errors, fetch a result

  if ($result) {
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    $date[$i]=$row["date"];
    $month[$i]=$row["month"];
    $type[$i]=$row["type"];
    $money[$i]=$row["money"];
    echo "<tr><td>";
    echo $row['date'];
    echo "</td><td>";
    echo $row['month'];
    echo "</td><td>";
    echo $row['type'];
    echo "</td><td>";
    echo $row['money'];
    echo "</td></tr>";
    $i++;

  }
  echo "</table></center>";
  }
  // Otherwise display the error
  else echo "An error occurred: ". mysql_error();
  ?>
  <div>
</div>
<div>

  <center>  <h1 > Employee details </h1></center>
  <?php
  $user=$_SESSION['user'];
  $conn=connect();
  $result = mysqli_query($conn,"SELECT  e_id,fname,email,address,dob,phno,gender,desig FROM employee WHERE e_id='$user'");
  echo "<center><table border=1><tr><th>e_id</th><th>fname</th><th>email</th><th>address</th><th>dob</th><th>phno</th><th>gender</th><th>desig</th></tr>";
  // If the query completed without errors, fetch a result

  if ($result) {
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    $e_id[$i]=$row["e_id"];
    $fname[$i]=$row["fname"];
    $email[$i]=$row["email"];
    $address[$i]=$row["address"];
    $dob[$i]=$row["dob"];
    $phno[$i]=$row["phno"];
    $gender[$i]=$row["gender"];
    $desig[$i]=$row["desig"];
    echo "<tr><td>";
    echo $row['e_id'];
    echo "</td><td>";
    echo $row['fname'];
    echo "</td><td>";
    echo $row['email'];
    echo "</td><td>";
    echo $row['address'];
    echo "</td><td>";
    echo $row['dob'];
    echo "</td><td>";
    echo $row['phno'];
    echo "</td><td>";
    echo $row['gender'];
    echo "</td><td>";
    echo $row['desig'];
    echo "</td></tr>";
    $i++;
  }
  echo "</table></center>";
  }
  // Otherwise display the error
  else echo "An error occurred: ". mysql_error();
  ?>
  <div>
</div>



</div>
</body>


</html>
