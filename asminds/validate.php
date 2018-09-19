<?php
session_start();
if(empty($_POST["fname"])){
	$_SESSION['fname']= $_POST["fname"];
	header('Location:registration.php?error');
}
	


?>