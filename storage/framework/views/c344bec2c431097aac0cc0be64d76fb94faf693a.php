<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo e(url('css/custom/personnel.css')); ?>"/>
<style type="text/css"> input[type="date"]:before {
    content: attr(placeholder) !important;
    color: #aaa;
    margin-right: 0.5em;
  }
  input[type="date"]:focus:before,
  input[type="date"]:valid:before {
    content: "";
  }
table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th:first-child:before {
    top: 22px !important;}
table.dataTable>tbody>tr.child{
    left: 0px !important;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main class="content-wrapper">
    <div class="container">
            
     
                <h1 class="mdc-card__title mdc-card__title--large"><?php echo e($project->name); ?> Personnel</h1>
           
                <table id="personnels" class="table table-striped table-bordered  dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                    <th class="text-left">Name</th>
                    
                    <th class="text-center">Tel</th>
                    <th class="text-center">T-BOSIET</th>
                    <th class="text-center">General Medicals</th>
                    <th class="text-center">Tuberculosis</th>
                    <th class="text-center">Alcohol & Drug</th>
                     <th class="text-center">Malaria Test</th>
                    <th class="text-center">Company</th>
                     <th class="text-center">Designation</th>
                     <th class="text-center">Employment Status</th>
                     <th class="text-center">OSP</th>
                     <th class="text-center">Trade Certificate</th>
                     <th class="text-center">Curriculum vitae</th>
                    <th class="text-center" >Action</th>

                    
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $project_personnels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project_personnel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr >
                        <td style="vertical-align: middle;" class="text-left"><?php echo e($project_personnel->personnel->name); ?> </td>
                         <td style="vertical-align: middle;" class="text-left"><?php echo e($project_personnel->personnel->phone_number); ?> </td>
                       
                        <td>
                            <?php if(isset($project_personnel->personnel->t_bosiet)): ?>
                        <a href="<?php echo e(url('storage/app')); ?>/<?php echo e($project_personnel->personnel->t_bosiet); ?>" target="_blank"> 
                         <button type="button" class="btn <?php echo e($project_personnel->personnel->color_class($project_personnel->personnel->t_bosiet_validity_date)); ?> btn-sm">view
                            </button>
                        </a> 
                        <small><?php echo e($project_personnel->personnel->exp($project_personnel->personnel->t_bosiet_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?>
                    </td> 
                        <td><?php if(isset($project_personnel->personnel->general_medicals)): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($project_personnel->personnel->general_medicals); ?>" target="_blank"> <button type="button" class="btn <?php echo e($project_personnel->personnel->color_class($project_personnel->personnel->general_medicals_validity_date)); ?> btn-sm">view</button></a>  <small><?php echo e($project_personnel->personnel->exp($project_personnel->personnel->general_medicals_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?></td> 
                        <td><?php if(isset($project_personnel->personnel->tuberculosis)): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($project_personnel->personnel->tuberculosis); ?>" target="_blank"> <button type="button" class="btn <?php echo e($project_personnel->personnel->color_class($project_personnel->personnel->tuberculosis_validity_date)); ?> btn-sm">view</button></a>  <small><?php echo e($project_personnel->personnel->exp($project_personnel->personnel->tuberculosis_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?></td>   
                         <td><?php if(isset($project_personnel->personnel->alcohol_and_drug)): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($project_personnel->personnel->alcohol_and_drug); ?>" target="_blank"> <button type="button" class="btn <?php echo e($project_personnel->personnel->color_class($project_personnel->personnel->alcohol_and_drug_validity_date)); ?> btn-sm">view</button></a>  <small><?php echo e($project_personnel->personnel->exp($project_personnel->personnel->alcohol_and_drug_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?></td>  
                          <td><?php if(isset($project_personnel->personnel->malaria)): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($project_personnel->personnel->malaria); ?>" target="_blank"> <button type="button" class="btn <?php echo e($project_personnel->personnel->color_class($project_personnel->personnel->malaria_validity_date)); ?> btn-sm">view</button></a>  <small><?php echo e($project_personnel->personnel->exp($project_personnel->personnel->malaria_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?></td> 
                              <td style="vertical-align: middle;" class="text-left"><?php echo e($project_personnel->personnel->company); ?> </td>
                            <td style="vertical-align: middle;" class="text-left"><?php echo e($project_personnel->personnel->designation); ?> </td>
                              <td style="vertical-align: middle;" class="text-left"><?php echo e($project_personnel->personnel->employment_status); ?> </td>
                              <?php if(isset($project_personnel->personnel->certificate)): ?>
                              <td style="vertical-align: middle;" class="text-left"><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($project_personnel->personnel->certificate->osp()->certificate); ?>" target="_blank"> <button type="button" class="btn btn-success btn-sm">view</button></a> </td>
                              <td style="vertical-align: middle;" class="text-left"><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($project_personnel->personnel->certificate->trade()->certificate); ?>" target="_blank"> <button type="button" class="btn btn-success btn-sm">view</button></a> </td>
                              <td style="vertical-align: middle;" class="text-left"><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($project_personnel->personnel->certificate->cv()->certificate); ?>" target="_blank"> <button type="button" class="btn btn-success btn-sm">view</button></a> </td>


                              <?php else: ?>
                              <td style="vertical-align: middle;" class="text-left">N/A </td>
                              <td style="vertical-align: middle;" class="text-left">N/A</td>
                              <td style="vertical-align: middle;" class="text-left">N/A</td>

                              <?php endif; ?>
                        <!--  -->
                        <td style="color:white;">
                           
                               <a href="<?php echo e(url('projects/'.$project->name.'/remove-personnel')); ?>?project_id=<?php echo e($project->id); ?>&personnel_id=<?php echo e($project_personnel->personnel->id); ?>" class="btn btn-danger btn-sm">Remove</a>
                        </td>
                         
                    </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                </tbody>
                </table>
        
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_scripts'); ?>
<!-- <script src="js/custom/home.js"></script> -->
<script>
    $(document).ready(function() {
    $('#personnels').DataTable(  {
    columnDefs: [
        { responsivePriority: 1, targets: 0 },
        { responsivePriority: 2, targets: -1 }
    ]
} );
} );


</script>
<?php if(session('message') != NULL): ?>
<script type="text/javascript">
    
toastr.info('<?php echo e(session('message')); ?>')
</script>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>