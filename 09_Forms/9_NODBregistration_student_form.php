<html>
<body>

<h2>Student Registration Form</h2>

<form method="get" action="">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Age: <input type="number" name="age"><br><br>
    Course: <input type="text" name="course"><br><br>
    <input type="submit" value="Register">
</form>

<?php
if (isset($_GET['name'])) {
    echo "<h3>Student Details</h3>";
    echo "Name: " . $_GET['name'] . "<br>";
    echo "Email: " . $_GET['email'] . "<br>";
    echo "Age: " . $_GET['age'] . "<br>";
    echo "Course: " . $_GET['course'] . "<br>";
}
?>

</body>
</html>