<?php require_once __DIR__.'/../partials/dash_head.php'; ?>
<body>
<?php require_once __DIR__.'/../partials/dash_nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once __DIR__.'/../partials/dash_sidenav.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <p class="h4 text-danger text-center">Current Date : <?php echo date('d/m/Y'); ?></p>
            <div class="col-6 mx-auto"> </div>
            <div class="card">
                 <div class="card-header">
                     <h4 class="text-center font-weight-light">My Projects</h4>
                 </div>
                <div class="card-body">
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name Of the Project</th>
                            <th>Category</th>
                            <th>Published ID</th>
                            <th>Published Year</th>
                            <th>Author Name</th>
                            <th>Share</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Multi-factor Authentication System</td>
                            <td>Network Security</td>
                            <td>#A784N</td>
                            <td>2018-2019</td>
                            <td>John Smith</td>
                            <td>
                                <a href="share.php" class="btn btn-info btn-sm">Share</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Natural  Language Processing</td>
                            <td>Artificial Intelligence</td>
                            <td>#A784N</td>
                            <td>2017-2019</td>
                            <td>John Alice</td>
                            <td>
                                <a href="share.php" class="btn btn-info btn-sm">Share</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Algorithmic Game Theory and Computational Mechanism Design</td>
                            <td>Artificial Intelligence</td>
                            <td>#A784N</td>
                            <td>2018-2019</td>
                            <td>Mike Bob</td>
                            <td>
                                <a href="share.php" class="btn btn-info btn-sm">Share</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing.</td>
                            <td>Data Mining</td>
                            <td>#A784N</td>
                            <td>2018-2019</td>
                            <td>John Smith</td>
                            <td>
                                <a href="share.php" class="btn btn-info btn-sm">Share</a>
                            </td>
                        </tr>



                        </tbody>
                    </table>
                </div>
                <div class="card-footer">

                </div>
            </div>

        </main>
    </div>
</div>
<?php require_once __DIR__.'/../partials/dash_footer.php'; ?>
