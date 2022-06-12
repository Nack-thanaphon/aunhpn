<?php include 'include/header.php'; ?>
<?php include 'include/navbar.php'; ?>

<div class="container-fluid">
    <div class="row ">
        <div class="col-12 bg-primary py-5 text-center text-white">
            <div class="py-2">
                <h1>ABOUT US</h1>
            </div>
            <!-- <small>Lorem, ipsum dolor./Lorem, ipsum dolor./Lorem, ipsum dolor./Lorem, ipsum dolor./</small> -->
        </div>
        <div class=" col-md-3 col-12 mt-5">
            <nav aria-label="">
                <ol class="breadcrumb bg-transparent p-0 my-2">
                    <li class="breadcrumb-item"><a href="./">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="#">Our Mission</a></li>

                </ol>
            </nav>
            <div class="position-sticky  mb-5" style="top: 2rem;">
                <div class="text-black rounded">
                    <div class="bg-white shadow-sm p-3 text-white ">
                        <h4 class="fst-italic text-center text-dark">About us</h4>
                        <div class="nav flex-column nav-pills text-start" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active  text-uppercase" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> Our
                                GOAL</a>
                            <a class="nav-link text-uppercase" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Our Mission</a>
                            <a class="nav-link text-uppercase" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Our Objectives</a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-8 mb-5 mx-auto col-12 tab-content" id="v-pills-tabContent">

            <div class=" tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                <article class="tab-pane well active in active" id="Whoweare">
                    <img width="100%" src="./img/mugh.png" alt="">
                    <h2 class="blog-post-title mt-4 text-primary" id="Whoweare">Our Goal</h2>
                    <h6>ASEAN University Network – Health Promotion Network</h6>
                    <br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enhance the strong collaboration among and between health and non-health researchers in the ASEAN
                        region
                        Facilitate capacity-building activities in the area of health promotion to reduce the capacity
                        gap among ASEAN countries
                        Facilitate exchange and mobility for students, university faculty staff and health-care
                        professionals for experiential learning and research collaboration on issues related to health
                        promotion
                        Work collaboratively towards empowering communities for good health in the region
                        Advocate for relevant health policies at national and regional level related to health promotion
                        Minimize the economic burden of health care for the region through health promotion
                        Support network activities for sustainability
                    </p>
                </article>

            </div>



            <div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <article>
                    <h2 class="blog-post-title mt-5 text-primary" id="Whoweare">Our Mission</h2>
                    <h6>ASEAN University Network – Health Promotion Network</h6>
                    <br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To serve as a platform for ASEAN higher education institutions for collaboration among themselves
                        and with other key stakeholders for the purpose of health promotion in the ASEAN region.
                        To share knowledge, skills and resources among the network members in order to build capacity
                        for health promotion and to develop innovative solutions to common health challenges in the
                        region.
                    </p>
                </article>
            </div>
            <div class="tab-pane fade  " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <article>
                    <h2 class="blog-post-title mt-5 text-primary" id="Whoweare">Our Objectives</h2>
                    <p>
                    <p> 1.To provide a discussion platform for stakeholders (policy makers, health care professionals, university students, communities and dialogue partners) involved in health promotion activities within the ASEAN region for intellectual exchange and experience-sharing on the successes, learnings and best practices. </p>
                    <p>2.To document outcomes of current health promotion policies and practices being implemented by participating universities, with a view to promoting effective health promotion policies and practices in cross-border collaboration among ASEAN universities.</p>
                    <p>3.To promote the roles of universities in health promotion, particularly on action-oriented policies that relate to community and public health.</p>
                    <p> 4.To proactively promote platforms for knowledge sharing in the area of health promotion.</p>
                    <p>5.To make recommendations for further development of the collaboration framework on interdisciplinary health promotion in the South East Asian region.</p>
                    </p>
                    </p>
                </article>
            </div>

        </div>

    </div>


</div>



<?php

include 'include/script.php';
include "include/footer.php"; ?>