
<?php require_once __DIR__ . '/../partials/dash_head.php'; ?>
<body>
<?php require_once __DIR__ . '/../partials/dash_nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once __DIR__ . '/../partials/admin-side-nav.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <p class="display-4 text-center text-success">Welcome <span class="text-danger"><?php echo $_SESSION['user']['username']; ?></span> to the Project Store</p>
            <p class="h4 text-danger text-center">Current Date : <?php echo date('d/m/Y'); ?></p>
            <div class="col-6 mx-auto">
                <?php require_once __DIR__ . '/../partials/_notification.php'; ?>
            </div>



        </main>
    </div>
</div>
<?php require_once __DIR__ . '/../partials/dash_footer.php'; ?>



