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
                    <h4 class="text-center font-weight-light">All Projects</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name Of the Project</th>
                            <th>Category</th>
                            <th>User Id</th>
                            <th>Published Year</th>
                            <th>Author Name</th>
                            <th>View</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $project = \App\Model\Project::all(); ?>
                         <?php foreach ($project as $project_item):?>
                            <tr>
                                <td><?php echo $project_item->id; ?></td>
                                <td><?php echo $project_item->title; ?></td>
                                <td><?php echo $project_item->category; ?></td>
                                <td><?php echo $project_item->user_id; ?></td>
                                <td><?php echo $project_item->year; ?></td>
                                <td><?php echo $project_item->author_name; ?></td>
                                <td>
                                    <a href="view.php?id=<?php echo $project_item->id; ?>" class="btn btn-info btn-sm">View</a>
                                </td>
                            </tr>
                         <?php endforeach; ?>
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
