<?php
session_start();
$con = mysqli_connect("localhost","root","");
if($con){
}
else{
    echo "No connection established";
}
$db = mysqli_select_db($con,'lms');
$password="";
$query = "SELECT * FROM students where email = '$_SESSION[email]'";

$query_run = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $password = $row['password'];
}
if($password == $_POST['current_pass'])
{
    $query = "UPDATE students SET password = '$_POST[new_pass]' WHERE email = '$_SESSION[email]'";
    $query_run = mysqli_query($con,$query);
}
?>
<script type = "text/javascript">
    alert("Change Password successfully");
    window.location.href = "user_dashboard.php";
</script>