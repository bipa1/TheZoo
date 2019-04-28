<!DOCTYPE html>

<html>
<head>
    <title>The Zoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>

    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">
<style rel="stylesheet">
    a.navbar-brand {
        font-size: 30px;
    }
</style>
</head>
<body>
<!-- Navigation bar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span class="green">The</span> Zoo</a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
            <ul class="navbar-nav nav">
                <li class="dropdown">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">Login<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="../login/register.php">Registration</a></li>
                        <li><a href="../login/login.php">Login</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="EmployeeIndex.php">Employee</a>

                </li>
                <li class="dropdown">
                    <a href="AnimalIndex.php" >Animal</a>

                </li>

                <li class="dropdown">
                    <a  href="MedicineIndex.php" >Medicines</a>
                </li>
                <li class="dropdown">
                    <a  href="FoodIndex.php" >Foods</a>
                </li>
                <li class="dropdown">
                    <a href="logout.php">logout</a>
                </li>

            </ul>
        </nav>
    </div>
</div><!-- End Navigation bar -->
