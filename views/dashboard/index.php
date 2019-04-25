
<?php require_once __DIR__.'/../partials/dash_head.php'; ?>
<body>
<?php require_once __DIR__.'/../partials/dash_nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once __DIR__.'/../partials/dash_sidenav.php'; ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10">

            <div class="row mt-3 d-flex justify-content-around">
                <div class="col-md-3 bg-danger">
                    <div class="mt-5 float-md-left">
                        <h5 class="font-weight-light float-left text-light">Share Project</h5> <br>
                        <h2 class="font-weight-light text-light">2</h2>
                    </div>
                    <span class="float-md-right text-warning" style="font-size:100px"><i class="fas fa-share-alt"></i></span>
                </div>

                <div class="col-md-3 bg-info">
                    <div class="mt-5 float-md-left">
                        <h5 class="font-weight-light float-left text-light">Upload Project</h5> <br>
                        <h2 class="font-weight-light text-light">5</h2>
                    </div>
                    <span class="float-md-right text-light" style="font-size:100px"><i class="fas fa-cloud-upload-alt"></i></span>
                </div>

                <div class="col-md-3 bg-success">
                    <div class="mt-5 float-md-left col-md-3">
                        <h5 class="font-weight-light float-left text-light">Ranking</h5> <br>
                        <h2 class="font-weight-light text-light">10</h2>
                    </div>
                    <span class="float-md-right text-danger" style="font-size:100px"><i class="fas fa-medal"></i></span>
                </div>
            </div>
            <hr>
            <div class="col-6 mx-auto">
                <?php require_once __DIR__.'/../partials/_notification.php'; ?>
            </div>


        </main>
    </div>
</div>
<?php require_once __DIR__.'/../partials/dash_footer.php';?>


