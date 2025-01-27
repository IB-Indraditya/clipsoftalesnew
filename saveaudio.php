<?php
// Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Redirect to login page if the user is not logged in
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php#logpg");
    exit();
}

// Directory for uploaded files
$target_dir = "uploads/";

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Update with your database password
$dbname = "clipsoftales"; // Replace with your database name

// Establish database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for database connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_FILES['file']['tmp_name'])) {
    // Sanitize filename input
    $filename = preg_replace("/[^a-zA-Z0-9_\-\.]/", "", basename($_POST['filename'])); // Remove any invalid characters
    $target_file = $target_dir . $filename;

    // Fetch user email from session
    $email = filter_var($_SESSION['user_email'], FILTER_SANITIZE_EMAIL);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid email format.";
        exit();
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
        // Prepare SQL query to insert file details into the database
        $stmt = $conn->prepare("INSERT INTO contribution (email, recorded) VALUES (?, ?)");
        if (!$stmt) {
            // Handle query preparation error
            http_response_code(500);
            die("SQL error: " . $conn->error);
        }

        // Bind parameters and execute the query
        $stmt->bind_param("ss", $email, $target_file);

        if ($stmt->execute()) {
            echo htmlspecialchars($filename); // Return the filename as response
        } else {
            http_response_code(500);
            echo "Error saving to database.";
        }
        $stmt->close();
    } else {
        http_response_code(500);
        echo "Error saving file.";
    }
} else {
    http_response_code(400);
    echo "No file received.";
}

// Close the database connection
$conn->close();
?>
