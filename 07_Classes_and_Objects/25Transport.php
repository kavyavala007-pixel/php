<?php
class Transport
{
    public $name;
    public $type;
    public $fare;

    function setTransport($n, $t, $f)
    {
        $this->name = $n;
        $this->type = $t;
        $this->fare = $f;
    }

    function displayTransport()
    {
        echo "Transport Name: " . $this->name . "<br>";
        echo "Transport Type: " . $this->type . "<br>";
        echo "Fare: " . $this->fare . "<br>";
    }
}

$t1 = new Transport();
$t1->setTransport("Bus", "Public Transport", 50);
$t1->displayTransport();
?>