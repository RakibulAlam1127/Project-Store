<?php if ($_SESSION['user']['status'] === 0): ?>
 <nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo DASH_URL;?>">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo DASH_URL;?>profile">
                    <span data-feather="user"></span>
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo DASH_URL;?>myproject">
                    <span data-feather="list"></span>
                    My Projects
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo DASH_URL?>findProject">
                    <span data-feather="search"></span>
                    Find Projects
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo DASH_URL?>uploadproject">
                    <span data-feather="upload"></span>
                    Upload Project
                </a>
            </li>

        </ul>



    </div>
</nav>
<?php else: ?>
<?php require 'admin-side-nav.php'; ?>
<?php endif; ?>