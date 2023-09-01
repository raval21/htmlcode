`<!DOCTYPE html>
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
      $sql = "SELECT * FROM criminal WHERE id = $id";
      $result = $conn->query($sql);
      
      if ($result->num_rows == 1) {
          $row = $result->fetch_assoc();
          // Display a form for editing
// Display a form for editing
echo "<form action='update_record.php' method='post'>
        <input type='hidden' name='id' value='" . $row['id'] . "'>
        
        
        <!-- Fullname -->
        <input type='text' name='fullname' value='" . $row['fullname'] . "'>
        
        <!-- Gender -->
        <input type='text' name='gender' value='" . $row['gender'] . "'>
        
        <!-- Age -->
        <input type='text' name='age' value='" . $row['age'] . "'>
        
        <!-- Nationality -->
        <input type='text' name='nationality' value='" . $row['nationality'] . "'>
        
        <!-- Type of Offence -->
        <input type='text' name='typeofoffence' value='" . $row['typeofoffence'] . "'>
        
        <!-- Case Number -->
        <input type='text' name='casenumber' value='" . $row['casenumber'] . "'>
        
        <!-- Bail Status -->
        <input type='text' name='bailstatus' value='" . $row['bailstatus'] . "'>
        
        <!-- Jail Time -->
        <input type='text' name='jailtime' value='" . $row['jailtime'] . "'>
        
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
