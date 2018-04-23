  <?php
session_start();
include 'connect.php';
$conn=connect();
$e_id=$_POST['userid'];
$status=$_POST['status'];
$password=$_POST['password'];
$sql="SELECT e_id,password FROM employee";
$flag = 0;
$_SESSION["status"] = $status;
if($status=='EmployeeLogin')
{
  if($run_post=mysqli_query($conn,$sql))
    {
    while ($row=mysqli_fetch_row($run_post)){
                if(strcmp($e_id,$row[0])==0 && strcmp($password,$row[1])==0)
              {

                  $_SESSION["logged_in"] = true;
                  $_SESSION["user"] = $e_id;
                  echo "<script>window.location = 'http://localhost/payroll-system/fourth/dashboard.php'</script>";
                  $flag = 1;
                  break;
              }


            }
      }
}
else if($status=='AdminLogin')
{
if($e_id=="admin" && $password=="admin")
{
  $_SESSION["logged_in"] = true;
  $_SESSION["user"] = $e_id;
  echo "<script>window.location = 'http://localhost/payroll-system/fourth/admin.php'</script>";
  $flag = 1;
  break;
}
}
if (!$flag){
    $message = "Login credentials are wrong";
echo "<script type='text/javascript'>alert('$message');</script>";
      echo "<script>window.location = 'http://localhost/payroll-system/fourth/auth.php'</script>";

}


?>
