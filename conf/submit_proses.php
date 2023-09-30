<?php
include('./conf/connect.php');

$error = '';
$succes = '';
$name_thing = '';
$nick_thing = '';
$price = '';
$stock = '';

if (isset($_POST['submit'])) {
    $name_thing = $_POST['name_thing'];
    $nick_thing = $_POST['nick_thing'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    if (empty($name_thing) || empty($nick_thing) || empty($price) || empty($stock)) {
        $error = "All fields are required";
    } else {
        $sql = "INSERT INTO $table (name_thing, nick_thing, price, stock) VALUES ('$name_thing', '$nick_thing', '$price', '$stock')";
        $query = mysqli_query($connect, $sql);
        if ($query) {
            $succes = "Data has been inserted";
        } else {
            $error = "Data has not been inserted";
        }
    }
}
?>