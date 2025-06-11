<?php
// update-status.php

// Database connection (update with your actual connection details)
$host = 'localhost';
$db = 'book_db';
$user = '';
$pass = '';
try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if ID is provided
    if (isset($_POST['id'])) {
        $id = intval($_POST['id']); // Get the ID from the POST data

        // Prepare the UPDATE statement
        $stmt = $pdo->prepare("UPDATE book_form SET status = 1 WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the statement
        if ($stmt->execute()) {
            // Return a success response
            http_response_code(200);
            echo json_encode(["message" => "Item status updated successfully."]);
        } else {
            // Return an error response
            http_response_code(500);
            echo json_encode(["message" => "Failed to update item status."]);
        }
    } else {
        // Return an error response if ID is not provided
        http_response_code(400);
        echo json_encode(["message" => "ID is required."]);
    }
} else {
    // Return a method not allowed response
    http_response_code(405);
    echo json_encode(["message" => "Method not allowed."]);
}
?>