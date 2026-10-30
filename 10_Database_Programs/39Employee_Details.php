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
    $joining_date = $_POST['joining_date'];

    $stmt = mysqli_prepare($conn, "INSERT INTO employee VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "isss", $id, $name, $designation, $joining_date);

    if (mysqli_stmt_execute($stmt)) {
        echo "Employee added successfully<br>";
    } else {
        echo "Employee could not be added<br>";
    }

    mysqli_stmt_close($stmt);
}
?>

<form method="post">
    Employee ID: <input type="number" name="id" required><br><br>
    Name: <input type="text" name="name" required><br><br>
    Designation: <input type="text" name="designation" required><br><br>
    Date of Joining: <input type="date" name="joining_date" required><br><br>
    <input type="submit" name="submit" value="Save Employee">
</form>

<h3>Employee Details</h3>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Designation</th>
    <th>Date of Joining</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM employee");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['designation']) . "</td>";
    echo "<td>" . htmlspecialchars($row['joining_date']) . "</td>";
    echo "</tr>";
}

mysqli_close($conn);
?>
</table>