<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<div class="container">
<<<<<<< HEAD

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

=======
    <div class="row m-0 p-0">
        <div class="col-12 col-md-12 col-sm-12 card p-3  m-1  text-sm-center" id="download">

        </div>
>>>>>>> 9c55c4d0e8b7133bbf5c3146497b9e5b1bb42145
    </div>
</div>


<script>
    $(document).ready(function() {
        var baseUrl = (window.location).href; // You can also use document.URL
        var id = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);

        $.ajax({
            type: "GET",
            dataType: "json",
<<<<<<< HEAD
            url: "https://www.info-aun-hpn.com/api/get_download.php",
            data: {},
        }).done(function(data) {
            console.log(data)
            data = data.result;


            $('#file_tbl').append(html);

        }).fail(function() {

=======
            url: "https://www.info-aun-hpn.com/api/single_download.php",
            data: {
                id: id,
            },
            success: function(data) {
                data = data.result;


                for (var i = 0; i < data.length; i++) {
                    $fd = `<h6 id="f_type" class="text-secondary"> ${data[i].group}</h6>
                        <h3 class="text-primary font-weight-bold" id="f_title">${data[i].name}</h3>
                        <small id="f_date" class="">วัน เดือน ปี : ${data[i].date}</small>
                        <hr>
                        <div class="row m-0 p-0">
                            <div class="col-8 mx-auto">
                            <a href="https://info-aun-hpn.com/bos/uploads/docs/${data[i].file}" class="btn btn-success w-100" target="blank"><i class="fas fa-arrow-circle-down"></i> Download </a>
                            </div>
                        </div>`
                    $('#download').append($fd);
                };
            },
            error: function(err) {
                console.log("bad", err)
            }
>>>>>>> 9c55c4d0e8b7133bbf5c3146497b9e5b1bb42145
        })
    })
</script>
<?php

include 'include/script.php';
include "./include/footer.php"; ?>