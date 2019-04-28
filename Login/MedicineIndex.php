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
$sql = "SELECT * FROM medicine";
$result = mysqli_query($conn, $sql);

$sqll = "select * from employee";

$resultt = mysqli_query($conn, $sql);
?>

<?php include('header.php') ?>
<style>
    .red{
        color: red;
    }
</style>
<br><br><br>
<div style="background-color: white" class="container">
    <h1 align="center">ALL OF Medicine</h1>
    <hr>
    <a href="Medicine.php" class="btn btn-primary">Add New</a>
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="col-md-6">
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
        <th>SL</th>
        <th>Code</th>
        <th>Employee</th>
        <th>Name</th>
        <th>Tag No</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Taking Date</th>
        <th>Action</th>
        <thead>

        <tbody>
        <?php $i=1; ?>
        <?php while($row = mysqli_fetch_assoc($result)){

            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['code'] ?></td>
                <td>
                    
                </td>

                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['tag_no']?></td>
                <td><?php echo $row['price']?></td>
                <td id="m_quantity"><?php echo $row['quantity']?>
                    <script>
                        $( document ).ready(function() {
                            var quantity = $('#m_quantity').val();
                            if(quantity<10000){
                                $('#m_quantity').addClass("red");
                            }
                        });
                    </script>
                </td>
                <td><?php echo $row['date']?></td>
                <td>
                    <a class="btn btn-warning" href="MedicineView.php?id=<?php echo $row['id'] ?>">view</a>
                    <a class="btn btn-primary" href="MedicineEdit.php?id=<?php echo $row['id'] ?>">edit</a>
                    <a class="btn btn-danger" onclick ="return confirm('Do you want to delete?')" href="MedicineDelete.php?id=<?php echo $row['id'] ?>">delete</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>



<?php include('footer.php') ?>