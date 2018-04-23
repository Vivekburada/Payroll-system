<?php
session_start();
  ?>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
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
  height: 110%;
  background-color: white;
  margin-top: 100px;
  margin-bottom: 10%;
}
.update_div
{
padding-left: 50px;
margin-left: 10%;
margin-right: 10%;
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
    <a href="admin.php" ><input type="button" id="buttonstyler" value="BACK"></a>
</div>

  <div id="dash">
    <form id="update_div" action='update.php' method='POST'>
      <label class="label-input100" for="first-name">Enter s_id & e_id *</label>
      <div class="wrap-input100 validate-input" >
        <input id="email" class="input100" type="text" name="e_id" placeholder="Employee ID">
        <span class="focus-input100"></span>
      </div>
      <div class="wrap-input100 validate-input" >
        <input id="email" class="input100" type="text" name="t_id" placeholder="Task ID">
        <span class="focus-input100"></span>
      </div>
      <label class="label-input100" for="email">Enter date *</label>
      <div class="wrap-input100 validate-input" >
        <input id="email" class="input100" type="text" name="date" placeholder="yyyy-mm-dd">
        <span class="focus-input100"></span>
      </div>

      <label class="label-input100" for="phone">month</label>
      <div class="wrap-input100">
        <input id="phone" class="input100" type="text" name="month" placeholder="month">
        <span class="focus-input100"></span>
      </div>
      <label class="label-input100" for="phone">Type</label>
      <div class="wrap-input100">
        <input id="phone" class="input100" type="text" name="type" placeholder="type">
        <span class="focus-input100"></span>
      </div>
      <label class="label-input100" for="phone">money</label>
      <div class="wrap-input100">
        <input id="phone" class="input100" type="text" name="money" placeholder="money">
        <span class="focus-input100"></span>
      </div>



      <div class="container-contact100-form-btn">
        <button class="contact100-form-btn">
          Query
        </button>
      </div>
    </form>

</div>



</body>


</html>
