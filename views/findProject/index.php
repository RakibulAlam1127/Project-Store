<?php $page = 'findproject'; ?>
<?php require_once __DIR__.'/../partials/dash_head.php'; ?>
<body>
<?php require_once __DIR__.'/../partials/dash_nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once __DIR__.'/../partials/dash_sidenav.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <p class="h4 text-danger text-center">Current Date : <?php echo date('d/m/Y'); ?></p>
            <div class="col-6 mx-auto"> </div>

            <div class="display-4 text-center mb-3">Find Project</div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                <div class="card-body col-mx-7 mx-auto">
                    <form  class="form-inline" action="" method="post">
                        <?php require_once __DIR__.'/../partials/_notification.php'; ?>
                        <div class="form-group">
                            <input type="text" class="form-control mr-3" placeholder="Name of The Project Title">
                            <select name="category" class="form-control mr-3" id="">
                                <option>Select Category</option>
                                <option value="human research">Human Research</option>
                                <option value="Artificial Intelligence">Artificial Intelligence</option>
                                <option value="Bio-informatics">Bio-informatics</option>
                                <option value="Natural language Processing">Natural language Processing</option>
                            </select>
                            <input type="submit" value="Search" class="btn btn-success" name="search">
                        </div>

                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
            <small class="mx-auto col-mx-10 text-danger"><strong>0 Result Found</strong></small>

        </main>
    </div>
</div>
<?php require_once __DIR__.'/../partials/dash_footer.php'; ?>
