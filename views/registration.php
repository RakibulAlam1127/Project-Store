<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/header.php'; ?>
<div class="main-section">
    <?php require_once 'partials/nav.php'; ?>
    <div class="container second-section mt-3 col-6 mx-auto">
         <div class="border border-dark p-3">
             <p class="display-4 text-center">Sign Up Form</p>
             <?php require_once 'partials/_notification.php'; ?>
             <form action="register" method="post" enctype="multipart/form-data">

                 <div class="form-group">
                     <label class="text-info" for="name">Username</label>
                     <input type="text" name="username" id="email" class="form-control form-control-lg" placeholder="Username">
                 </div>

                 <div class="form-group">
                     <label class="text-info" for="email">E-mail</label>
                     <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="E-mail Address" required>
                 </div>
                 <div class="form-group">
                     <label class="text-info" for="password">Password</label>
                     <input type="password" name="password" id="password" placeholder="Enter Password" required class="form-control form-control-lg mb-5">
                 </div>

                 <div class="form-group">
                     <label class="text-info" for="confirm_password">Confirm Password</label>
                     <input type="password" name="confirm_password" id="confirm_password" placeholder="Enter Confirm Password" required class="form-control form-control-lg mb-5">
                 </div>

                 <div class="form-group">
                     <label class="text-info" for="file">Profile Photo</label>
                     <input type="file" name="file" id="file"  required class="form-control-file form-control-lg mb-5">
                 </div>
                 <div class="form-group">
                     <input type="submit" class="btn btn-primary btn-lg  btn-block" value="Sign Up" name="summit">
                 </div>
                 <a href="login" class="text-decoration-none text-right">Have A Account?Please Sign In</a>
             </form>
         </div>
    </div>
</div>

<?php require_once 'partials/footer.php'; ?>
<?php require_once 'partials/footer.php'; ?>
