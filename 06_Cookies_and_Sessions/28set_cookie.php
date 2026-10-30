<?php
setcookie("name", "Kavya", time() + 3600, "/");

if (isset($_COOKIE["name"])) {
    echo "Cookie Value: " . $_COOKIE["name"];
} else {
    echo "Cookie is set. Refresh the page to display the value.";
}
?>