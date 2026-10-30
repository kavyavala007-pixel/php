<?php
$str = "PHP is easy to learn";
$search = "easy";

if (strpos($str, $search) !== false) {
    echo "String found";
} else {
    echo "String not found";
}
?>