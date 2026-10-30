<?php
$conn = mysqli_connect("localhost", "root", "", "college");

if (!$conn) {
    die("Connection failed");
}

$sql = "CREATE TABLE IF NOT EXISTS student (
    rollno INT PRIMARY KEY,
    name VARCHAR(50),
    gender VARCHAR(10),
    discipline VARCHAR(50)
)";
mysqli_query($conn, $sql);

if (isset($_POST['submit'])) {
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $discipline = $_POST['discipline'];

    $sql = "INSERT INTO student VALUES ('$rollno', '$name', '$gender', '$discipline')";

    if (mysqli_query($conn, $sql)) {
        echo "Student Registered Successfully<br><br>";
    } else {
        echo "Error: " . mysqli_error($conn) . "<br>";
    }
}
?>

<html>
<body>

<h2>Student Registration</h2>

<form method="post">
    Roll No: <input type="number" name="rollno" required><br><br>

    Name: <input type="text" name="name" required><br><br>

    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Discipline: <input type="text" name="discipline" required><br><br>

    <input type="submit" name="submit" value="Register">
</form>

<h2>Student Records</h2>

<?php
$result = mysqli_query($conn, "SELECT * FROM student");

while ($row = mysqli_fetch_assoc($result)) {
    echo "Roll No: " . $row['rollno'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Gender: " . $row['gender'] . "<br>";
    echo "Discipline: " . $row['discipline'] . "<br><br>";
}
?>

</body>
</html>

<?php
mysqli_close($conn);
?>

<?php
/*
Database Name: college
Table Name: student

CREATE DATABASE college;
USE college;

CREATE TABLE student (
    rollno INT PRIMARY KEY,
    name VARCHAR(50),
    gender VARCHAR(10),
    discipline VARCHAR(50)
);
*/
?>