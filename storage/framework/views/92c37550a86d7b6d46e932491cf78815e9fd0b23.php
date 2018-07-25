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
            <div id="snackbar">Email Sent Successfully</div>
     
                <h1 class="mdc-card__title mdc-card__title--large">Personnel</h1>
           
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
                       
                        <td><?php if(isset($personnel->t_bosiet)): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->t_bosiet); ?>" target="_blank"> <button type="button" class="btn <?php echo e($personnel->color_class($personnel->t_bosiet_validity_date)); ?> btn-sm">view</button></a> <small><?php echo e($personnel->exp($personnel->t_bosiet_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?></td> 
                        <td><?php if(isset($personnel->general_medicals)): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->general_medicals); ?>" target="_blank"> <button type="button" class="btn <?php echo e($personnel->color_class($personnel->general_medicals_validity_date)); ?> btn-sm">view</button></a>  <small><?php echo e($personnel->exp($personnel->general_medicals_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?></td> 
                        <td><?php if(isset($personnel->tuberculosis)): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->tuberculosis); ?>" target="_blank"> <button type="button" class="btn <?php echo e($personnel->color_class($personnel->tuberculosis_validity_date)); ?> btn-sm">view</button></a>  <small><?php echo e($personnel->exp($personnel->tuberculosis_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?></td>   
                         <td><?php if(isset($personnel->alcohol_and_drug)): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->alcohol_and_drug); ?>" target="_blank"> <button type="button" class="btn <?php echo e($personnel->color_class($personnel->alcohol_and_drug_validity_date)); ?> btn-sm">view</button></a>  <small><?php echo e($personnel->exp($personnel->alcohol_and_drug_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?></td>  
                          <td><?php if(isset($personnel->malaria)): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->malaria); ?>" target="_blank"> <button type="button" class="btn <?php echo e($personnel->color_class($personnel->malaria_validity_date)); ?> btn-sm">view</button></a>  <small><?php echo e($personnel->exp($personnel->malaria_validity_date)); ?></small> <?php else: ?> N/A <?php endif; ?></td> 
                              <td style="vertical-align: middle;" class="text-left"><?php echo e($personnel->company); ?> </td>
                            <td style="vertical-align: middle;" class="text-left"><?php echo e($personnel->designation); ?> </td>
                              <td style="vertical-align: middle;" class="text-left"><?php echo e($personnel->employment_status); ?> </td>
                              <?php if(isset($personnel->certificate)): ?>
                              <td style="vertical-align: middle;" class="text-left"><?php if($personnel->certificate->osp() !=''): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->certificate->osp()->certificate); ?>" target="_blank"> <button type="button" class="btn btn-success btn-sm">view</button></a> <?php else: ?> N/A <?php endif; ?></td>
                              <td style="vertical-align: middle;" class="text-left"><?php if($personnel->certificate->trade() !=''): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->certificate->trade()->certificate); ?>" target="_blank"> <button type="button" class="btn btn-success btn-sm">view</button></a> <?php else: ?> N/A <?php endif; ?></td>
                              <td style="vertical-align: middle;" class="text-left"><?php if($personnel->certificate->cv() !=''): ?><a href="<?php echo e(url('storage/app')); ?>/<?php echo e($personnel->certificate->cv()->certificate); ?>" target="_blank"> <button type="button" class="btn btn-success btn-sm">view</button></a> <?php else: ?> N/A <?php endif; ?></td>
                              <?php else: ?>
                              <td style="vertical-align: middle;" class="text-left">N/A </td>
                              <td style="vertical-align: middle;" class="text-left">N/A</td>
                              <td style="vertical-align: middle;" class="text-left">N/A</td>

                              <?php endif; ?>
                        <!--  -->
                        <td style="color:white;">
                                <button data-toggle="modal"  data-phone="<?php echo e($personnel->phone_number); ?>" data-p_id="<?php echo e($personnel->id); ?>" data-name="<?php echo e($personnel->name); ?>"  data-number="<?php echo e($personnel->phone_number); ?>" data-company="<?php echo e($personnel->company); ?>" data-designation="<?php echo e($personnel->designation); ?>" data-employment_status="<?php echo e($personnel->employment_status); ?>" data-email="<?php echo e($personnel->email); ?>" data-category="<?php echo e($personnel->category); ?>" class="personnels btn btn-primary btn-sm" >Update personnel</button>
                                <a onclick="myFunction()" class="btn btn-primary btn-sm">Send Mail</a>
                        </td>
                         
                    </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                </tbody>
                </table>

        <button style="position: fixed; bottom: 50px; right: 30px;" data-toggle="modal" data-target=".bd-example-modal-lg" class=" btn btn-circle btn-primary-color" >+</button>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add New Personnel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <form id="userForm" action="<?php echo e(url('personnel')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                             <div class="pt-2">
                                <h4><b>Personal Information*</b></h4>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstname" placeholder="First Name" required> 
                            </div>
                            <div class="col">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                             <div class="col">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" required>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                            <div class="col">
                                <label for="lastName">Employment Status</label>
                                <select name="employment_status" id="single" class="form-control form-control-chosen" data-placeholder="Please select..." required> 
                                    <option value="">Please select...</option>
                                    <option value="Contract Staff">Contract Staff</option>
                                    <option value="Full Staff">Full Staff</option>
                                      <option value="Expatriate">Expatriate</option>
                                    <option value="Yet to be employed">Yet to be employed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="category">Category</label>
                                <select name="category" id="single" class="form-control form-control-chosen" data-placeholder="Please select..."> 
                                    <option value="">Please select...</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Construction">Construction</option>
                                    <option value="PMT">PMT</option>
                                    <option value="Quality">Quality</option>
                                    <option value="Safety">Safety</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation" aria-describedby="emailHelp" placeholder="Designation" required>
                            </div>
                            <div class="col">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" id="company"  name="company" aria-describedby="emailHelp" placeholder="Company" required>
                            </div>
                        </div>

                        <div class="pt-2">
                                <h4><b>Certifications*</b></h4>
                        </div>
    
                         <div class="form-row">
                           
                            <div class="col">
                                  <label for="t_bosiet">T-Bosiet</label>
                               <input required="required" class="form-control" type="file" name="t_bosiet" id="image" required>  
                            </div>
                            <div class="col">
                                <label for="t_bosiet"><br></label>
                                <input type="date" name="t_bosiet_validity_date"  class="form-control" required/> 
                            </div>
                     </div>


                         <div class="form-row">
                           
                            <div class="col">
                                  <label for="general_medicals">Medical Test</label>
                               <input required="required" class="form-control" type="file" name="general_medicals" id="image" required>  
                            </div>
                            <div class="col">
                                <label for="general_medicals"><br></label>
                                <input type="date" name="general_medicals_validity_date"  class="form-control" required/> 
                            </div>
                     </div>



                         <div class="form-row">
                           
                            <div class="col">
                                  <label for="tuberculosis">Tuberculosis Test</label>
                               <input required="required" class="form-control" type="file" name="tuberculosis" id="image" required>  
                            </div>
                            <div class="col">
                                <label for="tuberculosis"><br></label>
                                <input type="date" name="tuberculosis_validity_date"  class="form-control" required/> 
                            </div>
                     </div>

                     <div class="form-row">
                           
                            <div class="col">
                                  <label for="alcohol_and_drug">Alcohol and Drug Test</label>
                               <input required="required" class="form-control" type="file" name="alcohol_and_drug" id="image" required>  
                            </div>
                            <div class="col">
                                <label for="alcohol_and_drug"><br></label>
                                <input type="date" name="alcohol_and_drug_validity_date"  class="form-control" required/> 
                            </div>
                     </div>

                      <div class="form-row">
                           
                            <div class="col">
                                  <label for="malaria">Malaria (Required for Expartrites))</label>
                                <input class="form-control" type="file" name="malaria" id="image" >  
                            </div>
                            <div class="col">
                                <label for="malaria"><br></label>
                                <input type="date" name="malaria_validity_date"  class="form-control" />
                            </div>
                     </div>
                     <br>
                          <div class="pt-2">
                                <h4><b>Other Certifications</b></h4>
                        </div>
                        <table id="myTable" class=" table order-list1 table2">
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold" >Name of Certification</td>
                                        <td class="font-weight-bold">Upload</td>
                                        <td class="font-weight-bold">Expiry Date</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="col">
                                                <select  name="certificate_name[]" id="single" class="form-control form-control-chosen" data-placeholder="Please select..." > 
                                                    <option value="">Please select...</option>
                                                    <option value="Offshore Safety Permit">Offshore Safety Permit</option>
                                                    <option value="Curriculum vitae">Curriculum vitae</option>
                                                    <option value="Trade Certificate">Trade Certificate</option>
                                                </select>
                                        </td>
                                        <td scope="col">
                                              <input required="required" class="form-control" type="file" name="certificate[]" id="image" required>                  
                                        </td>
                                        <td scope="col">
                                            <input type="date" name="expiry_date[]"  class="form-control"/>
                                        </td>
                                        <td scope="col"><a class="deleteRow"></a>
                                        </td>
                                    </tr>
                                    
        
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" style="text-align: center;">
                                            <a type="button" class="btn btn-info " id="addrow1" value="Add Row">Add Row</a>
                                        </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                </tfoot>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="personnel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Personnel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <form id="userForm" action="<?php echo e(url('personnel')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" id="personnel_id" name="personnel_id" value=""/>
                    <div class="modal-body">
                             <div class="pt-2">
                                <h4><b>Personal Information*</b></h4>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="p_firstName" name="firstname" placeholder="First Name" required> 
                            </div>
                            <div class="col">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" name="lastname" id="p_lastName" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                             <div class="col">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control" name="phone_number" id="p_phone_number" placeholder="Phone Number" required>
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="p_exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                            <div class="col">
                                <label for="lastName">Employment Status</label>
                                <select name="employment_status" id="p_employment" class="form-control form-control-chosen" data-placeholder="Please select..." required> 
                                    <option value="">Please select...</option>
                                    <option value="Contract Staff">Contract Staff</option>
                                    <option value="Full Staff">Full Staff</option>
                                      <option value="Expatriate">Expatriate</option>
                                    <option value="Yet to be employed">Yet to be employed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="category">Category</label>
                                <select name="category" id="p_category" class="form-control form-control-chosen" data-placeholder="Please select..."> 
                                    <option value="">Please select...</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Construction">Construction</option>
                                    <option value="PMT">PMT</option>
                                    <option value="Quality">Quality</option>
                                    <option value="Safety">Safety</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="p_designation" name="designation" aria-describedby="emailHelp" placeholder="Designation" required>
                            </div>
                            <div class="col">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" id="p_company"  name="company" aria-describedby="emailHelp" placeholder="Company" required>
                            </div>
                        </div>

                        <div class="pt-2">
                                <h4><b>Certifications*</b></h4>
                        </div>
    
                         <div class="form-row">
                           
                            <div class="col">
                                  <label for="t_bosiet">T-Bosiet</label>
                               <input required="required" class="form-control" type="file" name="t_bosiet" id="image" required>  
                            </div>
                            <div class="col">
                                <label for="t_bosiet"><br></label>
                                <input type="date" name="t_bosiet_validity_date"  class="form-control" required/> 
                            </div>
                     </div>


                         <div class="form-row">
                           
                            <div class="col">
                                  <label for="general_medicals">Medical Test</label>
                               <input required="required" class="form-control" type="file" name="general_medicals" id="image" required>  
                            </div>
                            <div class="col">
                                <label for="general_medicals"><br></label>
                                <input type="date" name="general_medicals_validity_date"  class="form-control" required/> 
                            </div>
                     </div>



                         <div class="form-row">
                           
                            <div class="col">
                                  <label for="tuberculosis">Tuberculosis Test</label>
                               <input required="required" class="form-control" type="file" name="tuberculosis" id="image" required>  
                            </div>
                            <div class="col">
                                <label for="tuberculosis"><br></label>
                                <input type="date" name="tuberculosis_validity_date"  class="form-control" required/> 
                            </div>
                     </div>

                     <div class="form-row">
                           
                            <div class="col">
                                  <label for="alcohol_and_drug">Alcohol and Drug Test</label>
                               <input required="required" class="form-control" type="file" name="alcohol_and_drug" id="image" required>  
                            </div>
                            <div class="col">
                                <label for="alcohol_and_drug"><br></label>
                                <input type="date" name="alcohol_and_drug_validity_date"  class="form-control" required/> 
                            </div>
                     </div>

                      <div class="form-row">
                           
                            <div class="col">
                                  <label for="malaria">Malaria (Required for Expartrites))</label>
                                <input class="form-control" type="file" name="malaria" id="image" >  
                            </div>
                            <div class="col">
                                <label for="malaria"><br></label>
                                <input type="date" name="malaria_validity_date"  class="form-control" />
                            </div>
                     </div>
                     <br>
                          <div class="pt-2">
                                <h4><b>Other Certifications</b></h4>
                        </div>
                        <table id="myTable" class=" table order-list1 table2">
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold" >Name of Certification</td>
                                        <td class="font-weight-bold">Upload</td>
                                        <td class="font-weight-bold">Expiry Date</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="col">
                                                <select  name="certificate_name[]" id="single" class="form-control form-control-chosen" data-placeholder="Please select..." > 
                                                    <option value="">Please select...</option>
                                                    <option value="Offshore Safety Permit">Offshore Safety Permit</option>
                                                    <option value="Curriculum vitae">Curriculum vitae</option>
                                                    <option value="Trade Certificate">Trade Certificate</option>
                                                </select>
                                        </td>
                                        <td scope="col">
                                              <input required="required" class="form-control" type="file" name="certificate[]" id="image" required>                  
                                        </td>
                                        <td scope="col">
                                            <input type="date" name="expiry_date[]"  class="form-control"/>
                                        </td>
                                        <td scope="col"><a class="deleteRow"></a>
                                        </td>
                                    </tr>
                                    
        
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" style="text-align: center;">
                                            <a type="button" class="btn btn-info " id="addrow1" value="Add Row">Add Row</a>
                                        </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                </tfoot>
                        </table>
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
<script src="<?php echo e(url('js/custom/row.js')); ?>"></script>
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

 $(".personnels").click(function () {
           
            $('#personnel_id').val($(this).data('p_id'));
            $('#p_firstName').val(firstName);
            $('#p_lastName').val(lastName);
            $('#p_phone_number').val($(this).data('phone'));
            $('#p_exampleInputEmail1').val($(this).data('email'));
            $('#p_employment').val($(this).data('employment_status'));
            $('#p_category').val($(this).data('category'));
            $('#p_designation').val($(this).data('designation'));
            $('#p_company').val($(this).data('company'));
            $('#personnel').modal('show');
        });
</script>
<?php if(session('message') != NULL): ?>
<script type="text/javascript">
    
toastr.success('<?php echo e(session('message')); ?>')

</script>


<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>