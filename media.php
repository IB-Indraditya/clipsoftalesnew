<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_email'])) {
    echo "<script>alert('Please log in to contribute.');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
    exit;
}
$target_dir = "uploads/";
$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));

// Generate a unique filename by appending a formatted date and time
$unique_name = date('Ymd_His') . '_' . pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_FILENAME) . '.' . $imageFileType;
$target_file = $target_dir . $unique_name;

$uploadOk = 1;

// Check if the form is submitted
if (isset($_POST["submit"])) {
    $fileMime = mime_content_type($_FILES["fileToUpload"]["tmp_name"]);
    // You can uncomment this to validate MIME types
    // if (strpos($fileMime, 'image/') !== false || strpos($fileMime, 'video/') !== false) {
    //     $uploadOk = 1;
    // } else {
    //     echo "Invalid file type.<br>";
    //     $uploadOk = 0;
    // }
}

// Check file size (limit: 25MB)
if ($_FILES["fileToUpload"]["size"] > 25000000) {
    echo "Sorry, your file is too large.<br>";
    $uploadOk = 0;
}

// Allow certain file formats
$allowedFormats = ['jpg', 'png', 'jpeg', 'gif', 'svg', 'pdf', 'mp4', 'mkv', 'webm', 'avi', 'mp3', 'ogg'];
if (!in_array($imageFileType, $allowedFormats)) {
    echo "Sorry, file extension not allowed.<br>";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.<br>";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($unique_name)) . " has been uploaded.<br>";
        $email=$_SESSION['user_email'];

        // Insert file details into the database
        $con = new mysqli("localhost", "root", "", "clipsoftales");
        // Check the connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Prepare the SQL statement
        $sql = "INSERT INTO contribution (email, media) VALUES (?, ?)";
        $stmt = $con->prepare($sql);
        if (!$stmt) {
            die("Error preparing statement: " . $con->error);
        }

        // Bind parameters and execute
        $upload_time = date('Y-m-d H:i:s');
        $stmt->bind_param("ss", $email, $target_file);

        if ($stmt->execute()) {
            echo "<script>alert('Thank you for your contribution!');</script>";
            echo "<script>window.location.href = 'dashboard.php';</script>";
        } else {
            echo "<script>alert('Thank you for your contribution!');</script>";
            echo "<script>window.location.href = 'dashboard.php';</script>";
        }

        $stmt->close();
        $con->close();
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}

// Display the files from the database
$con = new mysqli("localhost", "root", "", "clipsoftales");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT * FROM contribution";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<h3>Uploaded Files:</h3>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<span style='width:100px;'><img style='width: 10%;' src='" . htmlspecialchars($row['media']) . "'></span>";
    }
    echo "</ul>";
} else {
    echo "No files found.";
}

$con->close();
?>
