<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$result = array_merge_recursive($array1, $array2);

echo "<pre>";
print_r($result);
echo "</pre>";
?>