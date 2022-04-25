<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="container">
    <div class="row my-5 m-2 p-0  d-flex justify-content-between">
        <div class="col-12 col-md-7 card p-3 mb-2">

            <h6 class="text-secondary"> Search Results</h6>

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

        <div class="col-12 col-md-4 card p-3  d-none d-sm-block">
            <?php include './include/aside.php'; ?>
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