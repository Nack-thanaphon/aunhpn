<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<body>
    <input type="hidden" id="web_static" name="c_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
    <div class="container-fluid m-0 p-0 mx-auto mb-3">
        <div class="row m-0 p-0 ">
            <div class="col-12 m-0 p-0">
                <div class="row my-0  m-0 p-0 ">
                    <div class="col-12 col-sm-12 main_card">
                        <div class="row main_card_bg ">
                            <div class="col-12 p-4 p-sm-5 text-white my-auto ">
                                <h1 class="  font-weight-bold ">AUN-HPN</h1>
                                <h5>ASEAN University Network - Health Promotion Network</h5>
                                <p class="my-4">AUN–HPN is a regional network of people and universities working <br> towards a better and healthier society. HPN (Health Promotion Network) <br> is a thematic network of AUN (ASEAN University Network).</p>
                                <br>
                                <a href="./about.php" class="btn btn-primary text-white  col-12 col-sm-3">
                                    <p class="text-uppercase font-weight-bold p-0 m-0">Learn More</p>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-12  my-0  d-none d-sm-block">
                <div class="row " id="banner">
                    <div class="col-12 m-0 p-0 ">
                        <div class="slideshow"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-12 col-sm-6 p-0   my-3  shadow-sm">
                <div class="row bg-light h-100   m-0 p-0 m-1 ">
                    <div class="col-12 py-3 p-sm-4  text-dark  ">
                        <div class="row m-0 p-0 d-flex justify-content-between mb-3">
                            <hr>
                            <div class="col-12  m-0 p-0 text-center">
                                <h5 class="text-uppercase  font-weight-bold p-0 m-0">About us</h5>
                                <small>Our Duty and Responsibility</small>
                                <br>
                                <a href="./about.php">Readmore</a>
                                <img src="./img//bg/Team goals-pana.svg" class="p-3" width="auto" alt="">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6  p-0 pl-0  my-3  shadow-sm">
                <div class="row bg-light h-100  m-0 p-0  m-1">
                    <div class="col-12 py-3 p-sm-4 text-dark  ">
                        <div class="row m-0 p-0 d-flex justify-content-between mb-3">
                            <hr>
                            <div class="col-12  m-0 p-0 text-center ">
                                <h5 class="text-uppercase  font-weight-bold p-0 m-0">Our Member</h5>
                                <small>
                                    30 Core Members and 10 Associate Members
                                </small>
                                <br>
                                <a href="./partners.php">Readmore</a>
                                <img src="./img//bg/Picture1.png" class="p-3" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-12 col-sm-4  p-0 pl-0   my-3 ">
                <div class="row bg-light  h-100 m-0 p-0  patt">
                    <div class="col-12 py-3 p-sm-4  text-dark  ">
                        <div class="row m-0  p-0 d-flex justify-content-center mb-3">
                            <hr>
                            <div class="col-6 text-start m-0 p-0 ">
                                <h5 class="text-uppercase font-weight-bold p-0 m-0">Newsupdate</h5>
                            </div>
                            <div class="col-6 text-right m-0 p-0 ">
                                <a href="./news.php">More</a>
                            </div>
                        </div>
                        <div class="row p-0 m-0 " id="news">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4  p-0 pl-0  pl-sm-3 my-3 ">
                <div class="row bg-light  h-100 m-0 p-0  patt">
                    <div class="col-12 py-3 p-sm-4 text-dark  ">
                        <div class="row m-0 p-0 d-flex justify-content-between mb-3">
                            <hr>
                            <div class="col-6 text-start m-0 p-0 ">
                                <h5 class="text-uppercase font-weight-bold p-0 m-0">Download</h5>
                            </div>
                            <div class="col-6 text-right m-0 p-0 ">
                                <a href="./file.php">More</a>
                            </div>
                        </div>
                        <ul class="" id="download">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4  p-0 pl-0  pl-sm-3 my-3 ">
                <div class="row bg-light  h-100 m-0 p-0  patt">
                    <div class="col-12 py-3 p-sm-4 text-dark  ">
                        <div class="row m-0 p-0 d-flex justify-content-between mb-3">
                            <hr>
                            <div class="col-6 text-start m-0 p-0 ">
                                <h5 class="text-uppercase font-weight-bold p-0 m-0">Activity</h5>
                            </div>
                            <div class="col-6 text-right m-0 p-0 ">
                                <a href="./activity.php">More</a>
                            </div>
                        </div>
                        <ul class="" id="activity">

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-12  p-0   my-3 ">
                <div class="row  h-100 m-0 text-center py-4 ">
                    <div class="col-12 col-sm-8 mx-auto  text-primary  ">
                        <h2 class="font-weight-bold text-uppercase ">FIND</h2>
                        <h4>Find Your Topic As you Want</h4>
                        <small class="text-secondary">Conference Document Activity Newsupdate</small><br>


                        <form id="search" method="POST" class="my-4" action="./search_result.php">
                            <div class="input-group">
                                <input type="text" id="search_detail" name="search_detail" class="form-control py-4 " placeholder="Find this website..">
                            </div>
                            <button class="btn btn-primary col-12 col-md-8 col-sm-8 mx-auto  p-2 my-3 w-100" type="submit" id="search_btn" value="submit" disabled>
                                <small class="fa-solid fa-magnifying-glass">Click here to go</small>
                                <h4 class="font-weight-bold p-0 m-0">
                                    find now
                                </h4>
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
    include "include/script.php";
    include "include/footer.php"; ?>
    <script>
        $('#search_detail').change(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var val = $('#search_detail').val();
            if (val == '') {
                $('#search_btn').attr('Disabled', true);
                return false
            } else {
                $('#search_btn').attr('Disabled', false);
                return true
            }

        });
    </script>
    <script src="services/api/get_activity.js"></script>
    <script src="services/api/get_news.js"></script>
    <script src="services/api/web_stat.js"></script>
    <script src="services/api/get_download.js"></script>
    <script src="services/api/get_newsletter.js"></script>
    <script src="services/api/get_banner.js"></script>
</body>