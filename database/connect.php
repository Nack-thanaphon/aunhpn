<?php
session_start();
date_default_timezone_set('Asia/Bangkok');

$servername = "localhost";
$username = "aunhpnac_aunhpn";
$password = "f6e64gq6";
// mughorth_mugh
// f6e64gq6

try {
<<<<<<< HEAD
<<<<<<< HEAD
    $conn = new PDO("mysql:host=$servername;dbname=mugh", $username, $password);
=======
    $conn = new PDO("mysql:host=$servername;dbname=aunhpn", $username, $password);
>>>>>>> 25a4d0f0c7367697b8c8342470052da463c4231d
=======
    $conn = new PDO("mysql:host=$servername;dbname=aunhpnac_aunhpn", $username, $password);
>>>>>>> 9c55c4d0e8b7133bbf5c3146497b9e5b1bb42145
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: "
        . $e->getMessage();
}
