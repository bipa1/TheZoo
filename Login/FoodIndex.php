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
$conn = mysqli_connect('localhost','root','','registrations');
$sql = "SELECT * FROM food";
$result = mysqli_query($conn, $sql);
?>

<?php include('header.php') ?>
<br><br><br>
<div style="background-color: white" class="container">
    <h1 align="center">ALL OF Foods</h1>
    <hr>
    <a href="Food.php" class="btn btn-primary">Add New</a>
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="col-md-6">
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
        <th>SL</th>
        <th>Name</th>
        <th>Price</th>
        <th>Tag No</th>
        <th>Quantity</th>
        <th>Date of Delivary</th>
        <th>Action</th>
        <thead>

        <tbody>
        <?php $i=1; ?>
        <?php while($row = mysqli_fetch_assoc($result)){

            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price']?></td>
                <td><?php echo $row['tag']?></td>
                <td><?php echo $row['quantity']?></td>
                <td><?php echo $row['delivery_time']?></td>
                <td>
                    <a class="btn btn-warning" href="FoodView.php?id=<?php echo $row['id'] ?>">view</a>
                    <a class="btn btn-primary" href="FoodEdit.php?id=<?php echo $row['id'] ?>">edit</a>
                    <a class="btn btn-danger" onclick ="return confirm('Do you want to delete?')" href="FoodDelete.php?id=<?php echo $row['id'] ?>">delete</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>
<?php include('footer.php') ?>
