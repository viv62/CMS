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
$f_id = $_POST['f_id'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$dept_id = $_POST['dept_id'];
$salary = $_POST['salary'];

 
$query = "INSERT INTO faculty (name,f_id,email,address,mobile,salary,dept_id) VALUES ('$name ','$f_id','$email','$address','$mobile','$salary','$dept_id')";

$query_run = mysqli_query($con,$query);

?>

<script type=text/javascript>
    alert("Added Successfully");
    window.location.href="add_teachers.php";
</script>