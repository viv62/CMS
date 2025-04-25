<?php
  require('function.php');
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

<body style="background-color: antiquewhite;">

  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">ARKA JAIN University </a>

    <font style="color: white;">Welcome :
      <?php echo $_SESSION['name'];?>
    </font>
    <center  style="color: white; align-item:center;">Email :
      <?php echo $_SESSION['email'];?>
</center>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            My profile
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="view_profile.php">View Profile</a>
            <a class="dropdown-item" href="edit_profile.php">Edit profile</a>
            <a class="dropdown-item" href="change_pass.php">Change password</a>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Marks
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="mid_sem.php">Mid semester</a>
            <a class="dropdown-item" href="end_sem.php">End semester</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Students
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="add_student.php">Add Student</a>
            <a class="dropdown-item" href="remove_student_form.php">Remove Student</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="edit_stu_form.php">Edit students details</a>
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
            <a class="dropdown-item" href="edit_tea_form.php">Edit Teachers details</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <br>

  <div class="row" style="margin-left:15px;">

    <!-- for Registered students -->

    <div class="col-md-3">
      <div class="card" style="width: 18rem; background-color:red">
      <h5 class="card-header">Registered Students</h5>
        <div class="card-body" style="background-color:pink;">
          <br>
          <p class="card-text">Number of Registered student: <?php echo get_reg_stu_count();?></p>
          <br>
          <a href="view_reg_stu.php" class="btn btn-secondary">View Registered Students</a>
        </div>
      </div>
    </div>

      <!-- For Enrolled students -->

    <div class="col-md-3">
      <div class="card" style="width: 18rem; background-color:red">
      <h5 class="card-header">Enrolled Students</h5>
        <div class="card-body" style="background-color:pink;">
          <br>
          <p class="card-text">Number of Enrolled student: <?php echo get_enrolled_stu_count();?></p>
          <br>
          <a href="view_enroll_stu.php" class="btn btn-secondary">View Enrolled Students</a>
        </div>
      </div>
    </div>

      <!-- For Registered teachers -->

    <div class="col-md-3">
      <div class="card" style="width: 18rem; background-color:red">
        <h5 class="card-header">Registered Teachers</h5>
        <div class="card-body" style="background-color:pink;">
          <br>
          <p class="card-text">Number of Registered Teachers: <?php echo get_reg_tea_count();?></p>
          <br>
          <a href="view_reg_tea.php" class="btn btn-secondary">View Registered Teachers</a>
        </div>
      </div>
    </div>

      <!-- For departments -->

    <div class="col-md-3">
      <div class="card" style="width: 18rem; background-color:red">
      <h5 class="card-header">Departments</h5>
        <div class="card-body" style="background-color:pink;">
          <br>
          <p class="card-text">Number of Departments: <?php echo get_dept_count();?></p>
          <br>
          <a href="view_dept.php" class="btn btn-secondary">View Departments</a>
        </div>
      </div>
    </div> 

  </div>
  <br>
  

  <div class="row" style="margin-left:15px;">

    <!-- for courses -->

    <div class="col-md-3"></div>

      <!-- For all courses -->

    <div class="col-md-3">
      <div class="card" style="width: 18rem; background-color:red">
      <h5 class="card-header">Available Courses</h5>
        <div class="card-body" style="background-color:pink;">
          <br>
          <p class="card-text">Number of Courses: <?php echo get_courses_count();?></p>
          <br>
          <a href="view_courses.php" class="btn btn-secondary">View all courses</a>
        </div>
      </div>
    </div>

      <!-- For all subject -->

    <div class="col-md-3">
      <div class="card" style="width: 18rem; background-color:red">
        <h5 class="card-header">Subjects</h5>
        <div class="card-body" style="background-color:pink;">
          <br>
          <p class="card-text">Number of all Subjects: <?php echo get_subject_count();?></p>
          <br>
          <a href="view_subject.php" class="btn btn-secondary">View all Subjects</a>
        </div>
      </div>
    </div>


    <div class="col-md-3"></div>
    
 




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