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
$sql = "SELECT * FROM animal WHERE id = $id";
$result = mysqli_query($conn, $sql);
$emp= mysqli_fetch_assoc($result);

?>


<?php include('header.php') ?>
<br><br><br>
<div class="container">
    <h3 style="text-align: center; color: #398439">Details OF <b><?php echo $emp['name'] ?></b></h3>
    <div class="row">
        <div style="background-color: white" class="col-md-6 col-md-offset-3">

            <h5><b>Name of Animal:</b></h5>
            <p style="margin-left: 20%"><?php echo $emp['name'] ?></p><br>
            <h5><b>Tag No of Animal:</b></h5>
            <p style="margin-left: 20%"><?php echo $emp['tag_no'] ?></p><br>
            <h5><b>Age of Animal:</b></h5>
            <p style="margin-left: 20%"><?php echo $emp['age'] ?></p><br>
            <h5><b>Gender of Animal:</b></h5>
            <p style="margin-left: 20%"><?php echo $emp['gender'] ?></p><br>
            <h5><b>Weight of Animal:</b></h5>
            <p style="margin-left: 20%"><?php echo $emp['weight'] ?><?php echo $emp['unit']?></p><br>
            <h5><b>Date of Birth:</b></h5>
            <p style="margin-left: 20%"><?php echo $emp['dob'] ?></p><br>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
