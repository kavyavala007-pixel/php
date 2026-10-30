<?php
$conn = mysqli_connect("localhost", "root", "", "company");

if (!$conn) {
    die("Connection failed");
}

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS employee (
    emp_id INT PRIMARY KEY,
    name VARCHAR(50),
    designation VARCHAR(50),
    joining_date DATE
)");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $date = $_POST['date'];

    $sql = "INSERT INTO employee VALUES ('$id', '$name', '$designation', '$date')";

    if (mysqli_query($conn, $sql)) {
        echo "Employee Details Saved Successfully<br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<html>
<body>

<h2>Employee Details Form</h2>

<form method="post">
    Employee ID: <input type="number" name="id" required><br><br>

    Name: <input type="text" name="name" required><br><br>

    Designation: <input type="text" name="designation" required><br><br>

    Date of Joining: <input type="date" name="date" required><br><br>

    <input type="submit" name="submit" value="Save">
</form>

</body>
</html>

<?php
mysqli_close($conn);
?>

<?php
/*
Database Name: company
Table Name: employee

CREATE DATABASE company;
USE company;

CREATE TABLE employee (
    emp_id INT PRIMARY KEY,
    name VARCHAR(50),
    designation VARCHAR(50),
    joining_date DATE
);
*/
?>