<?php
include 'db.php';

$title = $_POST['title'];
$location = $_POST['location'];
$price = $_POST['price'];
$description = $_POST['description'];

// Upload image
$target_dir = "uploads/";
$image_name = basename($_FILES["image"]["name"]);
$target_file = $target_dir . $image_name;
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

// Insert into DB
$stmt = $conn->prepare("INSERT INTO properties (title, location, price, description, image) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssdss", $title, $location, $price, $description, $image_name);
$stmt->execute();

header("Location: index.php");
?>
