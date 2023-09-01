<?php
// Database connection details
$hostname = "localhost";  // Change this to your database hostname
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "user"; // Change this to your database name

// Establish database connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM criminal";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  body{
    background-image: url(https://wallpaperaccess.com/full/3419067.jpg);
    background-size: cover;
    width: 100%;
    height: 100%;
  }
  .form-control{
    width: 200px;
    display: inline;
  
  }
  .container1{
    margin-top: 50px;
    margin-left: 900px;
    justify-items: end;
  }
  
</style>
</head>

<body>
  <header>
    <div class="container1">
         </header>
  <main>
<div class="container p-5 ">
  <div class="table-responsive">
    <table class="table table-striped
    table-hover	
    
    
    align-middle">
      <thead class="table-light">
        
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Age</th>
          <th>Nationality</th>
          <th>Crime Type</th>
          <th>Case no.</th>
          <th>bailstatus</th>
          <th>Jail Time</th>
            
        </tr>
        </thead>
        <tbody class="table-group-divider bg-secondary">
        <tr class="table-secondary" >
            <tr class="table-secondary" >
          <?php
         while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo '<td><img src="' . $row['image'] . '" alt="Criminal Image" width="100"></td>';
          // ... rest of the table data ...
          
      


            echo "<td>" . $row['fullname'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['nationality'] . "</td>";
            echo "<td>" . $row['typeofoffence'] . "</td>";
            echo "<td>" . $row['casenumber'] . "</td>";
            echo "<td>" . $row['bailstatus'] . "</td>";
            echo "<td>" . $row['jailtime'] . "</td>";
            echo "</tr>";
          }
          ?>
          </tbody>
        <tfoot>
          
        </tfoot>
    </table>
  </div>
  
</div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVee
