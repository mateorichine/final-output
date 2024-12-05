<?php
session_start();
include 'db.php';

if (isset($_POST['delete']) && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Fetch the service image path from the database
    $query = "SELECT image FROM services WHERE id = '$id'";
    $result = $conn->query($query);
    $service = $result->fetch_assoc();

    // Delete the image file from the server
    if ($service) {
        $imagePath = "uploads/" . $service['image'];
        if (file_exists($imagePath)) {
            unlink($imagePath); // Delete the image
        }

        // Delete the service record from the database
        $deleteQuery = "DELETE FROM services WHERE id = '$id'";
        if ($conn->query($deleteQuery)) {
            echo "Service deleted successfully!";
            header("Location: services.php"); // Redirect back to the services page after deletion
            exit();
        } else {
            echo "Error deleting service: " . $conn->error;
        }
    } else {
        echo "Service not found.";
    }
} else {
    echo "Invalid request.";
}
?>