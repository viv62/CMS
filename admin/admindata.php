<?php
$con = mysqli_connect('localhost','root','');

if($con){
    echo "connection successful";
}
else{
    echo "No connection established";
}

mysqli_select_db($con,'lms');

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
  
$query = "INSERT INTO admin (name,mobile,email,password) VALUES ('$name ','$mobile','$email','$password')";

$query_run = mysqli_query($con,$query);

header('location:index.php');
?>