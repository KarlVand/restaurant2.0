<?php
// Database connection details (using environment variables set in docker.env)
$host = getenv('MYSQL_HOST') ?: 'localhost';
$username = getenv('MYSQL_ROOT_USER') ?: 'root';
$password = getenv('MYSQL_ROOT_PASSWORD') ?: 'root';
$database = getenv('MYSQL_DATABASE') ?: 'mydb';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = $conn->real_escape_string($_POST['name']);
    $surname = $conn->real_escape_string($_POST['surname']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    // Prepare SQL statement
    $sql = "INSERT INTO contact (name, surname, email, subject, message) VALUES (?, ?, ?, ?, ?)";
    
    // Create a prepared statement
    $stmt = $conn->prepare($sql);
    var_dump($stmt);
    
    gethostbyname($host);
    // Bind parameters to the prepared statement
    $stmt->bind_param("sssss", $name, $surname, $email, $subject, $message);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Thank you for your message. We'll get back to you soon.";
    } else {
        echo "Error: Unable to submit your message. Please try again later.";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>