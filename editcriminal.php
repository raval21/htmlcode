<!DOCTYPE html>
<html lang="en">

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      background-image: url(https://wallpaperaccess.com/full/3419067.jpg);
      background-size: cover;
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container p-5 ">
      <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
          <thead class="table-light">
            <tr>
            <th>Image</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Age</th>
          <th>Nationality</th>
          <th>Crime Type</th>
          <th>Case no.</th>
          <th>bail status</th>
          <th>Jail Time</th>
          <th>Actions</th>  
        </tr>
        </thead>
          <tbody class="table-group-divider">
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
            $sql = "SELECT * FROM criminal";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='table-secondary'>

                      
                            <td>" . $row["image"] . "</td>
                            <td>" . $row["fullname"] . "</td>
                            <td>" . $row["gender"] . "</td>
                            <td>" . $row["age"] . "</td>
                            <td>" . $row["nationality"] . "</td>
                            <td>" . $row["typeofoffence"] . "</td>
                            <td>" . $row["casenumber"] . "</td>
                            <td>" . $row["bailstatus"] . "</td>
                            <td>" . $row["jailtime"] . "</td>
                            
                            <td>
                              <a href='edit_record.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>
                              <a href='delete_record.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No records found</td></tr>";
            }

            // Close the connection
            $conn->close();
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
    <!-- place footer here -->
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
 