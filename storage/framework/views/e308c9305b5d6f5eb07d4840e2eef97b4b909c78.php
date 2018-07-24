<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="css/custom/projects.css"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main class="content-wrapper">
        <div class="container">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card table-responsive">
                    <div class="table-heading px-2 px-1 border-bottom">
                    <h1 class="mdc-card__title mdc-card__title--large">Projects</h1>
                    </div>
                    <table class="table">
                    <thead>
                        <tr>
                        <th class="text-left">Name</th>
                        <th class="text-center">Start Date</th>
                        <th class="text-center">End Date</th>
                        <th class="text-center">Location</th>
                        <th class="text-center">Project Manager</th>
                        <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr >
                        <td style="vertical-align: middle;" class="text-left"><?php echo e($project->name); ?></td>
                        <td><?php echo e($project->start_date); ?></td>
                        <td><?php echo e($project->end_date); ?></td>
                        <td><?php echo e($project->location); ?></td>
                        <td><?php echo e($project->project_manager); ?></td>
                        <td style="color:white;">
                             <button data-toggle="modal" data-p_id="<?php echo e($project->id); ?>" data-name="<?php echo e($project->name); ?>" data-start="<?php echo e($project->start_date); ?>" data-end="<?php echo e($project->end_date); ?>" data-location="<?php echo e($project->location); ?>" data-manager="<?php echo e($project->project_manager); ?>" class="update btn btn-primary btn-sm" >Update Project</button>
                             <a class="btn btn-success btn-sm" href="<?php echo e(url('projects/'.$project->name.'/add-personnel')); ?>?id=<?php echo e($project->id); ?>">Add Personnel</a>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(url('/projects/'.$project->name.'/personnel')); ?>?id=<?php echo e($project->id); ?>">View Personnel</a>

                        </td>
                    </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <button style="position: absolute; bottom: 50px; right: 30px;" data-toggle="modal" data-target="#exampleModalCenter" class=" btn btn-circle btn-primary-color" >+</button>

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="projectForm" action="<?php echo e(url('project')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                      
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="projectName">Project Name</label>
                                <input type="text" class="form-control" name="name" id="projectName" placeholder="Project Name" required>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="startDate">Start Date</label>
                                    <input type="date" id="startDate" name="start_date" class="form-control" placeholder="start date" required>
                                </div>
                                <div class="col">
                                    <label for="endDate">End Date</label>
                                    <input type="date" id="endDate" name="end_date" class="form-control" placeholder="Last name" required>
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="col">
                                    <label for="location">Location</label>
                                    <input type="text" id="location" name="location" class="form-control" placeholder="Location" required>
                                </div>
                                <div class="col">
                                    <label for="projectManager">Project Manager</label>
                                    <input type="text" id="projectManager"  name="project_manager" class="form-control" placeholder="Project Manager" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>




              <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Update Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="projectForm" action="<?php echo e(url('project/update')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                          <input type="hidden" id="project_id" name="project_id" value=""/>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="projectName">Project Name</label>
                                <input type="text" class="form-control" name="name" id="name_update" placeholder="Project Name" required>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="startDate">Start Date</label>
                                    <input type="date" id="sdate_update" name="start_date" class="form-control" placeholder="start date" required>
                                </div>
                                <div class="col">
                                    <label for="endDate">End Date</label>
                                    <input type="date" id="edate_update" name="end_date" class="form-control" placeholder="Last name" required>
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="col">
                                    <label for="location">Location</label>
                                    <input type="text" id="location_update" name="location" class="form-control" placeholder="Location" required>
                                </div>
                                <div class="col">
                                    <label for="projectManager">Project Manager</label>
                                    <input type="text" id="manager_update"  name="project_manager" class="form-control" placeholder="Project Manager" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
   <?php $__env->stopSection(); ?>
                <?php $__env->startSection('page_scripts'); ?>
                <script>
                    $('projectForm').validate();
                </script>
                <script type="text/javascript">
        $(document).ready(function () {
            $(".update").click(function () {
                $('#project_id').val($(this).data('p_id'));
                $('#name_update').val($(this).data('name'));
                $('#sdate_update').val($(this).data('start'));
                $('#edate_update').val($(this).data('end'));
                $('#location_update').val($(this).data('location'));
                $('#manager_update').val($(this).data('manager'));
                $('#update').modal('show');
            });
        });

                </script>
                <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>