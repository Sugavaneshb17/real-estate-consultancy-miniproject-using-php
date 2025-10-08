<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM properties WHERE id = $id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $row['title']; ?> - Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo $row['title']; ?></h1>
    <img src="uploads/<?php echo $row['image']; ?>" width="400">
    <p><strong>Location:</strong> <?php echo $row['location']; ?></p>
    <p><strong>Price:</strong> ₹<?php echo number_format($row['price']); ?></p>
    <p><strong>Description:</strong><br><?php echo nl2br($row['description']); ?></p>
    <a href="index.php">Back to Listings</a>
</body>
</html>
