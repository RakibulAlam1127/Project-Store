<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/header.php'; ?>
<div class="main-section">
    <?php require_once 'partials/nav.php'; ?>
    <div class="container second-section mt-5 col-4 mx-auto">
        <div class="border border-secondary p-3">
            <p class="display-4 text-center">Sign Up Form</p>
              <?php require_once 'partials/_notification.php'; ?>
            <form action="login" method="post">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" required class="form-control form-control-lg" placeholder="E-mail Address">
                </div>
                <div class="form-group">
                    <label for="comments">Password</label>
                    <input type="password" name="password" value="" id="password" required placeholder="******" class="form-control form-control-lg mb-5">
                </div>
                    <div class="form-group">
                        <input type="checkbox" onclick="myFunction()" id="showpass">
                        <label for="showpass">ShowPassword</label>
                    </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg  btn-block" value="Sign In" name="summit">
                </div>
                <a href="register" class="text-decoration-none">Have No Account?please Sign Up</a>
            </form>
        </div>
    </div>
</div>

<?php require_once 'partials/footer.php'; ?>

