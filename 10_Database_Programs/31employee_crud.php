<?php
$conn = mysqli_connect("localhost", "root", "", "");

if (!$conn) {
    die("Connection failed");
}

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS company");
mysqli_select_db($conn, "company");

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS employee (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    designation VARCHAR(50),
    joining_date DATE
)");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $date = $_POST['date'];
    $action = $_POST['action'];

    if ($action == "Add") {
        mysqli_query($conn, "INSERT INTO employee VALUES ('$id', '$name', '$designation', '$date')");
        echo "Employee Added Successfully<br>";
    }

    if ($action == "Update") {
        mysqli_query($conn, "UPDATE employee SET name='$name', designation='$designation', joining_date='$date' WHERE id='$id'");
        echo "Employee Updated Successfully<br>";
    }

    if ($action == "Delete") {
        mysqli_query($conn, "DELETE FROM employee WHERE id='$id'");
        echo "Employee Deleted Successfully<br>";
    }
}
?>

<html>
<body>

<h2>Employee Details</h2>

<form method="post">
    Employee ID: <input type="number" name="id" required><br><br>
    Name: <input type="text" name="name"><br><br>
    Designation: <input type="text" name="designation"><br><br>
    Date of Joining: <input type="date" name="date"><br><br>

    <select name="action">
        <option value="Add">Add</option>
        <option value="Update">Update</option>
        <option value="Delete">Delete</option>
    </select>

    <input type="submit" name="submit" value="Submit">
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
    id INT PRIMARY KEY,
    name VARCHAR(50),
    designation VARCHAR(50),
    joining_date DATE
);
*/
?>