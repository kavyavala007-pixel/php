<?php
$conn = mysqli_connect("localhost", "root", "", "");

if (!$conn) {
    die("Connection failed");
}

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS Customer");
mysqli_select_db($conn, "Customer");

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS customer (
    id INT PRIMARY KEY,
    name VARCHAR(50)
)");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $action = $_POST['action'];

    setcookie("cname", $name, time() + 3600, "/");

    if ($action == "Add") {
        mysqli_query($conn, "INSERT INTO customer VALUES ('$id', '$name')");
        echo "Customer Added Successfully<br>";
    }

    if ($action == "Update") {
        mysqli_query($conn, "UPDATE customer SET name='$name' WHERE id='$id'");
        echo "Customer Updated Successfully<br>";
    }

    if ($action == "Delete") {
        mysqli_query($conn, "DELETE FROM customer WHERE id='$id'");
        echo "Customer Deleted Successfully<br>";
    }
}

if (isset($_COOKIE['cname'])) {
    echo "Cookie Customer Name: " . $_COOKIE['cname'] . "<br><br>";
}
?>

<html>
<body>

<h2>Customer Form</h2>

<form method="post">
    Customer ID: <input type="number" name="id" required><br><br>
    Customer Name: <input type="text" name="name" required><br><br>

    <button type="submit" name="submit" value="1" onclick="this.form.action.value='Add'">Add</button>
    <button type="submit" name="submit" value="1" onclick="this.form.action.value='Update'">Update</button>
    <button type="submit" name="submit" value="1" onclick="this.form.action.value='Delete'">Delete</button>

    <input type="hidden" name="action" value="Add">
</form>

</body>
</html>

<?php
mysqli_close($conn);
?>

<?php
/*
Database Name: Customer
Table Name: customer

CREATE DATABASE Customer;
USE Customer;

CREATE TABLE customer (
    id INT PRIMARY KEY,
    name VARCHAR(50)
);
*/
?>