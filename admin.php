<!DOCTYPE html>
<html>
<head>
    <title>Admin - Add Property</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add New Property</h1>
    <form action="add_property.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Property Title" required><br>
        <input type="text" name="location" placeholder="Location" required><br>
        <input type="number" name="price" placeholder="Price" required><br>
        <textarea name="description" placeholder="Description" required></textarea><br>
        <input type="file" name="image" accept="image/*" required><br>
        <button type="submit">Add Property</button>
    </form>
</body>
</html>
