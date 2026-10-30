<?php
$a = array(1, 2, 3, 4);
$b = array(3, 4, 5, 6);

$union = array_unique(array_merge($a, $b));
echo "Union: ";
print_r($union);

echo "<br>";

$intersection = array_intersect($a, $b);
echo "Intersection: ";
print_r($intersection);
?>