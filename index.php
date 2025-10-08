<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Real Estate Consultancy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to Our Real Estate Listings</h1>
    <div class="property-list">
        <?php
        $result = $conn->query("SELECT * FROM properties");
        while ($row = $result->fetch_assoc()) {
        ?>
        <div class="property-card">
            <img src="uploads/<?php echo $row['image']; ?>" alt="Property Image">
            <h2><?php echo $row['title']; ?></h2>
            <p><strong>Location:</strong> <?php echo $row['location']; ?></p>
            <p><strong>Price:</strong> ₹<?php echo number_format($row['price']); ?></p>
            <a href="property.php?id=<?php echo $row['id']; ?>">View Details</a>
        </div>
        <?php } ?>
    </div>
</body>
</html>
