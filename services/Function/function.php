<?php

function get_visiter($conn)
{
    if (!isset($_COOKIE['visits'])) $_COOKIE['visits'] = 0;
    $visits = $_COOKIE['visits'] + 1;
    if ($visits > 1) {

        $sql = "update tbl_visitor_counter set visitor_counter=visitor_counter+1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}