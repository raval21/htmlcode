<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
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
    
    $image = $_FILES["image"]["name"];
    $fullname = $_POST["fullname"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $nationality = $_POST["nationality"];
    $typeofoffence = $_POST["typeofoffence"];
    $casenumber = $_POST["casenumber"];
    $bailstatus = $_POST["bailstatus"];
    $jailtime = $_POST["jailtime"];
    
    // Prepare and execute the SQL query
    $sql = "INSERT INTO criminal (image, fullname, gender, age, nationality, typeofoffence, casenumber, bailstatus, jailtime)
            VALUES ('$image', '$fullname', '$gender', '$age', '$nationality', '$typeofoffence', '$casenumber', '$bailstatus', '$jailtime')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close the database connection
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("https://wallpaperaccess.com/full/3419067.jpg");
            background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
            
        }

        .form-container {
            background-color: rgba(250, 246, 246, 0.5);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 380px;
    margin-top: 200px;
            
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            color: black;
            display: block;
            font-weight: bold;
            margin-bottom: 8px;

        }

        .form-group input[type="text"],
        .form-group input[type="file"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #080808;
            border-radius: 4px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .form-group textarea {
            resize: vertical;
            
        }

        .form-group button {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #2980b9;
        }
        h2{
         text-align: center;
            color: #080808;
        }
    </style>   
</head>
<body>
    <div class="form-container">
        <h2>Add Criminal</h2>
        <form action="" method="POST" enctype="multipart/form-data">
       

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>
            <div class="form-group">
        
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="fullname" required>
            </div>
       
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>

            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" id="nationality" name="nationality" required>
            </div>

            <div class="form-group">
                <label for="offence-type">Type of Offence:</label>
                <input type="text" id="offence-type" name="typeofoffence" required>
            </div>

            <div class="form-group">
                <label for="case-number">Case/File Number:</label>
                <input type="text" id="case-number" name="casenumber" required>
            </div>

            <div class="form-group">
                <label for="bail-status">Bail Status:</label>
                <input type="radio" id="bail-yes" name="bailstatus" value="yes" required>
                <label for="bail-yes">Yes</label>
                <input type="radio" id="bail-no" name="bailstatus" value="no" required>
                <label for="bail-no">No</label>
            </div>

            <div class="form-group">
                <label for="jail-time">Jail Time:</label>
                <input type="text" id="jail-time" name="jailtime" required>
            </div>

            <div class="form-group">
                <button type="submit">Submit FIR</button>
            </div>
        </form>

    </div>
    
    
</body>
</html>