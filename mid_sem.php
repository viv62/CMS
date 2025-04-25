<?php
  session_start();

  $con = mysqli_connect('localhost','root','');

if($con){

}
else{
    echo "No connection established";
}

mysqli_select_db($con,'lms');

$sub1 ="";
$sub2 ="";
$sub3 ="";
$sub4 ="";


$query = "SELECT * FROM marks WHERE enroll = '$_POST[enroll]'";
$query_run = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $sub1 =$row['sub1'];
    $sub2 =$row['sub2'];
    $sub3 =$row['sub3'];
    $sub4 =$row['sub4'];
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
            <a class="dropdown-item" href="mid_sem.php">Mid semester</a>
            <a class="dropdown-item" href="end_sem.php">End semester</a>
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
  <div class="midsem">
  <br><br><br><br><br>


  <div class="row" style="margin-left:15px;">

    <!-- section for deleting a exiting students -->

    <div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">

    <!-- Table to show the internal marks   -->
    <center><h4><u>Marks for the Mid Semester</u></h4></center>
    <br>

    <table class="table table-striped" border="3">
  <thead>
    <tr>
      <th scope="col">Subjects</th>
      <th scope="col">Full Marks</th>
      <th scope="col">Marks Obtained</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Subject1</th>
      <td>20</td>
      <td><?php echo "$sub1" ?></td>
     
    </tr>
    <tr>
      <th scope="row">Subject2</th>
      <td>20</td>
      <td><?php echo "$sub2" ?></</td>
      
    </tr>
    <tr>
      <th scope="row">Subject3</th>
      <td>20</td>
      <td><?php echo "$sub3" ?></</td>
    
    </tr>
    <tr>
      <th scope="row">Subject4</th>
      <td>20</td>
      <td><?php echo "$sub4" ?></</td>
    
    </tr>
  </tbody>
</table>

    </div>
    <div class="col-sm">
    </div>
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