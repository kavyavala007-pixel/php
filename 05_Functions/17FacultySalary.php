<?php
function calculateSalary($days, $salary)
{
    return $days * $salary;
}

$days = 25;
$salary = 1000;

$total = calculateSalary($days, $salary);

echo "Days Present: " . $days . "<br>";
echo "Salary Per Day: " . $salary . "<br>";
echo "Total Salary: " . $total;
?>