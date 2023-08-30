<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
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
            <div class="table-responsive ">
                <table class="table table-striped table-hover align-middle bg-secondary">
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
                        $username = "root";
                        $password = "";
                        $dbname = "user";

                        // Create a connection
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Edit and Delete operations
                        if (isset($_POST['action'])) {
                            $action = $_POST['action'];
                            $id = $_POST['id'];

                            if ($action === 'edit') {
                                // Handle edit operation
                                // You can retrieve the updated values from the $_POST array and update the database record accordingly
                                // For example:
                                
                                $name = $_POST['fullname'];
                                $gender = $_POST['gender'];
                                $age = $_POST['age'];
                                $nationality = $_POST['nationality'];
                                $typeofoffence = $_POST['typeofoffence'];
                                $casenumber = $_POST['casenumber'];
                                $bailstatus = $_POST['bailstatus'];
                                $jailtime= $_POST['jailtime'];
                              
                                // ... (retrieve other fields)
                                $sql = "UPDATE criminal SET name='$name', gender='$gender', age=$age, nationality='$nationality', typeofoffence='$typeofoffence', casenumber='$casenumber', bailstatus='$bailstatus', jailtime='$jailtime' WHERE id=$id";

                                if ($conn->query($sql) === TRUE) {
                                    // Edit successful
                                } else {
                                    // Error updating record
                                }
                                
                            } elseif ($action === 'delete') {
                                // Handle delete operation
                                $sql = "DELETE FROM criminal WHERE id=$id";
                                if ($conn->query($sql) === TRUE) {
                                    // Delete successful
                                } else {
                                    // Error deleting record
                                }
                            }
                        }

                        // Retrieve data from the database
                        $sql = "SELECT * FROM criminal";
                        $result = $conn->query($sql);

                        while ($row = $result->fetch_assoc()) {
                            ?>
                            
                            <td><?php echo $row['image']; ?></td>
<td><?php echo $row['fullname']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['nationality']; ?></td>
<td><?php echo $row['typeofoffence']; ?></td>
<td><?php echo $row['casenumber']; ?></td>
<td><?php echo $row['bailstatus']; ?></td>

<td><?php echo $row['jailtime']; ?></td>
        
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <input type="hidden" name="action" value="edit">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </form>
                                    <form action="" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <input type="hidden" name="action" value="delete">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <!-- Your table footer content here -->
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
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous">
    </script>
</body>

</html>

<?php
// Close the database connection
$conn->close();
?>
