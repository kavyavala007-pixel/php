<?php
try {
    $a = 10;
    $b = 0;

    if ($b == 0) {
        throw new Exception("Cannot divide by zero");
    }

    echo $a / $b;
} catch (Exception $e) {
    echo $e->getMessage();
}
?>