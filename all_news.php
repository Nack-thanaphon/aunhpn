<?php include './template/include/header.php'; ?>
<?php include './template/include/navbar.php'; ?>





<div class="container">
    <div class="col-md-12">
        <br />
        <div class="row filter_data">
            <input type="hidden" name="search" class="form-control" id="search" placeholder="Search Here"
                onkeyup="load_data(this.value);" />

        </div>
    </div>
    <div class="row my-5 p-0  d-flex justify-content-between">
        <div class="col-12 col-md-7 card p-3 m-1">
            <h3 class="text-primary">ข่าวสารประจำเดือน</h3>
            <small class="text-secondary">News Update : Asean University Health Promotion Network</small>
            <!-- <div class="col-md-3 text-right"><b>Total Data - <span id="total_data"></span></b></div> -->


            <div class="row my-4 m-0 p-0" id="news_list">

            </div>
            <div class="row m-0 p-0 align-self-center">
                <div id="pagination_link"></div>
                <!-- <div class="col-12 m-0 p-0 m-auto ">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center" style="font-size: 0.8rem;">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
            </div>
        </div>
        <div class="col-12 col-md-4 card p-3 m-1">
            <?php include './template/include/aside.php' ?>
        </div>
    </div>


</div>
<?php include './template/include/script.php'; ?>
<script>
// $(document).ready(function() {
//     $.ajax({
//         type: "GET",
//         dataType: "json",
//         url: "https://www.info-aun-hpn.com/api/get_news.php",
//         data: {},
//         success: function(data) {
//             data = data.result;
//             for (var i = 0; i < data.length; i++) {
//                 news = `
//                 <div class="col-12 col-md-4 p-0 m-0">
//                     <div class="card shadow-sm p-1 m-2">
//                         <img class="card-img-top"
//                             src="https://www.info-aun-hpn.com/bos/${data[i].image}"
//                             alt="">
//                         <div class="card-body m-0 p-1 " style="font-size:1rem;">

//                             <div class="col p-0 m-0 my-1">
//                                 <small class="my-2 m-0 p-0">${data[i].date}</small>
//                             </div>
//                             <div class="col p-0 m-0 pb-3">
//                             <p class="card-title p-2 news">${data[i].name}</p>
//                             </div>

//                             <div class="btn btn-primary  p-0 my-2 w-100">
//                                 <a href="./single_news.php?id=${data[i].id}" class="text-primary" style="text-decoration: none;">
//                                     <p class="m-0 p-1 text-white  text-uppercase">Read more</p>
//                                 </a>
//                             </div>
//                         </div>
//                     </div>
//                 </div>

//        `
//                 $('#news_list').append(news);

//             };

//         },
//         error: function(err) {

//             $('#news').html('-ไม่มีข่าวสาร-');
//         }

//     })

// })

load_data();

function load_data(query = '', page_number = 1) {
    var form_data = new FormData();

    form_data.append('query', query);

    form_data.append('page', page_number);



    $.ajax({
        type: "POST",
        dataType: "json",
        url: "https://www.info-aun-hpn.com/api/process_data.php",
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        success: function(resp) {

            var response = resp.data;

            var news = '';

            var serial_no = 1;

            if (response.length > 0) {
                for (var i = 0; i < response.length; i++) {
                    news += `<div class="col-12 col-md-4 p-0 m-0">
                    <div class="card shadow-sm p-1 m-2">
                        <img class="card-img-top"
                            src="https://www.info-aun-hpn.com/bos/${response[i].image}"
                            alt="">
                        <div class="card-body m-0 p-1 " style="font-size:1rem;">

                            <div class="col p-0 m-0 my-1">
                                <small class="my-2 m-0 p-0">${response[i].date}</small>
                            </div>
                            <div class="col p-0 m-0 pb-3">
                            <p class="card-title p-2 news">${response[i].name}</p>
                            </div>

                            <div class="btn btn-primary  p-0 my-2 w-100">
                                <a href="./single_news.php?id=${response[i].id}" class="text-primary" style="text-decoration: none;">
                                    <p class="m-0 p-1 text-white  text-uppercase">Read more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                `
                    serial_no++;
                    $('#news_list').html(news);

                }

            } else {
                $('#news_list').append('<p class="text-center">No Data Found</p>');
            }


            $('#total_data').html(resp.total_data);

            $('#pagination_link').html(resp.pagination);

        }


    })
}
</script>

<div class="d-none d-sm-block">
    <?php include './template/include/footer.php'; ?>
</div>

</body>