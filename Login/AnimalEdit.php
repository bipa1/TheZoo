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
    <h3 style="text-align: center; color: #398439">Animal Edit</h3>
    <div class="row">
        <div style="background-color: white;" class="col-md-8 col-md-offset-2">

            <form action="AnimalUpdate.php?id=<?php echo $emp['id'] ?>" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" value="<?php echo $emp['name'] ?>" name="name" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="tag_no">Tag Number</label>
                    <input type="number" class="form-control" value="<?php echo $emp['tag_no'] ?>" name="tag_no" id="tag_no" placeholder="Tag Number">
                </div>
                <div class="form-group">
                    <label for="area">Age:</label>
                    <select class="form-control" id="age" name="age" style="width: 100%">
                        <option value="" selected>Select Age</option>
                        <option value="6month to 1 year" >6month to 1 year</option>
                        <option value="1year to 2 year" >1year to 2 year</option>
                        <option value="more than 2 year" >more than 2 year</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="male" <?php echo ($emp['gender']=='male')?'checked':'' ?> > male
                        </label>
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="female" <?php echo ($emp['gender']=='female')?'checked':'' ?> > female
                        </label>
                    </div>
                </div>

                <div class="input-group">
                    <label for="weight">Weight</label>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="number" class="form-control" value="<?php echo $emp['weight'] ?>" name="weight" id="weight" placeholder="Weight">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" id="unit" name="unit" style="width: 100%">
                                <option value="" selected>Unit</option>
                                <option value="kg" >kg</option>
                                <option value="pound" >pound</option>
                                <option value="gm" >gm</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input class="form-control" type="date" value="<?php echo $emp['dob'] ?>" name="dob" id="dob" placeholder="Date Of Birth">
                </div>

                <button type="submit" class="btn btn-default">update</button>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
