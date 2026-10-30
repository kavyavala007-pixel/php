<?php
$conn = mysqli_connect("localhost", "root", "", "");

if (!$conn) {
    die("Connection failed");
}

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS login_db");
mysqli_select_db($conn, "login_db");

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255)
)");

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if ($username == "" || $password == "") {
        echo "Please enter username and password";
    } else {
        $stmt = mysqli_prepare($conn, "INSERT INTO users (username, password) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);

        if (mysqli_stmt_execute($stmt)) {
            echo "User registered successfully";
        } else {
            echo "Username already exists or registration failed";
        }

        mysqli_stmt_close($stmt);
    }
}
?>

<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="submit" value="Sign In">
</form>

<?php
mysqli_close($conn);
?>