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
<?php include('header.php') ?>
<?php
$conn = mysqli_connect('localhost','root','','registrations');
$sql = "SELECT * FROM employee";
$resultt = mysqli_query($conn, $sql);
?>

<div class="container">
    <h3 style="text-align: center; color: #398439">Medicine Information</h3>
    <div class="row">
        <div style="background-color: white" class="col-md-8 col-md-offset-2">

            <form action="MedicineInsert.php" method="POST">
                <div class="form-group">
                    <label for="code">Medicine Code</label>
                    <input type="code" class="form-control" name="code" id="code" placeholder="Medicine Code" required>
                </div>
                <div class="form-group">
                    <label for="name">Medicine Name</label>
                    <input type="name" class="form-control" name="name" id="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="tag_no">Tag Number</label>
                    <input type="text" class="form-control" name="tag_no" id="tag_no" placeholder="Tag Number" required>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Price Of medicine" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" class="form-control" name="quantity" id="quantity" placeholder="quantity Of medicine" required>
                </div>
                <div class="form-group">
                    <label for="date">Taking date</label>
                    <input class="form-control" type="date" name="date" id="date" placeholder="Taking Date">
                </div>
                <div class="form-group">
                    <label for="area">Employee:</label>
                    <select class="form-control" id="employee" name="employee" style="width: 100%">
                        <option value="" selected>Select Employee</option>
                        <?php while($row = mysqli_fetch_assoc($resultt)){ ?>
                            <option value="<?php echo $row['id'] ?>" ><?php echo $row['name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
