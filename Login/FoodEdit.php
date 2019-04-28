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
$emp= mysqli_fetch_assoc($result);
?>

<?php include('header.php') ?>
<br><br><br>
<div class="container">
    <h3 style="text-align: center; color: #398439">Food Edit</h3>
    <div class="row">
        <div style="background-color: white;" class="col-md-8 col-md-offset-2">

            <form action="FoodUpdate.php?id=<?php echo $emp['id'] ?>" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" value="<?php echo $emp['name'] ?>" name="name" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" value="<?php echo $emp['price'] ?>" name="price" id="price" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="tag">Tag No</label>
                    <input type="number" class="form-control" value="<?php echo $emp['tag'] ?>" name="tag" id="tag" placeholder="Tag No">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" value="<?php echo $emp['quantity'] ?>" name="quantity" id="quantity" placeholder="Quantity">
                </div>

                <div class="form-group">
                    <label for="dob">Delivary Date</label>
                    <input class="form-control" type="date" value="<?php echo $emp['delivery_time'] ?>" name="date" id="date" placeholder="Date Of Delivary">
                </div>

                <button type="submit" class="btn btn-default">update</button>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
