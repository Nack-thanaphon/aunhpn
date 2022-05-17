<?php include './database/connect.php'; ?>
<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $text = $_POST['search_detail'];
    $arr = array();
    $allresult = 0;

    $stmt = $conn->prepare("SELECT * FROM tbl_news WHERE n_name LIKE ? ");
    $stmt->execute([
        '%' . $text . '%'
    ]);
    $count = $stmt->rowCount();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $allresult += $stmt->rowCount();
    if (true) {
        //tbl 1

        foreach ($result as $row) {
            $items = new stdClass();
            $items->name = $row['n_name'];
            $items->table = "./news.php";

            array_push($arr, $items);
        }

        //tbl2
        $stmt = $conn->prepare("SELECT * FROM tbl_file WHERE f_name LIKE ? ");
        $stmt->execute([
            '%' . $text . '%'
        ]);
        $count = $stmt->rowCount();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $allresult += $stmt->rowCount();
        foreach ($result as $row) {
            $f_id = $row['f_id'];
            $items = new stdClass();
            $items->name = $row['f_name'];
            $items->table = "./photo.php?q=$f_id";
            array_push($arr, $items);
        }
        //tbl3
        $stmt = $conn->prepare("SELECT * FROM tbl_events WHERE title LIKE ? ");
        $stmt->execute([
            '%' . $text . '%'
        ]);
        $count = $stmt->rowCount();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $allresult += $stmt->rowCount();
        foreach ($result as $row) {
            $e_id = $row['et_id'];
            $items = new stdClass();
            $items->name = $row['title'];
            $items->table = "./event.php?q=$e_id";

            array_push($arr, $items);
        }
        //tbl4
        $stmt = $conn->prepare("SELECT * FROM tbl_newsletter WHERE n_title LIKE ? ");
        $stmt->execute([
            '%' . $text . '%'
        ]);
        $count = $stmt->rowCount();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $allresult += $stmt->rowCount();


        foreach ($result as $row) {
            $news_id = $row['id'];
            $items = new stdClass();
            $items->name = $row['n_title'];
            $items->table = "./photo.php?q=$news_id";

            array_push($arr, $items);
        }

        echo "<script>var a = " . json_encode($arr) . "</script>";

        // print_r($arr);
        // echo $arr[0]->$name;
        // print_r($arr[0]);
        // echo $arr[0]->name;
    } else {
    }
} else {
    echo "ไม่มีข้อมูล";
}

?>
<div class="container">
    <div class="row p-0 my-2 m-0 d-flex justify-content-between">
        <div class="col-12 col-md-12 col-sm-12 card py-4 mb-2">

            <div class="">
                <h4 class="pb-3">ผลการค้นหาทั้งหมด : <span class="text-primary"><?php echo $allresult ?></span> รายการ</h4>
                <div class=" p-2  my-1" id="search_result">
                    <div class="row m-0 p-0">

                        <?php
                        $html = '';
                        for ($i = 0; $i < count($arr); $i++) {
                            $html .= '<a href="' . $arr[$i]->table . '" target="blank" class="col-12 card my-2 py-5" >
                                                <span class="badge badge-secondary">topic</span>
                                                <h5>' . $arr[$i]->name . '</h5>
                                                <small>Lorem ipsum dolor sit amet consectetur,..</small>
                                    </a>';
                        }
                        echo $html;
                        ?>

                    </div>
                </div>
                <!-- <div class="btn btn w-100 alert-secondary text-center">Load more..</div> -->
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        var baseUrl = (window.location).href; // You can also use document.URL
        var id = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.info-aun-hpn.com/api/singleactivity.php",
            data: {
                id: id,
            },
            success: function(data) {

                data = data.result;
                console.log(data)

                $('#e_type').append("หัวข้อกิจกรรม : ", data[0].type);
                $('#e_title').append("ชื่อกิจกรรม : ", data[0].title);
                $('#e_detail').append(data[0].detail);
                $('#e_link').append('ลิงค์กิจกรรม :<a href="' + data[0].link +
                    '" target="_blank">Click me</a>');
                $('#e_date').append('วันเดือนปี :', data[0].end_date);
                $('#e_time').append('เวลา :', data[0].start_time, '-', data[0].end_time);
                // $('#news_title').html('<h3 class="p-0 m-0">' + data[0].n_name + '</h3>');
                // $('#news_image').html(
                //     '<img style="object-fit: cover; width:100%;"src="https://info-aun-hpn.com/bos/' +
                //     data[0].n_image + '"></img>');
                // $('#news_detail').html(data[0].n_detail);
                // $('#news_views').html(data[0].n_views);
                // console.log("good", err)

            },

            error: function(err) {
                console.log("bad", err)

            }
        })
    })
</script>
<?php

include 'include/script.php';
include "./include/footer.php"; ?>