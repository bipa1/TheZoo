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
$tag_no= $_POST['tag_no'];
$age= $_POST['age'];
$gender = $_POST['gender'];
$weight= $_POST['weight'];
$unit = $_POST['unit'];
$dob= $_POST['dob'];
$conn = mysqli_connect('localhost','root','','registrations');
$sql = "INSERT INTO animal VALUES(null,'$name','$tag_no','$age','$gender','$weight','$unit','$dob')";
if(mysqli_query($conn, $sql)){
   header("Location: AnimalIndex.php");
}
//else{
//    header("Location: AnimalInsert.php");
//
//}
?>