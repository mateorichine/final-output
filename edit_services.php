<?php
session_start();
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the service to edit from the database
    $query = "SELECT * FROM services WHERE id = '$id'";
    $result = $conn->query($query);
    $service = $result->fetch_assoc();

    // Handle the form submission to update the service
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $imageName = $service['image']; // keep the current image name

        // If a new image is uploaded
        if (!empty($_FILES['image']['tmp_name'])) {
            $targetDir = "uploads/";
            $imageName = basename($_FILES["image"]["name"]);
            $targetFile = $targetDir . $imageName;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Validate if the file is an actual image
            if (!empty($_FILES["image"]["tmp_name"])) {
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if ($check === false) {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

            // Restrict file size and types
            if ($_FILES["image"]["size"] > 2000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            if ($uploadOk === 1) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    // Delete old image from the server if new image uploaded
                    unlink("uploads/" . $service['image']);
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }

        // Update service details in the database
        $updateQuery = "UPDATE services SET title = '$title', description = '$description', image = '$imageName' WHERE id = '$id'";

        if ($conn->query($updateQuery)) {
            echo "Service updated successfully!";
            header("Location: services.php"); // Redirect back to the services page after update
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
} else {
    echo "Invalid service ID.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Service</h1>
        <a href="services.php" class="btn btn-primary mb-3">Back to Services</a>

        <form method="POST" action="edit_service.php?id=<?php echo $id; ?>" enctype="multipart/form-data" class="mb-5">
            <div class="mb-3">
                <label for="title" class="form-label">Service Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="<?php echo $service['title']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" id="description" class="form-control" required><?php echo $service['description']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload New Image (Optional):</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                <p>Current Image: <img src="uploads/<?php echo $service['image']; ?>" alt="Image" width="100"></p>
            </div>

            <button type="submit" name="update" class="btn btn-success">Update Service</button>
        </form>
    </div>

  
</body>
</html>