<?php
session_start();
date_default_timezone_set('Asia/Bangkok');
$servername = "localhost";
$username = "aunhpnac_mugh";
$password = "h4x7PMDq";
// h4x7PMDq

try {
    $conn = new PDO("mysql:host=$servername;dbname=aunhpnac_mugh", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: "
        . $e->getMessage();
}