<?php
require_once 'LoginControl.php';
session_start();
if ($_SESSION['active'])
{
	LoginControl::logout();
	header('Location: index.php');
}
?>
