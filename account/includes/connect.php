<?php
session_start();
$servername = "deepumysql1.mysql.database.azure.com";
$server_user = "deepthi";
$server_pass = "Suchal07052003";
$dbname = "food";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>
