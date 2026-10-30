<?php
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

function upperCase($arr)
{
    return array_map('strtoupper', $arr);
}

function lowerCase($arr)
{
    return array_map('strtolower', $arr);
}

echo "Uppercase:<br>";
print_r(upperCase($Color));

echo "<br><br>Lowercase:<br>";
print_r(lowerCase($Color));
?>