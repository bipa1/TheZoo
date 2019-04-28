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
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    echo $id ;
    $conn = mysqli_connect('localhost','root','','registrations');
    $sql= "DELETE FROM food WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        header("Location: FoodIndex.php");
    }
    else {
        echo "not deleted";
    }
}
echo "hei";
?>