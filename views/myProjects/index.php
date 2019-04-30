<?php use Illuminate\Support\Facades\DB;

require_once __DIR__.'/../partials/dash_head.php'; ?>
<body>
<?php require_once __DIR__.'/../partials/dash_nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <?php require_once __DIR__.'/../partials/dash_sidenav.php'; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <p class="h4 text-danger text-center">Current Date : <?php echo date('d/m/Y'); ?></p>
            <div class="col-6 mx-auto"> </div>
            <div class="card">
                 <div class="card-header">
                     <h4 class="text-center font-weight-light">My Projects</h4>
                 </div>
                <div class="card-body">
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name Of the Project</th>
                            <th>Category</th>
                            <th>Published ID</th>
                            <th>Published Year</th>
                            <th>Author Name</th>
                            <th>View</th>
                            <th>Share</th>
                        </tr>
                        </thead>

                        <tbody>
                           <?php  $myproject = \App\Model\Project::where('user_id',$_SESSION['user']['id'])->get();?>
                                 <?php foreach ($myproject as $project):?>
                               <tr>
                                   <td><?php echo $project->id; ?></td>
                                   <td><?php echo $project->title; ?></td>
                                   <td><?php echo $project->category; ?></td>
                                   <td><?php echo $project->user_id; ?></td>
                                   <td><?php echo $project->year; ?></td>
                                   <td><?php echo $project->author_name; ?></td>
                                   <td>
                                       <a href="view.php?id=<?php echo $project->id; ?>" class="btn btn-info btn-sm">View</a>
                                   </td>
                                   <td>
                                       <a href="share.php?id=<?php echo $project->id; ?>" class="btn btn-info btn-sm">Share</a>
                                   </td>

                               </tr>

                             <?php endforeach;  ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">

                </div>
            </div>

        </main>
    </div>
</div>
<?php require_once __DIR__.'/../partials/dash_footer.php'; ?>
