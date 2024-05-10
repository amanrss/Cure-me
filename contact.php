<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $message = $_POST["message"];

    // Prepare SQL statement
    $sql = "INSERT INTO contact (name, email, mobile, message) VALUES (?, ?, ?, ?)";
    
    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $mobile, $message);

    // Execute the statement
    if ($stmt->execute()) {
        
// Your form submission handling code here...

// Assuming form submission is successful, redirect to success page
        $successMessage = "Thank you for reaching out to us. We'll get back to you shortly.";
        header("Location: success.php?message=" . urlencode($successMessage));
        exit();


    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
