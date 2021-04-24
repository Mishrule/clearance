<?php
include('scripts/db.php');
session_start();

$staff_login = $_SESSION['user_login'];
$dzAccessLevel = $_SESSION['user_accessLevel'];
$sessionSql = mysqli_query($con, "SELECT staff_id, access_level FROM account WHERE staff_id='$staff_login'");

$row = mysqli_fetch_array($sessionSql);
$login_Session_staffID = $row["staff_id"];
$login_Session_staffAccessLevel = $row["access_level"];
if (!isset($_SESSION['user_login'])) {
    header("location:../index.php");
};
?>
