<?php
  session_start();
 $con = mysqli_connect("localhost","root","");
  if($con){
}
else{
    echo "No connection established";
}
mysqli_select_db($con,"lms");
$name = "";
$enroll = "";
$email = "";
$mobile = "";

$query = "SELECT * FROM students WHERE email='$_SESSION[email]'";
$query_run = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($query_run)){
  $name = $row['name'];
  $enroll = $row['enroll'];
  $mobile = $row['mobile'];
  $email = $row['email'];
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
    <a class="navbar-brand" href="user_dashboard.php">ARKA JAIN University </a>

    <font style="color: white">Welcome : <?php echo $_SESSION['name'];?></font>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      
      <div class="dropdown">
       <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         My profile
     </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="view_profile.php">View Profile</a>
    <a class="dropdown-item" href="edit_profile.php">Edit profile</a>
    <a class="dropdown-item" href="change_pass.php">Change password</a>
  </div>
</div>
        <li class="nav-item active">
          <a class="nav-link" href="logout.php">logout<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- second navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="user_dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="result_form.php">Result</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Marks
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="mid_sem_form.php">Mid semester</a>
            <a class="dropdown-item" href="end_sem_form.php">End semester</a>
          </div>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Assignments
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Show Assignments</a>
            <a class="dropdown-item" href="#">Upload Assignment</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <br><br><br>
  <center><h3><u>Edit Profile Details</u></h3></center><br>

  <div class="container">
  <div class="row">
    <div class="col-md-3">
      
    </div>
    <div class="col-md-6">
    <form action="edit_profile_data.php" method="POST" style="border: 2px solid black; padding:10px;">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" style="border: 1px solid black;" name="name" value="<?php echo $name; ?>">
  </div>
  <div class="form-group">
    <label>Enrollnment Number</label>
    <input type="text" class="form-control" style="border: 1px solid black;" name="enroll" value="<?php echo $enroll; ?>">
  </div>
  <div class="form-group">
    <label >Email id</label>
    <input type="email" style="border: 1px solid black;" class="form-control" name="email" value="<?php echo $email; ?>">
  </div>
  <div class="form-group">
    <label >Mobile</label>
    <input type="text" style="border: 1px solid black;" class="form-control" name="mobile" value="<?php echo $mobile; ?>"><br>

    <button type="submit" class="btn btn-primary">Update</button>
  </div>
  
</form>
    </div>
    <div class="col-md-3">
      
    </div>
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