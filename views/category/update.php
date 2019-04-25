<?php use App\Model\Category;


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
            <div class="card mt-3  mx-auto">
                <div class="card-header">
                    <h4 class="card-title text-center">Update the Project Categories</h4>
                </div>
                <?php require_once __DIR__.'/../partials/_notification.php'; ?>
                <?php
                $id = (int) $_GET['id'];

                $category = Category::find($id);

                ?>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="category">Update Category</label>
                            <input type="text" name="update_cat" required value="<?php echo $category->category;  ?>" id="category" class="form-control">
                        </div>
                             <div class="form-group">
                                 <input type="submit" value="Update Category" class="btn btn-block btn-outline-primary">
                        </div>
                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>


        </main>
    </div>
</div>

<?php require_once __DIR__.'/../partials/dash_footer.php'; ?>
