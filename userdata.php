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
$enroll = $_POST['enroll'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
  
$query = "INSERT INTO students(name,enroll,mobile,email,password) VALUES ('$name ','$enroll','$mobile','$email','$password')";

$query_run = mysqli_query($con,$query);

header('location:index.php');
?>