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
$code= $_POST['code'];
$name= $_POST['name'];
$tag_no= $_POST['tag_no'];
$price= $_POST['price'];
$quantity= $_POST['quantity'];
$date= $_POST['date'];

$conn = mysqli_connect('localhost','root','','registrations');
$sql = "UPDATE medicine set code='$code', name='$name', tag_no='$tag_no',price='$price',quantity='$quantity',date='$date'
WHERE id=$id";
if(mysqli_query($conn, $sql)){
    header("Location: MedicineIndex.php");
}
?>