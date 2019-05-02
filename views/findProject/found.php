<?php $page = 'findproject';?>
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

            <?php $count = count($_SESSION['found']); ?>
            <?php if ($count >=1):?>
                <strong><p class="text-danger">Search Result : <?php echo $count; ?></p></strong>
                <table class="table table-responsive table-striped" id="myTable">
                    <thead>
                    <tr>
                        <th>Project Title</th>
                        <th>Category</th>
                        <th>Published Year</th>
                        <th>Author Name</th>
                        <th>Create at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($_SESSION['found'] as $project):?>
                        <tr>
                            <td><?php echo $project->title; ?></td>
                            <td><?php echo $project->category; ?></td>
                            <td><?php echo $project->year; ?></td>
                            <td><?php echo $project->author_name; ?></td>
                            <td><?php echo $project->create_at; ?></td>

                            <td>
                                <a class="btn btn-info btn-sm" href="view.php?id=<?php echo $project->id; ?>">view</a>
                                <a class="btn btn-info btn-primary btn-sm" href="download.php?id=<?php echo $project->id; ?>">download</a>
                            </td>

                        </tr>
                    <?php endforeach;?>
                    </tbody>

                </table>
            <?php else: ?>
            <div class="alert alert-danger">
                <li> Searching Result <?php echo $count; ?> and Not Found</li>
            </div>
            <?php endif;?>

        </main>
    </div>
</div>
<?php require_once __DIR__.'/../partials/dash_footer.php'; ?>





