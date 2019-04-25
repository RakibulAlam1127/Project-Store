<?php require_once 'partials/header.php'; ?>
<div class="main-section">
    <?php require_once 'partials/nav.php'; ?>
    <div class="container second-section ">
        <div class="row">
             <div class="col-md-6 mx-auto">
                     <?php require_once 'partials/_notification.php'; ?>
             </div>
              <div class="col-md-8 col-sm-6">

                  <form action="contact" method="post">
                      <div class="form-group">
                          <label for="email">E-mail</label>
                          <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="E-mail Address">
                      </div>
                      <div class="form-group">
                          <label for="comments">Messages</label>
                          <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                          <input type="submit" class="btn btn-info btn-lg  btn-block" value="Submit" name="summit">
                      </div>
                  </form>
              </div>

            <div class="col-md-4 mt-4 col-sm-6">
                 <div class="card">
                     <h4 class="card-title text-center pt-3">Our Office Branches</h4>
                     <hr>
                      <div class="card-body">

                              <address>
                                  <strong> Dhaka Office:</strong>
                                           Road No: 27 <br>
                                           House: no 99, A-Block <br>
                                           Uttara, Dhaka Bangladesh <br>
                              </address>
                              <hr>
                              <strong>  Canada Office:</strong>
                              Road No: 27 <br>
                              House: no 99, A-Block <br>
                              Canada, America <br>
                              </address>

                          <hr>
                              <strong>  London Office:</strong>
                              Road No: 27 <br>
                              House: no 99, A-Block <br>
                              London,America <br>
                              </address>
                          <hr>
                              <strong>  America Office:</strong>
                              Road No: 27 <br>
                              House: no 99, A-Block <br>
                              newyork,America <br>
                              </address>


                 </div>
                 </div>
            </div>

        </div>
    </div>
</div>

<?php require_once 'partials/footer.php'; ?>