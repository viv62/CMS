<?php
$con = mysqli_connect("localhost","root","");

if($con){
    echo "connection successful";
}
else{
    echo "No connection established";
}

mysqli_select_db($con,'lms');

$query = "UPDATE faculty SET name = '$_POST[name]',f_id = '$_POST[f_id]'email = '$_POST[email]',address = '$_POST[address]',mobile = '$_POST[mobile]',salary = '$_POST[salry]',dept_id = '$_POST[dept_id]'";

$query_run = mysqli_query($con,$query);
?>
<script type="text/javascript">
    alert("Updated successfully");
    window.location.href = "admin_dashboard.php";
</script>