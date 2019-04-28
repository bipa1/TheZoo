<?php
/**
 * Created by PhpStorm.
 * User: Selim Reza
 * Date: 4/13/2019
 * Time: 7:47 PM
 */
@session_start();
session_destroy();
header('Location:index.php');
?>