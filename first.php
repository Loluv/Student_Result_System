<?php
session_start();
include('connect.php');
if (isset($_SESSION['id'])&& $_SESSION['id']==TRUE) {
	header("refresh:2;url=students.php");

	# code...
}else{
	echo "<script>window.alert('Login before accessing page')</script>";
	header('location.index.html');
	exit();
}
?>