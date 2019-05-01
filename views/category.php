<?php
$category_item = $_GET['category_item'];

if ($category_item == ''){
    header('Location:home');
}
?>
<?php require_once 'partials/header.php'; ?>
    <div class="main-section">
        <?php require_once 'partials/nav.php'; ?>

        <div class="container second-section mt-5">
            <?php  $projectCategory = \App\Model\Project::where('category',$category_item)->get();?>
            <?php $count = count($projectCategory);?>
            <?php if ($count>=1): ?>

                  <table class="table table-responsive table-striped" id="myTable">
                      <thead>
                          <tr>
                              <th>Project Title</th>
                              <th>Category</th>
                              <th>Published Year</th>
                              <th>Author Name</th>
                              <th>Create at</th>
                              <th>Project Description</th>
                          </tr>
                      <tbody>
                       <?php foreach ($projectCategory as $project): ?>
                         <tr>
                             <td><?php echo $project->title; ?></td>
                             <td><?php echo $project->category; ?></td>
                             <td><?php echo $project->year; ?></td>
                             <td><?php echo $project->author_name; ?></td>
                             <td><?php echo $project->create_at; ?></td>
                             <td>
                                 <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Description</button>

                                 <div id="myModal" class="modal fade" role="dialog">
                                     <div class="modal-dialog">

                                         <!-- Modal content-->
                                         <div class="modal-content">
                                             <div class="modal-header">
                                                 <h3 class="font-weight-light text-info">Project Description</h3>
                                                 <button type="button" class="close" data-dismiss="modal">&times;</button>

                                             </div>
                                             <div class="modal-body">
                                                 <?php echo $project->desc; ?>
                                             </div>
                                             <div class="modal-footer">
                                                 <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
                                             </div>
                                         </div>

                                     </div>
                                 </div>

                             </td>
                         </tr>
                       <?php endforeach;?>
                      </tbody>
                      </thead>
                  </table>

              <?php else: ?>
              <div class="alert alert-danger">
                  Not Found in <?php echo '<strong>'.$category_item.'</strong>'; ?> Category Project
              </div>
             <?php endif; ?>
        </div>
    </div>

<script>
    $(document).ready( function () {
        $('#mytable').DataTable();
    } );
 </script>
<?php require_once 'partials/footer.php'; ?>