<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
    <div class="container">
        <a href="" class="navbar-brand text-danger">Project Store</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#myCol">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myCol">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="http://localhost/project_store/" class="nav-link text-dark">Home</a></li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link text-dark  dropdown-toggle" id="myDrop" data-toggle="dropdown">Categories</a>
                    <div class="dropdown-menu bg-light">
                        <?php $categorys = \App\Model\Category::all(); ?>
                        <?php foreach ($categorys as $category): ?>
                            <a href="category?category_item=<?php echo $category->category; ?>" class="dropdown-item "><?php echo $category->category; ?></a>
                            <div class="dropdown-divider"></div>
                        <?php endforeach; ?>

                    </div>
                </li>
                <li class="nav-item"><a href="about" class="nav-link text-dark">About Us</a></li>
                <li class="nav-item"><a href="contact" class="nav-link text-dark">Contact Us</a></li>
                <li class="nav-item"><a href="login" class="nav-link text-dark">Login</a></li>
                <li class="nav-item"><a href="register" class="nav-link text-dark">Registration</a></li>
            </ul>
        </div>
    </div>
</nav>