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
$email= $_POST['email'];
$phone= $_POST['phone'];
$address= $_POST['address'];
$area= $_POST['area'];
$d_time= $_POST['d_time'];
$d_timend= $_POST['d_timend'];


$conn = mysqli_connect('localhost','root','','registrations');
$sql = "UPDATE employee set name='$name', email='$email',phone='$phone',address='$address',area='$area', d_time='$d_time', d_timend = '$d_timend'
WHERE id=$id";
if(mysqli_query($conn, $sql)){
    header("Location: EmployeeIndex.php");
}
?>