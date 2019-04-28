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
$tag_no= $_POST['tag_no'];
$age= $_POST['age'];
$gender= $_POST['gender'];
$weight= $_POST['weight'];
$unit= $_POST['unit'];
$dob= $_POST['dob'];

$conn = mysqli_connect('localhost','root','','registrations');
$sql = "UPDATE animal set name='$name', tag_no='$tag_no',age='$age',gender='$gender',weight='$weight',unit = '$unit', dob='$dob'
WHERE id=$id";
if(mysqli_query($conn, $sql)){
    header("Location: AnimalIndex.php");
}
?>