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
  $sube1 ="";
  $sube2 ="";
  $sube3 ="";
  $sube4 ="";
  
  $query = "SELECT marks.sub1,marks.sub2,marks.sub3,marks.sub4,marksb.sube1,marksb.sube2,marksb.sube3,marksb.sube4 FROM marks JOIN marksb ON marks.enroll=marksb.enroll";
  $query_run = mysqli_query($con,$query);
  while($row = mysqli_fetch_assoc($query_run)){
      $sub1 =$row['sub1'];
      $sub2 =$row['sub2'];
      $sub3 =$row['sub3'];
      $sub4 =$row['sub4'];
      $sube1 =$row['sube1'];
      $sube2 =$row['sube2'];
      $sube3 =$row['sube3'];
      $sube4 =$row['sube4'];
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
          <a class="nav-link" href="#">Home</span></a>
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
  <br>
  <div style="background-color: aqua;"> <center><h3>Final Result</h3></center></div><br>

  <div style="width:100%; font-size: 20px  "><table  border = "5" cellpadding="20" bordercolor = "green"  cellpadding = "10" align = "center">
        <thead>
            <th></th>
            <th colspan = "2">Internal</th>
            <th colspan = "2">External</th>
        </thead>
        <thead>
        <tr>
          <th rowspan = "2">Subject</th>
          <th>Marks obtained</th>
          <th>Full marks</th>
          <th>Marks obtained</th>
          <th>Full marks</th>
        </tr>
        </thead>
        <tbody>
          <tr>
            <th>subject 1</th>
            <td><?php echo "$sub1" ?></td>
            <td>20</td>
            <td><?php echo "$sube1" ?></td>
            <td>80</td>
          </tr>
        </tbody>
        <tbody>
            <tr>
              <th>subject 2</th>
              <td><?php echo "$sub2" ?></td>
              <td>20</td>
              <td><?php echo "$sube2" ?></td>
              <td>80</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th>subject 3</th>
              <td><?php echo "$sub3" ?></td>
              <td>20</td>
              <td><?php echo "$sube3" ?></td>
              <td>80</td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <th>subject 4</th>
              <td><?php echo "$sub4" ?></td>
              <td>20</td>
              <td><?php echo "$sube4" ?></td>
              <td>80</td>
            </tr>
          </tbody>
      </table></div>

    





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