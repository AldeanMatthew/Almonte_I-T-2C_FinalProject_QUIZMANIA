<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

// Handle registration form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Perform registration logic here (e.g., store user details in a database)
    // Replace the following code with your own registration logic

    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Store the user information in the database
    // Replace 'your_db_connection' with your actual database connection code
    $conn = new mysqli('your_db_host', 'your_db_username', 'your_db_password', 'your_db_name');

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user's information into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to login.php after successful registration
        header("Location: login.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <!-- Add more registration fields as needed -->

        <input type="submit" value="Register">
    </form>
</body>
</html>
