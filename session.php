<?php
include('scripts/db.php');
session_start();

$student_login = $_SESSION['user_login'];
$dzAccessLevel = $_SESSION['user_accessLevel'];
$sessionSql = mysqli_query($con, "SELECT student_index, access_level FROM student WHERE student_index='$student_login'");

$row = mysqli_fetch_array($sessionSql);
$login_Session_studentID = $row["student_index"];
$login_Session_studentAccessLevel = $row["access_level"];
if (!isset($_SESSION['user_login'])) {
    header("location:../index.php");
};
?>
