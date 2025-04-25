<?php
$con = mysqli_connect("localhost","root","");

if($con){
    echo "connection successful";
}
else{
    echo "No connection established";
}

mysqli_select_db($con,'lms');

$query = "UPDATE students set name = 'POST[name]'

$query_run = mysqli_query($con,$query);
?>

<script type=text/javascript>
    alert("Updated successfully");
    window.location.href = "user_dashboard.php";
</script>