<?php
$conn = mysqli_connect("localhost", "root", "", "");

if (!$conn) {
    die("Connection failed");
}

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS LaptopHub");
mysqli_select_db($conn, "LaptopHub");

$sql = "CREATE TABLE IF NOT EXISTS laptop (
    model_no INT PRIMARY KEY,
    company VARCHAR(50),
    screen_size FLOAT,
    quantity INT,
    price FLOAT
)";
mysqli_query($conn, $sql);

mysqli_query($conn, "INSERT IGNORE INTO laptop VALUES
(101, 'HP', 15.6, 5, 45000),
(102, 'Dell', 14.0, 3, 50000),
(103, 'Lenovo', 15.0, 4, 40000)");

echo "<h3>Laptop Records</h3>";

$result = mysqli_query($conn, "SELECT * FROM laptop");

while ($row = mysqli_fetch_assoc($result)) {
    echo "Model No: " . $row['model_no'] . "<br>";
    echo "Company: " . $row['company'] . "<br>";
    echo "Screen Size: " . $row['screen_size'] . "<br>";
    echo "Quantity: " . $row['quantity'] . "<br>";
    echo "Price: " . $row['price'] . "<br><br>";
}

mysqli_query($conn, "DELETE FROM laptop WHERE model_no = 102");

echo "Record deleted successfully.";

mysqli_close($conn);
?>

<?php
/*
Database Name: LaptopHub
Table Name: laptop

CREATE DATABASE LaptopHub;

USE LaptopHub;

CREATE TABLE laptop (
    model_no INT PRIMARY KEY,
    company VARCHAR(50),
    screen_size FLOAT,
    quantity INT,
    price FLOAT
);
*/
?>