<?php require_once __DIR__.'/../partials/dash_head.php'; ?>
<?php $page = 'uploadproject'; ?>
<body>
<?php require_once __DIR__.'/../partials/dash_nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once __DIR__.'/../partials/dash_sidenav.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <p class="h4 text-danger text-center">Current Date : <?php echo date('d/m/Y'); ?></p>
            <div class="col-6 mx-auto"> </div>

            <div class="display-4 text-center mb-3">Upload Your Project in Project Store</div>
            <div class="card">
                 <div class="card-header">
                      <h4 class="card-title"></h4>
                 </div>
                <?php require_once __DIR__.'/../partials/_notification.php'; ?>
                <div class="card-body">
                    <form action="uploadproject" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="p_name">Name of the Project Title</label>
                            <input type="text" name="title" id="p_name" required placeholder="Name of the title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="p_file">Upload The Project File</label>
                            <input type="file" name="file" id="p_file" required class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" id="category" required class="form-control">
                                <option value="">--Select Category--</option>
                                <?php $categorys = \App\Model\Category::all(); ?>
                                 <?php  foreach ($categorys as $category): ?>
                                       <option value="<?php echo $category->category; ?>"><?php echo $category->category; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="p_year">Published Year</label>
                            <input type="text" required name="year" id="p_year" placeholder="Published Year" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="desc">Project Description</label>
                            <textarea name="desc" id="desc" cols="5" class="form-control" rows="5"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="author_name">Author Name</label>
                            <input type="text" required name="name" id="author_name" placeholder="Author Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="upload_project"  class="btn btn-primary btn-block" value="Upload Project">
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
