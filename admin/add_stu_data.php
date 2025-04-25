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
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$course_id = $_POST['course_id'];
$dept_id = $_POST['dept_id'];
$session = $_POST['session'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$age = $_POST['age'];
$state = $_POST['state'];

 
$query = "INSERT INTO add_students (name,enroll,email,mobile,course_id,dept_id,session,gender,address,age,state) VALUES ('$name ','$enroll','$email','$mobile','$course_id','$dept_id','$session','$gender','$address','$age','$state')";

$query_run = mysqli_query($con,$query);

 header('location:add_student.php');
?>