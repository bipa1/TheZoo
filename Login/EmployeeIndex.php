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
$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

if (isset($_SESSION['username'])) {
    $results = mysqli_query($conn, "select * from users where username ='" . ($_SESSION['username'] . "'"));
}
?>

<?php include('header.php') ?>

<?php $roww = mysqli_fetch_assoc($results); ?>
<br><br><br>
<div style="background-color: white" class="container">

<h1 align="center">ALL OF EMPLOYEE</h1>
<hr>
    <?php
    if($roww['isAdmin']==1){
    ?>
    <a href="Employee.php" class="btn btn-primary">Add New</a>
    <?php }?>

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
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Area</th>
    <th>Duty Time</th>
    <thead>

    <tbody>
   <?php $i=1; ?>
   <?php while($row = mysqli_fetch_assoc($result)){

        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['area']?></td>
            <td><?php echo $row['d_time']?> to <?php echo $row['d_timend']?></td>
            <td>
                <a class="btn btn-warning" href="EmployeeView.php?id=<?php echo $row['id'] ?>">view</a>
                   <?php
                   if($roww['isAdmin']==1){
                    ?>

                <a class="btn btn-primary" href="EmployeeEdit.php?id=<?php echo $row['id'] ?>">edit</a>
                <a class="btn btn-danger" onclick ="return confirm('Do you want to delete?')" href="EmployeeDelete.php?id=<?php echo $row['id'] ?>">delete</a>
                <?php }?>
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
