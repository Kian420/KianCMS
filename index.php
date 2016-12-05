<?php
session_start();
if(file_exists('includes/config.php'))
{
    include 'includes/config.php';
}
else
{
	header("Location: install/");
	die();
}
$conn = new mysqli($servername, $username, $password, $dbname);
$con = new mysqli($servername, $username, $password, $dbnamec);
$acc_resume = new mysqli($servername, $username, $password, $dbnamea);
include('includes/head.php');
include('includes/nav.php');
include('includes/body.php');
include('includes/foot.php');
?>