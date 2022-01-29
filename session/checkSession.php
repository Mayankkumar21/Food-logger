<?php
require_once "../htmlParts/credentials.php";
session_start();
if(!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit;
}

$username=$_SESSION['username'];
$firstName=$_SESSION['firstName'];
$lastName=$_SESSION["lastName"];

?>