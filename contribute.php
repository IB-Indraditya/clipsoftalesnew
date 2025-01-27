<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_email'])) {
    echo "<script>alert('Please log in to contribute.');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
    exit;
}

// Check if content is submitted via GET
if (isset($_GET['content']) && !empty($_GET['content'])) {
    $email = $_SESSION['user_email']; // Get user's email from the session
    $content = htmlspecialchars($_GET['content']); // Sanitize the content

    // Connect to the database
    $con = new mysqli("localhost", "root", "", "clipsoftales");

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Insert contribution into the database
    $sql = "INSERT INTO contribution (email, article) VALUES (?, ?)";
    $stmt = $con->prepare($sql);
    if (!$stmt) {
        die("Preparation failed: " . $con->error);
    }

    $stmt->bind_param("ss", $email, $content);

    if ($stmt->execute()) {
        echo "<script>alert('Thank you for your contribution!');</script>";
        echo "<script>window.location.href = 'dashboard.php';</script>";
    } else {
        echo "<script>alert('Error submitting your contribution. Please try again.');</script>";
        echo "<script>window.location.href = 'dashboard.php';</script>";
    }

    $stmt->close();
    $con->close();
} else {
    echo "<script>alert('Please write some content before submitting.');</script>";
    echo "<script>window.location.href = 'dashboard.php';</script>";
}
?>
