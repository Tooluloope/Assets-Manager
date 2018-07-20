<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="css/custom/users.css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main class="content-wrapper">
    <div class="container">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card table-responsive">
                <div class="table-heading px-2 px-1 border-bottom">
                <h1 class="mdc-card__title mdc-card__title--large">Authorized Users</h1>
                </div>
                <table class="table">
                <thead>
                    <tr>
                    <th class="text-left">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Role</th>
                    <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr >
                    <td style="vertical-align: middle;" class="text-left"><?php echo e($user->name); ?> </td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->user_role->role->display_name); ?></td>
                    <td style="color:white;"><a class="btn btn-danger btn-sm">Delete</a>
                        <a class="btn btn-primary btn-sm">Edit User</a>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="userForm" action="<?php echo e(url('walk')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <input type="file" name="csv">
                 <!--   <div class="modal-body">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                    </div>-->
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
    $('userForm').validate();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>