<?php
if (($_SESSION['user']['status'] === 0 && ($_SESSION['user_name'] === $_SESSION['user']['username']))): ?>


<?php require_once __DIR__.'/../partials/dash_head.php'; ?>
<body>
<?php require_once __DIR__.'/../partials/dash_nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once __DIR__.'/../partials/dash_sidenav.php'; ?>
         <main role="main" class="col-md-9 ml-sm-auto col-lg-10">
            <hr>
            <div class="col-6 mx-auto">
                <?php require_once __DIR__.'/../partials/_notification.php'; ?>
            </div>
           <div class="row d-flex justify-content-between" style="height: 300px">
               <div class="col-md-10">
                 <?php $user = \App\Model\User::find($_SESSION['user']['id']); ?>
                   <h5 class="font-weight-light"><strong>User Id : </strong><?php echo $user->id; ?></h5>
                   <h5 class="font-weight-light"><strong>Username : </strong><?php echo $user->username; ?></h5>
                   <h5 class="font-weight-light"><strong>E-mail : </strong><?php echo $user->email; ?></h5>
                   <small><strong>Create at : </strong><?php echo $user->create_at; ?></small>
                   <?php print_r($_REQUEST); ?>
                   <br>
                   <br>
                   <a class="btn btn-info" href="">Update Profile</a>
               </div>
               <div class="col-md-2 ">
                   <img src="../media/profile_photo/<?php echo $user->photo; ?>" class="img-thumbnail float-md-right mb-2" alt="Invalid Image">
                   <a href="" class="btn btn-primary">Change Profile Photo</a>
               </div>
           </div>

        </main>
    </div>
</div>
<?php require_once __DIR__.'/../partials/dash_footer.php';?>
<?php else: ?>
    <?php require 'index.php'; ?>
<?php endif; ?>




