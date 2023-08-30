<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit User</title>
  <!-- Include necessary meta tags, stylesheets, and scripts -->
</head>
<body>
  <?php
  $servername = "localhost";
  $username = "root"; // Replace with your database username
  $password = ""; // Replace with your database password
  $dbname = "user"; // Replace with your database name

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if (isset($_GET['id'])) {
      $id = $_GET['id'];
      
      // Fetch data for the selected ID
      $sql = "SELECT * FROM login WHERE id = $id";
      $result = $conn->query($sql);
      
      if ($result->num_rows == 1) {
          $row = $result->fetch_assoc();
          // Display a form for editing
          echo "<form action='update.php' method='post'>
                  <input type='hidden' name='id' value='" . $row['id'] . "'>
                  <input type='text' name='name' value='" . $row['name'] . "'>
                  <input type='password' name='password' value='" . $row['password'] . "'>
                  <input type='submit' value='Update'>
                </form>";
      } else {
          echo "Record not found.";
      }
  }

  $conn->close();
  ?>
</body>
</html>
