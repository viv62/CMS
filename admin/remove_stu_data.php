<?php
$con = mysqli_connect('localhost','root','');

if($con){
    echo "connection successful";
}
else{
    echo "No connection established";
}

mysqli_select_db($con,'lms');

$enroll = $_POST['enroll'];

$query="DELETE FROM add_students WHERE add_students.enroll='$enroll'";

$query_run = mysqli_query($con,$query);

?>
<script type="text/javascript">
    alert("Removed Successfully");
    window.location.href = "remove_student.php";
</script>