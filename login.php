<?php
require_once 'LoginControl.php';
session_start();
LoginControl::login();
if ($_SESSION['active'])
{
	header('Location: index.php');
}
?>