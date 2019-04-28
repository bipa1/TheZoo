<?php include('server.php') ?>
<?php
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
$price= $_POST['price'];
$tag= $_POST['tag'];
$quantity= $_POST['quantity'];
$date= $_POST['date'];
$employee= $_POST['employee'];

$conn = mysqli_connect('localhost','root','','registrations');
$sql = "INSERT INTO food VALUES(null,'$name','$price','$tag','$quantity','$date', '$employee')";
if(mysqli_query($conn, $sql)){
    header("Location: FoodIndex.php");
}
//else{
//    header("Location: AnimalInsert.php");
//
//}
?>