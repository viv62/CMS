<?php
$con = mysqli_connect('localhost','root','');

if($con){
    echo "connection successful";
}
else{
    echo "No connection established";
}

mysqli_select_db($con,'lms');

$f_id = $_POST['f_id'];

$query="DELETE FROM faculty WHERE f_id='$f_id'";

$query_run = mysqli_query($con,$query);

?>
<script type="text/javascript">
    alert("Removed Successfully");
    window.location.href = "remove_tea_form.php";
</script>