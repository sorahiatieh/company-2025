<?php
	session_start();
	unset($_SESSION['userLogin']);
	header('location:login.php');