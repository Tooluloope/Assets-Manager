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
            
     
                <h1 class="mdc-card__title mdc-card__title--large">Personnels</h1>
           
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
                    <?php $__currentLoopData = $personnels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personnel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr >
                        <td style="vertical-align: middle;" class="text-left"><?php echo e($personnel->name); ?> </td>
                         <td style="vertical-align: middle;" class="text-left"><?php echo e($personnel->phone_number); ?> </td>
                       
                        <td>
                            <?php if(isset($personnel->t_bosiet)): ?>
                        <a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->t_bosiet); ?>" target="_blank"> 
                         <button type="button" class="btn <?php echo e($personnel->color_class($personnel->t_bosiet_validity_date)); ?> btn-sm">view
                            </button>
                        </a> 
                        <small><?php echo e($personnel->exp($personnel->t_bosiet_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?>
                    </td> 
                        <td><?php if(isset($personnel->general_medicals)): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->general_medicals); ?>" target="_blank"> <button type="button" class="btn <?php echo e($personnel->color_class($personnel->general_medicals_validity_date)); ?> btn-sm">view</button></a>  <small><?php echo e($personnel->exp($personnel->general_medicals_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?></td> 
                        <td><?php if(isset($personnel->tuberculosis)): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->tuberculosis); ?>" target="_blank"> <button type="button" class="btn <?php echo e($personnel->color_class($personnel->tuberculosis_validity_date)); ?> btn-sm">view</button></a>  <small><?php echo e($personnel->exp($personnel->tuberculosis_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?></td>   
                         <td><?php if(isset($personnel->alcohol_and_drug)): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->alcohol_and_drug); ?>" target="_blank"> <button type="button" class="btn <?php echo e($personnel->color_class($personnel->alcohol_and_drug_validity_date)); ?> btn-sm">view</button></a>  <small><?php echo e($personnel->exp($personnel->alcohol_and_drug_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?></td>  
                          <td><?php if(isset($personnel->malaria)): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->malaria); ?>" target="_blank"> <button type="button" class="btn <?php echo e($personnel->color_class($personnel->malaria_validity_date)); ?> btn-sm">view</button></a>  <small><?php echo e($personnel->exp($personnel->malaria_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?></td> 
                              <td style="vertical-align: middle;" class="text-left"><?php echo e($personnel->company); ?> </td>
                            <td style="vertical-align: middle;" class="text-left"><?php echo e($personnel->designation); ?> </td>
                              <td style="vertical-align: middle;" class="text-left"><?php echo e($personnel->employment_status); ?> </td>
                              <?php if(isset($personnel->certificate)): ?>
                              <td style="vertical-align: middle;" class="text-left"><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->certificate->osp()->certificate); ?>" target="_blank"> <button type="button" class="btn btn-success btn-sm">view</button></a> </td>
                              <td style="vertical-align: middle;" class="text-left"><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->certificate->trade()->certificate); ?>" target="_blank"> <button type="button" class="btn btn-success btn-sm">view</button></a> </td>
                              <td style="vertical-align: middle;" class="text-left"><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->certificate->cv()->certificate); ?>" target="_blank"> <button type="button" class="btn btn-success btn-sm">view</button></a> </td>


                              <?php else: ?>
                              <td style="vertical-align: middle;" class="text-left">N/A </td>
                              <td style="vertical-align: middle;" class="text-left">N/A</td>
                              <td style="vertical-align: middle;" class="text-left">N/A</td>

                              <?php endif; ?>
                        <!--  -->
                        <td style="color:white;">
                           
                               <a onclick="myFunction('<?php echo e($personnel->id); ?>')" class="btn btn-success btn-sm">Add</a>
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

    function myFunction(id) {
        var personnel_id = id;
        $.post( "<?php echo e(url('projects/'.$project->name.'/add-personnel')); ?>",{project_id : '<?php echo e($project->id); ?>',personnel_id : personnel_id, _token : '<?php echo e(csrf_token()); ?>' },function( data ) {
          toastr.info(data)
        });
    }

</script>
<?php if(session('message') != NULL): ?>
<script type="text/javascript">
    
toastr.success('<?php echo e(session('message')); ?>')
</script>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>