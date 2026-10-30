<html>
<body>

<form method="post">
    Enter a string:
    <input type="text" name="str">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['str'])) {
    $str = $_POST['str'];

    echo "Length: " . strlen($str) . "<br>";
    echo "Uppercase: " . strtoupper($str) . "<br>";
    echo "Lowercase: " . strtolower($str);
}
?>

</body>
</html>