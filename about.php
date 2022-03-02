<?php include './template/include/header.php'; ?>
<?php include './template/include/navbar.php'; ?>


<div class="container">
    <div class="row">

        <div class="row p-5">

            <div class=" col-md-3 col-12">
                <nav aria-label="">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#">Our Mission</a></li>
                    </ol>
                </nav>
                <div class="position-sticky" style="top: 2rem;">
                    <div class=" mb-3 bg-white text-black rounded">
                        <div class="bg-dark p-3 text-white text-center">
                            <h4 class="fst-italic">Our Mission</h4>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active " id="v-pills-home-tab" data-toggle="pill"
                                    href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Who we are?</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                    role="tab" aria-controls="v-pills-profile" aria-selected="false">What we do?</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                    href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Our Goal?</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                    href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">Our profit?</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 p-3 tab-content" id="v-pills-tabContent">

                <div class=" tab-pane fade show active" id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">

                    <article class="tab-pane well active in active" id="Whoweare">
                        <img width="100%"
                            src="https://images.unsplash.com/photo-1643148636641-fc498af944c2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                            alt="">
                        <h1 class="blog-post-title" id="Whoweare">ภาพรวมงานกลุ่มสุขภาพโลกมหิดล</h1>
                        <br>
                        <h4>In recognition of contribution in healthcare industry as well as its dedication to improving
                            life and bringing better health to the society, Mahidol University Global Health (MUGH) was
                            initiated in October 2012 with the aim to bridge the gap between interdisciplinary faculties
                            and network with other universities and organizations at the national, regional and global
                            levels in the context of global health in order to achieve health equity for better health
                            of all.
                        </h4>
                    </article>

                </div>



                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <article>
                        <h2 class="blog-post-title" id="Whoweare">Who we are?</h2>
                        <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam perspiciatis officia
                            itaque
                            placeat
                            a, ducimus, blanditiis praesentium officiis velit sequi minima quisquam sapiente
                            dignissimos
                            ea
                            quibusdam saepe. Saepe vel asperiores distinctio, inventore recusandae aperiam odit
                            animi,
                            enim
                            blanditiis accusamus nobis, assumenda libero dolor sunt! Nostrum necessitatibus
                            aperiam
                            explicabo nihil quia!</p>
                    </article>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <article>
                        <h2 class="blog-post-title" id="Whoweare">Who we are?</h2>
                        <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam perspiciatis officia
                            itaque
                            placeat
                            a, ducimus, blanditiis praesentium officiis velit sequi minima quisquam sapiente
                            dignissimos
                            ea
                            quibusdam saepe. Saepe vel asperiores distinctio, inventore recusandae aperiam odit
                            animi,
                            enim
                            blanditiis accusamus nobis, assumenda libero dolor sunt! Nostrum necessitatibus
                            aperiam
                            explicabo nihil quia!</p>
                    </article>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <article>
                        <h2 class="blog-post-title" id="Whoweare">Who we are?</h2>
                        <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam perspiciatis officia
                            itaque
                            placeat
                            a, ducimus, blanditiis praesentium officiis velit sequi minima quisquam sapiente
                            dignissimos
                            ea
                            quibusdam saepe. Saepe vel asperiores distinctio, inventore recusandae aperiam odit
                            animi,
                            enim
                            blanditiis accusamus nobis, assumenda libero dolor sunt! Nostrum necessitatibus
                            aperiam
                            explicabo nihil quia!</p>
                    </article>
                </div>
            </div>




            <div class="col-md-3">
                <?php include './template/include/aside.php'; ?>
            </div>
        </div>


    </div>
</div>


<?php

include './template/include/script.php';
include "./template/include/footer.php"; ?>