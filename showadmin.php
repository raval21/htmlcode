<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "user"; // Replace with your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the 'login' table
$sql = "SELECT * FROM login";
$result = $conn->query($sql);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . $conn->error);
}
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
    <!-- ... (Your header content here) ... -->
  </header>
  <main>
    <div class="container p-5">
      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
          <thead class="table-light">
            <tr>
              
              <th>UserName</th>
              <th>Password</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <?php
            // Loop through the fetched data and display it in table rows
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='table-secondary'>
                            
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["password"] . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No records found</td></tr>";
            }
            ?>
          </tbody>
          <tfoot>
            <!-- ... (Your table footer content here) ... -->
          </tfoot>
        </table>
      </div>
    </div>
  </main>
  <footer>
    <!-- ... (Your footer content here) ... -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
