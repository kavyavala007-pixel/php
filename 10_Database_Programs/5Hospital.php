<?php
$conn = mysqli_connect("localhost", "root", "", "");

if (!$conn) {
    die("Connection failed");
}

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS Hospital");
mysqli_select_db($conn, "Hospital");

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS hospital (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    beds INT,
    charge FLOAT,
    city VARCHAR(50)
)");

mysqli_query($conn, "INSERT IGNORE INTO hospital VALUES
(1, 'City Hospital', 100, 2000, 'Mumbai'),
(2, 'Life Hospital', 50, 1500, 'Pune'),
(3, 'Care Hospital', 80, 1800, 'Thane')");

$result = mysqli_query($conn, "SELECT * FROM hospital");

echo "<h2>Hospital Details</h2>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Number of Beds: " . $row['beds'] . "<br>";
    echo "Hospitalization Charge Per Day: " . $row['charge'] . "<br>";
    echo "City: " . $row['city'] . "<br><br>";
}

mysqli_close($conn);
?>

<?php
/*
Database Name: Hospital
Table Name: hospital

CREATE DATABASE Hospital;
USE Hospital;

CREATE TABLE hospital (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    beds INT,
    charge FLOAT,
    city VARCHAR(50)
);
*/
?>