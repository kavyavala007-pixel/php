<?php
class BookBank
{
    public $ISBN, $name, $author, $publisher, $copies, $price;

    function addBook($i, $n, $a, $p, $c, $pr)
    {
        $this->ISBN = $i;
        $this->name = $n;
        $this->author = $a;
        $this->publisher = $p;
        $this->copies = $c;
        $this->price = $pr;
    }

    function displayBook()
    {
        echo "ISBN: $this->ISBN<br>";
        echo "Name: $this->name<br>";
        echo "Author: $this->author<br>";
        echo "Publisher: $this->publisher<br>";
        echo "Copies: $this->copies<br>";
        echo "Price: $this->price<br><br>";
    }

    function searchBook($i)
    {
        if ($this->ISBN == $i) {
            echo "Book Found<br>";
            $this->displayBook();
        } else {
            echo "Book Not Found<br>";
        }
    }
}

$b1 = new BookBank();
$b1->addBook(101, "PHP", "John", "ABC", 10, 300);

$b2 = new BookBank();
$b2->addBook(102, "Java", "James", "XYZ", 5, 400);

echo "<h3>Book Details</h3>";
$b1->displayBook();
$b2->displayBook();

echo "<h3>Search Book</h3>";
$b1->searchBook(101);
?>