<?php
session_start();
  ?>
<html>
<head>
<title>Dashboard</title>

<style>

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
  border-top: 10px;
border-color: #000066;
  margin-left: 450px;
  margin-right: 450px;
  background-color: #ff9900;
  margin-top: 100px;
  margin-bottom: 100px;
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
<?php include 'd_title.php'; ?>
</body>

</html>
