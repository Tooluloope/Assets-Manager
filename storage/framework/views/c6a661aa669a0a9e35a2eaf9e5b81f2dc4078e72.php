<!DOCTYPE html>
<html lang="en" style="font-size: 18px !important">

<head>
  <title><?php echo $__env->yieldContent('pageTitle'); ?></title> 

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- plugins:css -->
  <link rel="stylesheet"  href="<?php echo e(url('css/mdi/css/materialdesignicons.min.css')); ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet"  href="<?php echo e(url('css/style.css')); ?>">
  <link rel="stylesheet"  href="<?php echo e(url('css/custom/home.css')); ?>">
  <link rel="shortcut icon" href="http://www.ariosh.com/images/ariosh_fav.ico">
  <!-- Font-awesome -->
  <link rel="stylesheet"  href="<?php echo e(url('fonts/font-awesome/css/font-awesome.css')); ?>"/>
  <link rel="stylesheet"  href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.dataTables.min.css"/>

  <!-- Bootstrap 4 -->
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo e(url('images/favicon.png')); ?>" />
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet" >
   <link href="<?php echo e(url('css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" >
    <link href="<?php echo e(url('css/fixedHeader.bootstrap4.min.css')); ?>" rel="stylesheet" >
<link href="<?php echo e(url('css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" >
<!-- <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" > -->
<link href="<?php echo e(url('css/datepicker.min.css')); ?>" rel="stylesheet">

  <?php echo $__env->yieldContent('styles'); ?>

  <style type="text/css">
  th{
        font-size: 17px !important;
  }
   td {
        font-size: 16px !important;
   }
.table thead tr th {
color: white;
background-color:#002545 ;
}


  </style>

</head>

<body>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside style="height: 100%;" class="mdc-persistent-drawer mdc-persistent-drawer--open">
      <nav class="mdc-persistent-drawer__drawer">
        <div class="mdc-persistent-drawer__toolbar-spacer">
          <a href="<?php echo e(url('/')); ?>" class="brand-logo">
						<img src="http://www.ariosh.com/images/ariosh_logo.png" alt="logo">
					</a>
        </div>
        <div style="height: 100%;" class="mdc-list-group">
          <nav style="height: 100%;" class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item <?php echo $__env->yieldContent('users_active'); ?>">
              <a class="mdc-drawer-link" href="<?php echo e(route('users')); ?>">
              <i class="fa fa-users pr-4 pl-1 fa-lg" aria-hidden="true"></i>
Users
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item <?php echo $__env->yieldContent('dashboard_active'); ?>">
              <a class="mdc-drawer-link" href="<?php echo e(route('all-personnel')); ?>">
                  <img width="19.13" height="17" src="<?php echo e(url('images/engineer.svg')); ?>" class="mr-4 ml-1">                Personnel
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="<?php echo e(route('projects')); ?>">
                <img width="19.13" height="17" src="<?php echo e(url('images/project.svg')); ?>" class="mr-4 ml-1"> 
                Projects
              </a>
            </div>
           
           
          </nav>
        </div>
      </nav>
    </aside>
    <!-- partial -->
    <!-- partial:partials/_navbar.html -->
    <header class="mdc-toolbar mdc-elevation--z4 mdc-toolbar--fixed" style="background-color: #002545 !important;">
      <div class="mdc-toolbar__row">
        <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
          <a href="#" class="menu-toggler material-icons mdc-toolbar__menu-icon">menu</a>
          
        </section>
        <section class="mdc-toolbar__section mdc-toolbar__section--align-end" role="toolbar">
          <div class="mr-4 " style="color:white">
            <a class="btn btn-danger " href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off" aria-hidden="true" ></i>
              Logout</a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
          </div>
        </section>
      </div>
    </header>
    <!-- partial -->
    
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
      <?php echo $__env->yieldContent('content'); ?>
      <!-- partial:partials/_footer.html -->
      <footer>
        <div class="mdc-layout-grid">
          <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
              <span class="text-muted">Copyright © 2018 <a style="color:#002545 !important;" href="https://www.ariosh.com" target="_blank">Ariosh Ltd</a>. All rights reserved.</span>
            </div>
          </div>
        </div>
      </footer>
      <!-- partial -->
    </div>
  </div>
  <!-- body wrapper #e52d27 -->
  <!-- plugins:js -->
  <script src="<?php echo e(url('js//material-components-web/dist/material-components-web.min.js')); ?>"></script>
  <script src="<?php echo e(url('js//jquery/dist/jquery.min.js')); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  
  <!-- bootstrap 4 and Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo e(url('js//misc.js')); ?>"></script>
  <script src="<?php echo e(url('js//material.js')); ?>"></script>
  <script src="<?php echo e(url('js/jquery.validate.min.js')); ?>"></script>

<script src="<?php echo e(url('js/toastr.min.js')); ?>"></script>
<script src="<?php echo e(url('js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(url('js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(url('js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(url('js/dataTables.fixedHeader.min.js')); ?>"></script>
 <script src="<?php echo e(url('js/bootstrap-datepicker.min.js')); ?>"></script>
  <?php echo $__env->yieldContent('page_scripts'); ?>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>