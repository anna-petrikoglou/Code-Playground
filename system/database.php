<?php

error_reporting(E_ALL & ~E_NOTICE);

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "code_playground";

$connection = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
