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
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$address= $_POST['address'];
$area= $_POST['area'];
$d_time= $_POST['d_time'];
$d_timend= $_POST['d_timend'];

$conn = mysqli_connect('localhost','root','','registrations');
$sql = "INSERT INTO employee VALUES(null,'$name','$email','$phone','$address','$area','$d_time', '$d_timend')";
if(mysqli_query($conn, $sql)){
    header("Location: EmployeeIndex.php");
}
else{
    header("Location: insert.php");

}
?>