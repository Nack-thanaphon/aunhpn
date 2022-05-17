<?php include './include/header.php'; ?>
<?php include './include/navbar.php'; ?>

<body>
    <input type="hidden" id="web_static" name="c_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
    <div class="container m-0 p-0 mx-auto mb-3">
        <div class="row m-0 p-0 ">
            <div class="col-12 m-0 p-0">
                <div class="row my-0 my-sm-3 m-0 p-0">
                    <div class="col-12 col-sm-8  main_card">
                        <div class="row main_card_bg ">
                            <div class="col-12 p-4 p-sm-5 text-white  ">
                                <h1 class="  font-weight-bold ">AUN-HPN</h1>
                                <h5>Asean University Network - Health Promotion Network</h5>
                                <p class="my-4">AUN–HPN is a regional network of people and universities working towards a better and healthier society. HPN (Health Promotion Network) is a thematic network of AUN (ASEAN University Network).</p>
                                <br>
                                <a href="./about.php" class="btn btn-primary text-white  col-12 col-sm-3">
                                    <p class="text-uppercase font-weight-bold p-0 m-0">Learn More</p>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-sm-4  p-0 pl-0  pl-sm-3 d-none d-sm-block ">
                        <div class="about_card h-100">
                            <div class="row main_card_bg  h-100 m-0 p-0 patt  ">
                                <div class="col-12 p-5 text-white text-center m-auto ">
                                    <h2 class="text-uppercase   font-weight-bold ">About us</h2>
                                    <small>Our Duty and Responsibility</small>

                                    <a href="./partners.php" class="btn btn-primary w-100 mt-5 p-2 text-center">
                                        <p class="p-0 m-0 text-uppercase font-weight-bold"><i class="fas fa-right"></i>Our Goal</p>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0">
                    <div class="col-12 col-sm-8 my-0  my-sm-3  d-none d-sm-block">
                        <div class="row " id="banner">
                            <div class="col-12 m-0 p-0 ">
                                <div class="slideshow"></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-4  p-0 pl-0  pl-sm-3 my-0 my-sm-3 d-none d-sm-block">
                        <div class="member_card h-100">
                            <div class="row main_card_bg m-0 h-100 p-0 patt text-center">
                                <div class="col-12 m-auto   py-5 py-sm-0  text-white  ">
                                    <h2 class="text-uppercase font-weight-bold ">our member</h2>
                                    <small class="text-light">Asean University Network - Health Promotion Network</small> <br>
                                    <small class="text-light">Membership & Team</small>
                                </div>

                                <div class="col-12 m-auto   py-5 py-sm-0  text-white  ">

                                    <a href="./partners.php" class="btn btn-primary w-100 my-2 py-1 text-center ">
                                        <p class="p-0 m-0 text-uppercase font-weight-bold"><i class="fas fa-users"></i> full member</p>
                                    </a>
                                    <a href="./partners.php" class="btn btn-primary w-100 my-2 py-1 text-center ">
                                        <p class="p-0 m-0 text-uppercase font-weight-bold"><i class="fas fa-user-plus"></i> Associate member</p>
                                    </a>

                                    <br>

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
                                        <a href="./news.php">อ่านทั้งหมด</a>
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
                                        <a href="./file.php">อ่านทั้งหมด</a>
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
                                        <a href="./activity.php">อ่านทั้งหมด</a>
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
                                <h2 class="font-weight-bold text-uppercase ">Search tool</h2>
                                <small class="text-danger">**Coming Soon</small>
                                <form id="search" method="POST" class="my-4" action="./search_result.php">
                                    <div class="input-group">
                                        <input type="text" id="search_detail" name="search_detail" class="form-control py-4 " placeholder="Find this website..">
                                    </div>
                                    <button class="btn btn-primary col-12 col-md-8 col-sm-8 mx-auto  p-2 my-3 w-100" type="submit" id="search_btn" disabled value="submit">
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