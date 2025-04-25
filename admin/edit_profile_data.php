<?php
$con = mysqli_connect("localhost","root","");

if($con){
    echo "connection successful";
}
else{
    echo "No connection established";
}

mysqli_select_db($con,'lms');

$query = "UPDATE admin SET name = '$_POST[name]',email = '$_POST[email]',mobile = '$_POST[mobile]'";

$query_run = mysqli_query($con,$query);
?>

<script type="text/javascript">
    alert("Updated successfully");
    window.location.href = "admin_dashboard.php";
</script>