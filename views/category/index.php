<?php require_once __DIR__.'/../partials/dash_head.php'; ?>
<body>
<?php require_once __DIR__.'/../partials/dash_nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once __DIR__.'/../partials/dash_sidenav.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <p class="h4 text-danger text-center">Current Date : <?php echo date('d/m/Y'); ?></p>
            <div class="col-6 mx-auto"> </div>

            <div class="display-4 text-center mb-3">Create Category of the Project</div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <?php require_once __DIR__.'/../partials/_notification.php'; ?>
                        <div class="form-group">
                            <label for="p_category">Name of the Project Category</label>
                            <input type="text" name="category" required id="p_category" placeholder="Name of the Category" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="add_category"  class="btn btn-info btn-block" value="Add Project Category">
                        </div>
                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>

            <div class="card mt-3">
                 <div class="card-header">
                     <h4 class="card-title text-center">List of the Project Categories</h4>
                 </div>
                <div class="card-body">
                     <table class="table table-striped" id="myTable">
                          <thead>
                              <tr>
                                    <th width="60%">#</th>
                                    <th>Category</th>
                                     <th>Create At</th>
                              </tr>

                          </thead>
                          <tbody>
                          <?php $categories = \App\Model\Category::all();?>
                             <?php foreach ($categories as $category_item):?>
                                    <tr>
                                        <td><?php echo $category_item->id; ?></td>
                                        <td><?php echo $category_item->category; ?></td>
                                        <td><?php echo $category_item->create_at; ?></td>
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
