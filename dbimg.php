<?php

// Connect to the database
$dsn = 'mysql:host=localhost;dbname=fabnovac';
$username = 'root';
$password = 'root';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}

// Get the image data
$image_filename = $_FILES['image']['name'];
$image_tmp_name = $_FILES['image']['tmp_name'];
$image_filesize = $_FILES['image']['size'];
$image_filetype = $_FILES['image']['type'];

// Prepare the SQL statement
$sql = 'INSERT INTO images (filename, filepath) VALUES (:filename, :filepath)';
$stmt = $pdo->prepare($sql);

// Bind the parameters
$stmt->bindParam(':filename', $image_filename);
$stmt->bindParam(':filepath', $image_filepath);

// Define the image filepath
$image_directory = 'resources/images/';
$image_filepath = $image_directory . $image_filename;

// Move the image to the server
move_uploaded_file($image_tmp_name, $image_filepath);

// Execute the SQL statement
$stmt->execute();

// Close the database connection
$pdo = null;


?>

<button onclick="window.location.href='/';">Back</button>