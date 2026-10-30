<?php
setcookie("name", "Kavya", time() + 3600, "/");
if (isset($_COOKIE["name"])) {
    echo "Cookie Value: " . $_COOKIE["name"] . "<br>";
} else {
    echo "Cookie is set. Refresh the page to see its value.<br>";
}
if (isset($_GET["delete"])) {
    setcookie("name", "", time() - 3600, "/");
    echo "Cookie Deleted";
}
?>
<a href="?delete=1">Delete Cookie</a>