<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>
<?php include './database/connect.php'; ?>

<div class="container">
    <div class="row p-0 my-2 m-0 d-flex justify-content-between">
        <div class="col-12 col-md-12 col-sm-12 card  mb-2">

            <h6 class="text-secondary"> Search Results</h6>
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
                    print_r($arr);
                    echo "<p>จำนวนที่ พบ $allresult </p>";
                } else {
                    echo "ไม่มีข้อมูล";
                }
            }

            ?>
            <div class="">
                <h4 class="pb-3">ผลการค้นหาทั้งหมด : <span class="text-primary">10 </span>รายการ</h4>
                <div class="card p-2 patt my-1" id="search_result">
                    <div class="row m-0 p-0">
                        <div class="col-4">
                            <img width="100%" height="100%" src="https://images.unsplash.com/photo-1650805449832-e499f1fe5a4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=996&q=80" alt="">
                        </div>
                        <div class="col-8">
                            <span class="badge badge-secondary">ดาวน์โหลด</span>
                            <h5>Lorem, ipsum dolor.</h5>
                            <small>Lorem ipsum dolor sit amet consectetur,..</small>
                            <br>
                            <small class="text-muted"> 10 dec 2565 </small>
                        </div>
                    </div>

                </div>
                <div class="card p-2 patt my-1" id="search_result">
                    <div class="row m-0 p-0">
                        <div class="col-4">
                            <img width="100%" height="100%" src="https://images.unsplash.com/photo-1650805449832-e499f1fe5a4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=996&q=80" alt="">
                        </div>
                        <div class="col-8">
                            <span class="badge badge-secondary">ดาวน์โหลด</span>
                            <h5>Lorem, ipsum dolor.</h5>
                            <small>Lorem ipsum dolor sit amet consectetur,..</small>
                            <br>
                            <small class="text-muted"> 10 dec 2565 </small>
                        </div>
                    </div>

                </div>
                <div class="card p-2 patt my-1" id="search_result">
                    <div class="row m-0 p-0">
                        <div class="col-4">
                            <img width="100%" height="100%" src="https://images.unsplash.com/photo-1650805449832-e499f1fe5a4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=996&q=80" alt="">
                        </div>
                        <div class="col-8">
                            <span class="badge badge-secondary">ดาวน์โหลด</span>
                            <h5>Lorem, ipsum dolor.</h5>
                            <small>Lorem ipsum dolor sit amet consectetur,..</small>
                            <br>
                            <small class="text-muted"> 10 dec 2565 </small>
                        </div>
                    </div>

                </div>
                <div class="card p-2 patt my-1" id="search_result">
                    <div class="row m-0 p-0">
                        <div class="col-4">
                            <img width="100%" height="100%" src="https://images.unsplash.com/photo-1650805449832-e499f1fe5a4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=996&q=80" alt="">
                        </div>
                        <div class="col-8">
                            <span class="badge badge-secondary">ดาวน์โหลด</span>
                            <h5>Lorem, ipsum dolor.</h5>
                            <small>Lorem ipsum dolor sit amet consectetur,..</small>
                            <br>
                            <small class="text-muted"> 10 dec 2565 </small>
                        </div>
                    </div>

                </div>
                <div class="card p-2 patt my-1" id="search_result">
                    <div class="row m-0 p-0">
                        <div class="col-4">
                            <img width="100%" height="100%" src="https://images.unsplash.com/photo-1650805449832-e499f1fe5a4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=996&q=80" alt="">
                        </div>
                        <div class="col-8">
                            <span class="badge badge-secondary">ดาวน์โหลด</span>
                            <h5>Lorem, ipsum dolor.</h5>
                            <small>Lorem ipsum dolor sit amet consectetur,..</small>
                            <br>
                            <small class="text-muted"> 10 dec 2565 </small>
                        </div>
                    </div>

                </div>
                <div class="card p-2 patt my-1" id="search_result">
                    <div class="row m-0 p-0">
                        <div class="col-4">
                            <img width="100%" height="100%" src="https://images.unsplash.com/photo-1650805449832-e499f1fe5a4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=996&q=80" alt="">
                        </div>
                        <div class="col-8">
                            <span class="badge badge-secondary">ดาวน์โหลด</span>
                            <h5>Lorem, ipsum dolor.</h5>
                            <small>Lorem ipsum dolor sit amet consectetur,..</small>
                            <br>
                            <small class="text-muted"> 10 dec 2565 </small>
                        </div>
                    </div>

                </div>

                <div class="btn btn w-100 alert-secondary text-center">Load more..</div>
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