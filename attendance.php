<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance Tracking - Student Portal</title>
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <header class="bg-dark text-white p-3">
    <div class="container">
      <h1 class="text-center">Student Portal</h1>
      <nav class="text-center">
        <!-- Add navigation links here if needed -->
      </nav>
    </div>
  </header>

  <main class="container mt-4">
    <section class="attendance">
      <h2 class="mb-4">Attendance Tracking</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Date</th>
              <th>Subject</th>
              <th>Attendance Status</th>
            </tr>
          </thead>
          <tbody id="attendance-list">
            <!-- Attendance data will be dynamically added here -->
            <!-- Example:
            <tr>
              <td>2023-07-24</td>
              <td>Mathematics</td>
              <td>Present</td>
            </tr>
            -->
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <footer class="bg-dark text-white text-center p-3 mt-4">
    <p>&copy; 2023 Student Portal. All rights reserved.</p>
  </footer>

  <!-- Add Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
