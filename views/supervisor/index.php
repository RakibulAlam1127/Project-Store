<?php require_once __DIR__.'/../partials/dash_head.php'; ?>
<body>
<?php require_once __DIR__.'/../partials/dash_nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once __DIR__.'/../partials/dash_sidenav.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
              <div class="card">
                   <div class="card-header"></div>
                 <div class="card-body">
                     <h4 class="display-4 text-center text-info">List Of the Supervisors</h4>
                 </div>
                  <div class="card-footer"></div>
              </div>
            <div class="card-deck mt-4">
                 <div class="card">
                     <div class="card-header"></div>
                     <img src="../../team/team-1.png" alt="Supervisor One">
                     <div class="card-body">
                         <h3 class="font-weight-light">Jasica (PHD)</h3>
                         <h5 class="font-weight-light">Research & Carrier Development Head</h5>
                     </div>
                     <div class="card-footer">
                         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">See Profile</button>
                         <div id="myModal" class="modal fade" role="dialog">
                             <div class="modal-dialog">

                                 <!-- Modal content-->
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                         <h4 class="modal-title"></h4>
                                     </div>
                                     <div class="modal-body">
                                            <h3 class="font-weight-light">Jasica</h3>
                                             <h4 class="font-weight-light">Department of Computer Science & Engineering DIU</h4>
                                          <h3>About</h3>
                                         <p class="lead">
                                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus nesciunt quasi quibusdam quisquam! Alias aut, consectetur dolor, dolore eveniet illo impedit itaque neque nihil quidem, recusandae reprehenderit temporibus vitae!
                                         </p>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                     </div>
                                 </div>

                             </div>
                         </div>
                         <button type="button" class="btn btn-warning float-md-right" data-toggle="modal" data-target="#myModal2">Contact</button>
                         <div id="myModal2" class="modal fade" role="dialog">
                             <div class="modal-dialog">

                                 <!-- Modal content-->
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                         <h4 class="modal-title"></h4>
                                     </div>
                                     <div class="modal-body">
                                         <h5 class="font-weight-light text-center text-success">Contact Form</h5>
                                         <div class="form-group">
                                             <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                         </div>

                                         <div class="form-group">
                                             <input type="email" name="name" id="name" placeholder="E-mail Address" class="form-control">
                                         </div>
                                         <div class="form-group">
                                             <select name="dept" class="form-control" id="dept">
                                                 <option>Select Department</option>
                                                 <option value="">Computer Science And Engineering</option>
                                                 <option value="">Software Engineering</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <textarea name="message" class="form-control" id="" cols="10" rows="5"></textarea>
                                         </div>
                                         <div class="form-grop">
                                             <input type="submit" value="Submit" class="btn btn-outline-primary btn-block">
                                         </div>
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                     </div>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
                <div class="card">
                    <div class="card-header"></div>
                    <img src="../../team/team-4.png" alt="Supervisor One">
                    <div class="card-body">
                        <h3 class="font-weight-light">Alex (PHD)</h3>
                        <h5 class="font-weight-light">Research & Carrier Development Head</h5>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal7">See Profile</button>
                        <div id="myModal7" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3 class="font-weight-light">Alex</h3>
                                        <h4 class="font-weight-light">Department of Computer Science & Engineering DIU</h4>
                                        <h3>About</h3>
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus nesciunt quasi quibusdam quisquam! Alias aut, consectetur dolor, dolore eveniet illo impedit itaque neque nihil quidem, recusandae reprehenderit temporibus vitae!
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <button type="button" class="btn btn-warning float-md-right" data-toggle="modal" data-target="#myModal3">Contact</button>
                        <div id="myModal3" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="font-weight-light text-center text-success">Contact Form</h5>
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="name" id="name" placeholder="E-mail Address" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <select name="dept" class="form-control" id="dept">
                                                <option>Select Department</option>
                                                <option value="">Computer Science And Engineering</option>
                                                <option value="">Software Engineering</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="" cols="10" rows="5"></textarea>
                                        </div>
                                        <div class="form-grop">
                                            <input type="submit" value="Submit" class="btn btn-outline-primary btn-block">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"></div>
                    <img src="../../team/team-3.png" alt="Supervisor One">
                    <div class="card-body">
                        <h3 class="font-weight-light">Mrs Smith (PHD)</h3>
                        <h5 class="font-weight-light">Research & Carrier Development Head</h5>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal6">See Profile</button>
                        <div id="myModal6" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3 class="font-weight-light">Mrs Smith</h3>
                                        <h4 class="font-weight-light">Department of Computer Science & Engineering DIU</h4>
                                        <h3>About</h3>
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus nesciunt quasi quibusdam quisquam! Alias aut, consectetur dolor, dolore eveniet illo impedit itaque neque nihil quidem, recusandae reprehenderit temporibus vitae!
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <button type="button" class="btn btn-warning float-md-right" data-toggle="modal" data-target="#myModal4">Contact</button>
                        <div id="myModal4" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="font-weight-light text-center text-success">Contact Form</h5>
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="name" id="name" placeholder="E-mail Address" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <select name="dept" class="form-control" id="dept">
                                                <option>Select Department</option>
                                                <option value="">Computer Science And Engineering</option>
                                                <option value="">Software Engineering</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="" cols="10" rows="5"></textarea>
                                        </div>
                                        <div class="form-grop">
                                            <input type="submit" value="Submit" class="btn btn-outline-primary btn-block">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </main>
    </div>
</div>
<?php require_once __DIR__.'/../partials/dash_footer.php'; ?>
