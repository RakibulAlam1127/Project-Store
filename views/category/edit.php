<?php use Illuminate\Database\Capsule\Manager;
 $page = 'categoryedit';
require_once __DIR__.'/../partials/dash_head.php'; ?>
<body>
<?php require_once __DIR__.'/../partials/dash_nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once __DIR__.'/../partials/dash_sidenav.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <p class="h4 text-danger text-center">Current Date : <?php echo date('d/m/Y'); ?></p>
            <div class="col-6 mx-auto"> </div>

            <div class="display-4 text-center mb-3">Edit Category of the Project</div>


            <div class="card mt-3">
                <div class="card-header">
                    <h4 class="card-title text-center">List of the Project Categories</h4>
                </div>
                <div class="card-body">
                    <?php require_once __DIR__.'/../partials/_notification.php'; ?>
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Create At</th>
                            <th>Action</th>
                        </tr>

                        </thead>
                        <tbody>
                        <?php
                        $user_id =  $_SESSION['user']['id'];

                        $categories = Manager::select('select * from categories where u_id = ?',[$user_id]);
                       ?>
                        <?php foreach ($categories as $category_item):?>
                            <tr>
                                <td><?php echo $category_item->id;?></td>
                                <td><?php echo $category_item->category; ?></td>
                                <td><?php echo $category_item->create_at; ?></td>
                                <td><a href="update?id=<?php echo $category_item->id;?>" class="btn btn-info btn-sm">Edit</a></td>
                            </tr>

                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </main>
    </div>
</div>
<?php require_once __DIR__.'/../partials/dash_footer.php'; ?>
