<?php include './template/include/header.php'; ?>
<?php include './template/include/navbar.php'; ?>



<div class="container">
    <div class="col-md-12">
        <br />
        <div class="row filter_data">

        </div>
    </div>
    <div class="row my-5 p-0  d-flex justify-content-between">
        <div class="col-12 col-md-7 card p-3 m-1">

            <h3 class="text-primary text-left">ข่าวสารประจำเดือน</h3>
            <h6 id="news_year" class="text-primary"></h6>

            <small class="text-secondary">News Update : Asean University Health Promotion Network</small>
            <!-- <div class="col-md-3 text-right"><b>Total Data - <span id="total_data"></span></b></div> -->
            <input type="hidden" name="search" class="form-control" id="search" placeholder="Search Here"
                onkeyup="load_data(this.value);" />


            <div class="row my-4 m-0 p-0" id="news_result">

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
        <div class="col-12 col-md-4 card p-3 ">
            <?php include './template/include/aside.php' ?>
        </div>
    </div>
</div>



<script>
$(document).ready(function() {
    var baseUrl = (window.location).href; // You can also use document.URL
    var month = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);
    console.log(1)
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: "https://www.info-aun-hpn.com/api/search_news.php",
        data: {
            month: month,
        },
        success: function(data) {


            var html = '';
            for (var i = 0; i < data.length; i++) {
                html += `<div class="col-12 col-md-4 p-0 m-0">
                    <div class="card shadow-sm p-1 m-2">
                        <img class="card-img-top"
                            src="https://www.info-aun-hpn.com/bos/${data[i].image}"
                            alt="">
                        <div class="card-body m-0 p-1 " style="font-size:1rem;">

                            <div class="col p-0 m-0 my-1">
                                <small class="my-2 m-0 p-0">${data[i].date}</small>
                            </div>
                            <div class="col p-0 m-0 pb-3">
                            <p class="card-title news">${data[i].name}</p>
                            </div>

                            <div class="btn btn-primary  p-0 my-1 w-100">
                                <a href="./single_news.php?id=${data[i].id}" class="text-primary" style="text-decoration: none;">
                                    <p class="m-0 p-1 text-white  text-uppercase">Read more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>`;

                $("#news_year").append(data[i].year)
            }
            $("#news_result").append(html)

        },

        error: function(err) {
            console.log("bad", err)

        }
    })
})
</script>



</body>