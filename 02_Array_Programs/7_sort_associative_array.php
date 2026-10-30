<?php
$arr = array("Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Ramesh"=>"40");

echo "Original Array:<br>";
print_r($arr);

asort($arr);
echo "<br><br>Sort by Values:<br>";
print_r($arr);

ksort($arr);
echo "<br><br>Sort by Keys:<br>";
print_r($arr);
?>