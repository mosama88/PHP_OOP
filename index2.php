<?php require_once('inc/header.php') ?>

<body class="vertical  light rtl ">
    <div class="wrapper">

        <!-- Start nav -->
        <?php require_once('inc/nav.php') ?>
        <!-- End nav -->

        <!-- Start sidebar -->
        <?php require_once('inc/sidebar.php') ?>
        <!-- End sidebar -->
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row align-items-center mb-2">
                            <div class="col">
                                <h2 class="h5 page-title">Welcome!</h2>
                            </div>
                            <div class="col-auto">
                                <form class="form-inline">
                                    <div class="form-group d-none d-lg-inline">
                                        <label for="reportrange" class="sr-only">Date Ranges</label>
                                        <div id="reportrange" class="px-2 py-2 text-muted">
                                            <span class="small"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-sm"><span
                                                class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                                        <button type="button" class="btn btn-sm mr-2"><span
                                                class="fe fe-filter fe-16 text-muted"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>




                        <div class="row">
                            <?php
                            require_once "Account.php";
                            $myAcount = new Account(10, "Osama");
                            var_dump($myAcount);

                            ?>
                        </div>
                    </div> <!-- .col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </main> <!-- main -->
    </div> <!-- .wrapper -->

    <!-- Start Footer -->
    <?php require_once('inc/footer.php') ?>
    <!-- End Footer -->