<?php
session_start();
date_default_timezone_set('Asia/Bangkok');

$servername = "localhost";
$username = "aunhpnac_aunhpn";
$password = "f6e64gq6";
// mughorth_mugh
// f6e64gq6

try {
    $conn = new PDO("mysql:host=$servername;dbname=aunhpnac_aunhpn", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: "
        . $e->getMessage();
}
