<?php
$conn = mysqli_connect("localhost", "root", "", "");

if (!$conn) {
    die("Connection failed");
}

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS ShoeMart");
mysqli_select_db($conn, "ShoeMart");

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS shoes (
    id INT PRIMARY KEY,
    company VARCHAR(50),
    size INT,
    quantity INT,
    price FLOAT
)");

mysqli_query($conn, "INSERT IGNORE INTO shoes VALUES
(1, 'Nike', 8, 10, 2500),
(2, 'Puma', 9, 5, 3000),
(3, 'Adidas', 7, 8, 2000)");

echo "<h3>Shoe Records</h3>";

$result = mysqli_query($conn, "SELECT * FROM shoes");

while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Company: " . $row['company'] . "<br>";
    echo "Size: " . $row['size'] . "<br>";
    echo "Quantity: " . $row['quantity'] . "<br>";
    echo "Price: " . $row['price'] . "<br><br>";
}

mysqli_query($conn, "UPDATE shoes SET price = 3500 WHERE id = 2");

echo "Record updated successfully.";

mysqli_close($conn);
?>

<?php
/*
Database Name: ShoeMart
Table Name: shoes

CREATE DATABASE ShoeMart;
USE ShoeMart;

CREATE TABLE shoes (
    id INT PRIMARY KEY,
    company VARCHAR(50),
    size INT,
    quantity INT,
    price FLOAT
);
*/
?>