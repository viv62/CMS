<?php
$con = mysqli_connect("localhost","root","");

if($con){
    echo "connection successful";
}
else{
    echo "No connection established";
}

$db = mysqli_select_db($con,'lms');

$query = "UPDATE add_students SET name = '$_POST[name]',email = '$_POST[email]',mobile = '$_POST[mobile],course_id = '$_POST[course_id]',dept_id = '$_POST[dept_id]',session = '$_POST[session]',gender = '$_POST[gender]',address = '$_POST[address]',age = '$_POST[age]',state = '$_POST[state]'";

$query_run = mysqli_query($con,$query);
?>
<script type="text/javascript">
    alert("updated Successfully");
    window.location.href = "edit_stu_form.php";
</script>