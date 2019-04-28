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
$sql = "SELECT * FROM animal";
$result = mysqli_query($conn, $sql);
?>

<?php include('header.php') ?>
<br><br><br>
<div style="background-color: white" class="container">
    <h1 align="center">ALL OF ANIMAL</h1>
    <hr>
    <a href="Animal.php" class="btn btn-primary">Add New</a>
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
        <th>Tag No</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Weight</th>
        <th>Date of Birth</th>
        <thead>

        <tbody>
        <?php $i=1; ?>
        <?php while($row = mysqli_fetch_assoc($result)){

            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['tag_no']?></td>
                <td><?php echo $row['age']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['weight']?><?php echo $row['unit']?></td>
                <td><?php echo $row['dob']?></td>
                <td>
                    <a class="btn btn-warning" href="AnimalView.php?id=<?php echo $row['id'] ?>">view</a>
                    <a class="btn btn-primary" href="AnimalEdit.php?id=<?php echo $row['id'] ?>">edit</a>
                    <a class="btn btn-danger" onclick ="return confirm('Do you want to delete?')" href="AnimalDelete.php?id=<?php echo $row['id'] ?>">delete</a>
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
