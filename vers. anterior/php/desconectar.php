<?php
session_start();
if ($_SESSION['Atiende']) {
	session_destroy();
	header("location:../index.php");
}else{
	header("location:../index.php");
}
?>