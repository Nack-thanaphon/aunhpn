<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 86400');

include "../database/connect.php";

function DateThai($strDate)
{
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strMonthCut = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
    $strMonthThai = $strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear";
}



if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $date = array();

    $month = $_POST['month'];

    $query = "SELECT * FROM tbl_news WHERE `n_date` LIKE '%$month%' ";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $c_time = DateThai($row['create_at']);


        $data[] = array(

            "id" => $n_id,
            "name" => $n_name,
            "type" => $n_type,
            "detail" => $n_detail,
            "url" => $url,
            "user_id" => $user_id,
            "image" => $n_image,
            "date" => $c_time,
            "year" => $n_date,
        );
    }
    echo json_encode($data);
    http_response_code(200);
}