<?php
  session_start();
  $con = mysqli_connect('localhost','root','');

if($con){

}
else{
    echo "No connection established";
}

mysqli_select_db($con,'lms');
$name ="";
$f_id ="";
$email ="";
$address ="";
$mobile ="";
$salary ="";
$dept_id ="";

$query = "SELECT * FROM faculty WHERE f_id = '$_POST[f_id]'";
$query_run = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $name =$row['name'];
    $f_id =$row['f_id'];
    $email =$row['email'];
    $address =$row['address'];
    $mobile =$row['mobile'];
    $salary =$row['salary'];
    $dept_id =$row['dept_id'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cms</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">ARKA JAIN University </a>

    <font style="color: white">Welcome :
      <?php echo $_SESSION['name'];?>
    </font>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            My profile
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">View Profile</a>
            <a class="dropdown-item" href="#">Edit profile</a>
            <a class="dropdown-item" href="#">Change password</a>
          </div>
        </div>
        <li class="nav-item active">
          <a class="nav-link" href="../logout.php">logout<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
 
  <!-- second navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="admin_dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Marks</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Students
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="add_student.php">Add Student</a>
            <a class="dropdown-item" href="remove_student.php">Remove Student</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="edit_student.php">Edit students details</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Teachers
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="add_teachers.php">Add Teachers</a>
            <a class="dropdown-item" href="remove_tea_form.php">Remove Teachers</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Edit Teachers Details</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  
  <center style="background-color:aqua; height:50px"><h4><u>Add Faculty</u></h4></center><br>
  <div class="container">
  <div class="row">
    <div class="col-sm-2"> </div>
    <div class="col-md-8">

    <form action="edit_tea_data.php" method="POST" style="border:2px solid black; border-radius:8px; padding:20px;">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Name</label>
      <input type="text" name = "name" class="form-control" placeholder="Name" value="<?php echo $name; ?>">
    </div>
    <div class="form-group col-md-6">
      <label>Faculty id</label>
      <input type="text" name = "f_id" class="form-control" placeholder="Faculty id" value="<?php echo $f_id; ?>">
    </div>
  </div>
  <div class="form-group">
    <label>Email id</label>
    <input type="text" name = "email" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name = "address" class="form-control" placeholder="Address" value="<?php echo $address; ?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Mobile No.</label>
      <input type="text" name = "mobile" class="form-control" placeholder="Mobile No." value="<?php echo $mobile; ?>">
    </div>
    <div class="form-group col-md-4">
      <label >Salary</label>
      <input type="text" name = "salary" class="form-control"  placeholder="Salary" value="<?php echo $salary; ?>">
    </div>
    <div class="form-group col-md-2">
      <label>Department id</label>
      <input type="text" name = "dept_id" class="form-control" placeholder="Dept_id" value="<?php echo $dept_id; ?>">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    </div>
    <div class="col-sm-2"></div>
  </div>
</div>


    





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
</body>
</body>

</html>