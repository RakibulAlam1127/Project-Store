<!--For Showing Errors Messages-->
<?php if(!empty($_SESSION['errors'])): ?>
 <?php foreach ($_SESSION['errors'] as $error):?>
 <div class="alert alert-danger">
       <li><?php echo $error; ?></li>
 </div>
<?php endforeach;?>
  <?php unset($_SESSION['errors']); ?>
<?php endif;?>


<!--For Showing Success Messages-->
<?php if (isset($_SESSION['success'])): ?>
  <div class="alert alert-success">
      <li><?php echo $_SESSION['success']; ?></li>
  </div>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>
