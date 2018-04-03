<?php
error_reporting(0);
session_start();
if (!(isset($_SESSION['email']) or isset($_SESSION['idsuer']))){
	header("location: ../../index.php");
}
?>
