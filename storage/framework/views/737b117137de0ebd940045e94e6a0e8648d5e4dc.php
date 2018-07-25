<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="css/custom/personnel.css"/>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main class="content-wrapper">
    <div class="container">
            <div id="snackbar">Email Sent Successfully</div>
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
            <div class="mdc-card table-responsive">
                <div class="table-heading px-2 px-1 border-bottom">
                <h1 class="mdc-card__title mdc-card__title--large">Personnel</h1>
                </div>
                <table class="table">
                <thead>
                    <tr>
                    <th class="text-left">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">TB</th>
                    <th class="text-center">A &amp; D</th>
                    <th class="text-center">OSP</th>
                    <th class="text-center">Medical Test</th>
                    <th class="text-center">Bosiet</th>
                    <th class="text-center">CV</th>
                    <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $personnels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personnel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr >
                        <td style="vertical-align: middle;" class="text-left"><?php echo e($personnel->name); ?> </td>
                        <td><?php echo e($personnel->email); ?> </td>
                        
                                   <td> </td>
                                  <td> </td>
                        
                                   <td> </td>
                        
                        <!--  -->
                        <td style="color:white;">
                            <a onclick="myFunction()" class="btn btn-primary btn-sm">Send Mail</a>
                        </td>
                    </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                </tbody>
                </table>
            </div>
        </div>
        <button style="position: absolute; bottom: 50px; right: 30px;" data-toggle="modal" data-target=".bd-example-modal-lg" class=" btn btn-circle btn-primary-color" >+</button>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add New Personnel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <form id="userForm">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" required> 
                            </div>
                            <div class="col">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                            <div class="col">
                                <label for="lastName">Employment Status</label>
                                <select name="Status" id="single" class="form-control form-control-chosen" data-placeholder="Please select..." required> 
                                    <option value=""></option>
                                    <option value="Contract Staff">Contract Staff</option>
                                    <option value="Full Staff">Full Staff</option>
                                    <option value="Yet to be employed">Yet to be employed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="category">Category</label>
                                <select name="category" id="single" class="form-control form-control-chosen" data-placeholder="Please select..."> 
                                    <option value=""></option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Construction">Construction</option>
                                    <option value="PMT">PMT</option>
                                    <option value="Quality">Quality</option>
                                    <option value="Safety">Safety</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" aria-describedby="emailHelp" placeholder="Designation" required>
                            </div>
                            <div class="col">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" id="company" aria-describedby="emailHelp" placeholder="Company" required>
                            </div>
                        </div>
                        
                        <div class="pt-2">
                                <label>Certifications</label>
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
                                                <select required="required" name="position" id="single" class="form-control form-control-chosen" data-placeholder="Please select..." required> 
                                                    <option value=""></option>
                                                    <option value="Alcohol and Drug Test">Alcohol and Drug Test</option>
                                                    <option value="Offshore Safety Permit">Offshore Safety Permit</option>
                                                    <option value="Medical Test">Medical Test</option>
                                                    <option value="Bosiet">Bosiet</option>
                                                    <option value="Tuberculosis Test">Tuberculosis Test</option>
                                                    <option value="Curriculum vitae">Curriculum vitae</option>
                                                </select>
                                        </td>
                                        <td scope="col">
                                             <input required="required" class="form-control" type="file" name="image" id="image" required>                  
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
<script src="js/custom/row.js"></script>
<!-- <script src="js/custom/home.js"></script> -->
<script>
    function myFunction() {
    // Get the snackbar DIV
    var x = document.getElementById("snackbar")

    // Add the "show" class to DIV
    x.className = "shows";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("shows", ""); }, 3000);
}
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>