<?php
	session_start();
	include('connection.php');

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: index.php');
	}

	$sql = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
	$query = $con->query($sql);
	$user = $query->fetch_assoc();
?>