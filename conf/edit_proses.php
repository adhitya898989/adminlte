<?php
include('./conf/connect.php');

$succes = '';
$error = '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * from $table where id = '$id'";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($query);

if (isset($_POST['update'])) {
    $name_thing = $_POST['name_thing'];
    $nick_thing = $_POST['nick_thing'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    if (!empty($name_thing) || !empty($nick_thing) || !empty($price) || !empty($stock)) {
        $sql = "UPDATE $table SET name_thing = '$name_thing', nick_thing = '$nick_thing', price = '$price', stock = '$stock' WHERE id = $id";
        $query = mysqli_query($connect, $sql);
        if ($query) {
            $succes = "Data has been updated";
            header("refresh:2; url=./edit.php");
        } else {
            $error = "Data has not been updated";
        }
    } else {
        $error = "All fields are required";
    }
}
?>