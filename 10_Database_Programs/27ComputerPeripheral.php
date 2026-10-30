<?php
$conn = mysqli_connect("localhost", "root", "", "");

if (!$conn) {
    die("Connection failed");
}

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS ComputerPeripheral");
mysqli_select_db($conn, "ComputerPeripheral");

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS peripheral (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    company VARCHAR(50),
    price FLOAT,
    quantity INT
)");

mysqli_query($conn, "INSERT IGNORE INTO peripheral VALUES
(1, 'Mouse', 'Logitech', 500, 10),
(2, 'Keyboard', 'Dell', 1000, 5),
(3, 'Monitor', 'HP', 8000, 3)");

mysqli_query($conn, "UPDATE peripheral SET price = 1200 WHERE id = 2");

mysqli_query($conn, "DELETE FROM peripheral WHERE id = 3");

$result = mysqli_query($conn, "SELECT * FROM peripheral");

echo "<h2>Computer Peripheral Details</h2>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Company: " . $row['company'] . "<br>";
    echo "Price: " . $row['price'] . "<br>";
    echo "Quantity: " . $row['quantity'] . "<br><br>";
}

mysqli_close($conn);
?>

<?php
/*
Database Name: ComputerPeripheral
Table Name: peripheral

CREATE DATABASE ComputerPeripheral;
USE ComputerPeripheral;

CREATE TABLE peripheral (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    company VARCHAR(50),
    price FLOAT,
    quantity INT
);
*/
?>