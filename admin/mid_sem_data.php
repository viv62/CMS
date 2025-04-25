<?php
$con = mysqli_connect("localhost","root","");
if($con){
    echo "connection successful";
}
else{
    echo "No connection established";
}

mysqli_select_db($con,"lms");

$enroll = $_POST['enroll'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];

$query = "INSERT INTO marks (enroll,sub1,sub2,sub3,sub4) VALUES ('$enroll','$sub1','$sub2','$sub3','$sub4')";

$query_run = mysqli_query($con,$query);

?>

<script type="text/javascript">
    alert("Added successfully");
    window.location.href = "mid_sem.php";
 </script>