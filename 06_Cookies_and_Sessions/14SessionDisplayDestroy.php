<?php
session_start();

$_SESSION["name"] = "Kavya";

echo "Session Created<br>";
echo "Name: " . $_SESSION["name"] . "<br>";

session_unset();
session_destroy();

echo "Session Destroyed";
?>