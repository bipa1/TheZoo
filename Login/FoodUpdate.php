<?php include('server.php') ?>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "log in first";
    header('location: index.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
<?php
$id= $_GET['id'];
$name= $_POST['name'];
$price= $_POST['price'];
$tag= $_POST['tag'];
$quantity= $_POST['quantity'];
$date= $_POST['date'];

$conn = mysqli_connect('localhost','root','','registrations');
$sql = "UPDATE food set name='$name', price='$price', tag='$tag', quantity='$quantity', delivery_time='$date'
WHERE id=$id";
if(mysqli_query($conn, $sql)){
    header("Location: FoodIndex.php");
}
?>