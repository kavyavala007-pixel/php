<?php
class Shape {
    public function square($side) {
        return $side * $side;
    }

    public function triangle($base, $height) {
        return 0.5 * $base * $height;
    }
}

class Area extends Shape {
}

$obj = new Area();

echo "Area of Square: " . $obj->square(5) . "<br>";
echo "Area of Triangle: " . $obj->triangle(4, 6);
?>