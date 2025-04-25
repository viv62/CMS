<?php
  session_start();
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
          <a class="nav-link" href="#">Link</a>
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
            <a class="dropdown-item" href="#">Add Teachers</a>
            <a class="dropdown-item" href="#">Manage Teachers</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <div class="row" style="margin-left:15px;">

    <!-- form for adding new students -->


    <div class="container">
      <div class="row">

        <div class="col-sm">
          <form action="add_stu_data.php" method="POST">

            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
              </div>
              <div class="form-group col-md-6">
                <label>Enrollnment no.</label>
                <input type="text" name = "enroll" class="form-control" placeholder="Enrollnment Number">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label>Mobile no.</label>
                <input type="text" name="mobile" class="form-control" placeholder="Mobile Number">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Session</label>
                <input type="text" name="session" class="form-control">
              </div>

              <div class="form-group col-md-2">
                <label>Age</label>
                <input type="text" name="age" class="form-control">
              </div>

              <div class="form-group col-md-4">
                <label>Gender</label>
                <input type="text" name="gender" class="form-control">
              </div>
              
            </div>

            <div class="form-group">
              <label>Address</label>
              <input type="text" name="address" class="form-control"  placeholder="Area, landmark">
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label>State</label>
                <input type="text" name="state" class="form-control">
              </div>

              <div class="form-group col-md-4">
                <label>Course id</label>
                <input type="text" name="course_id" class="form-control">
              </div>
              <div class="form-group col-md-2">
                <label>Department id</label>
                <input type="text" name="dept_id" class="form-control">
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
          </form>
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