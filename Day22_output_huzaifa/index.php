<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form method="POST" action="">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Course:</label><br>
        <input type="text" name="course" required><br><br>

        <input type="submit" name="submit" value="Register">
    </form>

    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Database connection
        $conn = new mysqli("localhost", "root", "", "webteam_intern");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Escape form inputs
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $course = $conn->real_escape_string($_POST['course']);

        // Insert data
        $sql = "INSERT INTO students (name, email, course) VALUES ('$name', '$email', '$course')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='color:green;'>Registration successful!</p>";
        } else {
            echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
        }

        // Close connection
        $conn->close();
    }
    ?>
</body>
</html>
