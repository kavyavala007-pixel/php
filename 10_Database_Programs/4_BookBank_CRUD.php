<html>
<body>

<h2>BookBank</h2>

<form method="post">
    ISBN: <input type="text" name="isbn"><br><br>
    Name: <input type="text" name="name"><br><br>
    Author: <input type="text" name="author"><br><br>
    Publisher: <input type="text" name="publisher"><br><br>
    Copies: <input type="number" name="copies"><br><br>
    Price: <input type="number" name="price"><br><br>

    <input type="submit" name="add" value="Add">
    <input type="submit" name="display" value="Display">
    <input type="submit" name="update" value="Update">
    <input type="submit" name="delete" value="Delete">
</form>

<?php
$conn = mysqli_connect("localhost", "root", "", "BookBank", 3307);

if (isset($_POST['add'])) {
    $sql = "INSERT INTO book_details VALUES
    ('$_POST[isbn]', '$_POST[name]', '$_POST[author]',
    '$_POST[publisher]', '$_POST[copies]', '$_POST[price]')";

    mysqli_query($conn, $sql);
    echo "Book Added";
}

if (isset($_POST['display'])) {
    $result = mysqli_query($conn, "SELECT * FROM book_details");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>" . $row['ISBN'] . " ";
        echo $row['name'] . " ";
        echo $row['author'] . " ";
        echo $row['publisher'] . " ";
        echo $row['copies'] . " ";
        echo $row['price'] . "<br>";
    }
}

if (isset($_POST['update'])) {
    $sql = "UPDATE book_details SET
    name='$_POST[name]',
    author='$_POST[author]',
    publisher='$_POST[publisher]',c
    copies='$_POST[copies]',
    price='$_POST[price]'
    WHERE ISBN='$_POST[isbn]'";

    mysqli_query($conn, $sql);
    echo "Book Updated";
}

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM book_details
    WHERE ISBN='$_POST[isbn]'";

    mysqli_query($conn, $sql);
    echo "Book Deleted";
}

mysqli_close($conn);
?>

</body>
</html>