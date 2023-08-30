<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM criminal"; // Modify this query according to your table structure
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Rest of your head content -->
</head>

<body>
  <!-- Rest of your HTML body content -->

  <!-- Inside the <tbody> element, use a loop to populate the table rows -->
  <tbody class="table-group-divider">
    <?php
    while ($row = $result->fetch_assoc()) {
      echo '<tr class="table-secondary">';
      echo '<td scope="row"><img src="' . $row["image"] . '" alt=""></td>';
      echo '<td>' . $row["fullname"] . '</td>';
      echo '<td>' . $row["gender"] . '</td>';
      echo '<td>' . $row["age"] . '</td>';
      echo '<td>' . $row["nationality"] . '</td>';
      echo '<td>' . $row["typeofoffence"] . '</td>';
      echo '<td>' . $row["casenumber"] . '</td>';
      echo '<td>' . $row["bailstatus"] . '</td>';
      
      echo '<td>' . $row["jailtime"] . '</td>';
      echo '<td><button><i class="fa-regular fa-pen-to-square">Edit</i></button> <button><i class="fa-solid fa-trash">Delete</i></button></td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</body>

</html>
