<?php
session_start();
require_once 'db.php'; // Include your database connection file

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login_form.php");
    exit();
}

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Get the ID from the URL and convert it to an integer

    // Prepare a delete statement
    $query = "DELETE FROM book_form WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        // Successfully deleted
        $_SESSION['message'] = "Booking deleted successfully.";
    } else {
        // Error occurred
        $_SESSION['message'] = "Error deleting booking: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
} else {
    $_SESSION['message'] = "No ID provided.";
}

// Close the database connection
$conn->close();

// Redirect back to the check bookings page
header("Location: check.php");
exit();
?>