<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="container">

    <div class="row m-0 p-0">
        <div class="col-12 col-md-12 col-sm-12 card p-3 p-sm-5 text-sm-center">
            <h6 id="e_type" class="text-secondary"> </h6>
            <h2 class="text-primary font-weight-bold" id="e_title"></h2>
            <small id="e_time">เวลา : </small>
            <small id="e_date" class="">วัน เดือน ปี : </small>

            <hr>
            <div class="py-3 text-left">
                <h5 class="text-primary">รายละเอียดกิจกรรม :</h5>
                <p id="e_detail" class="py-3"></p>
                <h5 class="text-primary">สถานที่ :</h5>
                <p id="e_address" class="py-3">
                <h5 class="text-primary">เอกสารดาวน์โหลด :</h5>
                <div id="e_link"></div>
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
            url: "https://www.info-aun-hpn.com/api/get_download.php",
            data: {},
        }).done(function(data) {
            console.log(data)
            data = data.result;


            $('#file_tbl').append(html);

        }).fail(function() {

        })
    })
</script>
<?php

include 'include/script.php';
include "./include/footer.php"; ?>