<?php
session_start(); // Start the session to access session variables

if (!isset($_SESSION['user_email'])) {
    echo "User not logged in.";
    exit;
}

if (isset($_GET['type']) && isset($_GET['value'])) {
    $type = $_GET['type'];
    $value = $_GET['value'];
    $email = $_SESSION['user_email']; // Get the logged-in user's email from the session

    // Connect to the database
    $con = new mysqli("localhost", "root", "", "clipsoftales");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    if ($type === 'name') {
        $sql = "UPDATE registration SET fullname = ? WHERE email = ?"; // Update name based on email
    } elseif ($type === 'password') {
        $sql = "UPDATE registration SET cpassword = ? WHERE email = ?"; // Update password based on email
    } else {
        echo "Invalid type.";
        exit;
    }

    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $value, $email); // Bind both the new value and the email address

    if ($stmt->execute()) {
        echo "<script>window.location.href='dashboard.php';</script>";
        echo "<script>alert('Profile Updated !');</script>";
    } else {
        echo "<script>Error updating record: " . $con->error."</script>";
    }

    $stmt->close();
    $con->close();
} else {
    echo "Invalid request.";
}
?>
