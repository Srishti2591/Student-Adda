<?php
session_start();
$dbHost = 'localhost';
$dbName = 'myweb';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>