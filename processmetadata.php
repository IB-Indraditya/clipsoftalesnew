<?php
if (isset($_GET['file'])) {
    $file = htmlspecialchars($_GET['file']); // Sanitize the filename
    echo "File metadata received. Filename: " . $file;

    // You can now process the file metadata further.
} else {
    echo "No file metadata received.";
}
?>
