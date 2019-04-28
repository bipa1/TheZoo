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
$code= $_POST['code'];
$name= $_POST['name'];
$tag_no= $_POST['tag_no'];
$price= $_POST['price'];
$quantity = $_POST['quantity'];
$date= $_POST['date'];
$employee= $_POST['employee'];
$conn = mysqli_connect('localhost','root','','registrations');
$sql = "INSERT INTO medicine VALUES(null,'$code','$name','$tag_no','$price','$quantity','$date', '$employee')";
if(mysqli_query($conn, $sql)){
    header("Location: MedicineIndex.php");
}
//else{
//    header("Location: AnimalInsert.php");
//
//}
?>