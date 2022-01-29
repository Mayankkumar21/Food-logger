<?php
require_once "../htmlParts/credentials.php";
$username = file_get_contents('php://input');

session_start();

$_SESSION["username"]=$username;
$_SESSION['firstName'] = 'Mayank';
$_SESSION['lastName'] = 'Kumar';

session_commit();

echo $username;
?>
