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
$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','registrations');
$sql = "SELECT * FROM food WHERE id = $id";
$result = mysqli_query($conn, $sql);
$fd= mysqli_fetch_assoc($result);

?>


<?php include('header.php') ?>
<br><br><br>
<div class="container">
    <h3 style="text-align: center; color: #398439">Details OF <b><?php echo $fd['name'] ?></b></h3>
    <div class="row">
        <div style="background-color: white" class="col-md-6 col-md-offset-3">

            <h5><b>Name of Food:</b></h5>
            <p style="margin-left: 20%"><?php echo $fd['name'] ?></p><br>
            <h5><b>Price of Food:</b></h5>
            <p style="margin-left: 20%"><?php echo $fd['price'] ?></p><br>
            <h5><b>Tag No of Animal:</b></h5>
            <p style="margin-left: 20%"><?php echo $fd['tag'] ?></p><br>
            <h5><b>Quantity :</b></h5>
            <p style="margin-left: 20%"><?php echo $fd['quantity'] ?></p><br>
            <h5><b>Date of Delivary:</b></h5>
            <p style="margin-left: 20%"><?php echo $fd['delivery_time'] ?></p><br>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
