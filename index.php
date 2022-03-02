<?php include './template/include/header.php'; ?>

<body>
    <?php include './template/include/navbar.php'; ?>
    <section id="heroBanner" class="">
        <div class="container-fluid">
            <div class="hero-slider">
                <div class="bg-color"></div>
                <div class="slider slider-1">
                    <img class="scale-animation" alt=""
                        src="https://fors.mercury-web.co.uk/wp-content/uploads/2021/11/shutterstock_1557313817-scaled.jpg" />
                </div>
                <div class="slider slider-2">
                    <img class="banner" alt=""
                        src="https://fors.mercury-web.co.uk/wp-content/uploads/2021/11/shutterstock_1771208288-scaled.jpg" />
                </div>
            </div>
            <div class="row text-container-outer">
                <div class="col-lg-2 col-md-2 col-sm-12">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 ">
                    <div class="">
                        <div class="row text-container">
                            <div class="col-md-12 col-sm-12 text-container-inner">
                                <h1 class="title text-left">MUGH</h1>
                                <p>Mahidol University Global Health</p>
                                <div class="col-md-12 col-sm-12 text-container-inner d-none d-sm-block p-0">
                                    <p class="paragraph">
                                        In recognition of contribution in healthcare industry as well as its dedication
                                        to
                                        improving life and bringing better health to the society,
                                    <p class="paragraph">
                                        Mahidol University Global
                                        Health (MUGH) was initiated in October 2012 with the aim to bridge the gap
                                        between
                                        interdisciplinary faculties and network with other universities and
                                        organizations at
                                        the national, regional and global levels in the context of global health in
                                        order to
                                        achieve health equity for better health of all.
                                    </p>
                                    </p>
                                    <div class="row text-dark">
                                        <a href="./about.php" class="text-uppercase cta text-center my-2 ">Readmore</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                </div>
            </div>
    </section>
    <div class="date">
        <p><?php echo date("l j  F Y "); ?></p>
    </div>
    <div class="container">
        <div class="row  p-2 m-3">

            <?php include "./template/pages/news-hero.php" ?>

            <?php include "./template/pages/covid.php" ?>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-between p-4 ">
                <div class="col-12 col-md-8">
                    <?php include "./template/pages/news.php" ?>
                </div>
                <div class="col-12 col-sm-4">
                    <?php include "./template/pages/organization.php" ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row  mx-auto">
                <div id="coming" class="col-12 col-sm-12">
                    <h2 class="m-0">Lastest Activity</h2>
                </div>
                <?php include "./template/pages/activity_bar.php"; ?>

            </div>
        </div>
        <?php
        include './template/include/script.php';
        include "./template/include/footer.php"; ?>
</body>