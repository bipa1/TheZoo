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

        <div class="container">
            <h3 style="text-align: center; color: #398439">Employee Information</h3>
            <div class="row">
                <div style="background-color: white" class="col-md-8 col-md-offset-2">

            <form action="insert.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" class="form-control" name="name" id="name" placeholder="Name">
                    </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="Phone">Phone</label>
                    <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="area">Area:</label>
                    <select class="form-control" id="area" name="area" style="width: 100%">
                        <option value="" selected>Select Area</option>
                        <option value="A" >A</option>
                        <option value="B" >B</option>
                        <option value="C" >C</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="d_time">Duty Time(Start)</label>
                    <input type="time" class="form-control" name="d_time" id="d_time" placeholder="Duty Time Start">
                </div>
                <div class="form-group">
                    <label for="d_time">Duty Time(End)</label>
                    <input type="time" class="form-control" name="d_timend" id="d_timend" placeholder="Duty Time End">
                </div>
                    <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
            </div>
        </div>

<?php include('footer.php') ?>
