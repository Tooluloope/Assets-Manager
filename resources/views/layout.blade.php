<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- plugins:css -->
  <link rel="stylesheet" href="css/mdi/css/materialdesignicons.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/custom/home.css">

  <!-- Font-awesome -->
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css"/>
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  @yield('styles')
</head>

<body>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside style="height: 100%;" class="mdc-persistent-drawer mdc-persistent-drawer--open">
      <nav class="mdc-persistent-drawer__drawer">
        <div class="mdc-persistent-drawer__toolbar-spacer">
          <a href="index.html" class="brand-logo">
						<img src="http://www.ariosh.com/images/ariosh_logo.png" alt="logo">
					</a>
        </div>
        <div style="height: 100%;" class="mdc-list-group">
          <nav style="height: 100%;" class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item @yield('users_active')">
              <a class="mdc-drawer-link" href="{{ route('users') }}">
              <i class="fa fa-users pr-4 pl-1 fa-lg" aria-hidden="true"></i>
Users
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item @yield('dashboard_active')">
              <a class="mdc-drawer-link" href="{{ route('personnel') }}">
                  <img width="19.13" height="17" src="images/engineer.svg" class="mr-4 ml-1">                Personnel
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{ route('projects') }}">
                <img width="19.13" height="17" src="images/project.svg" class="mr-4 ml-1"> 
                Projects
              </a>
            </div>
            <!-- <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="ui-sub-menu">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                UI Features
                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="pages/ui-features/buttons.html">
                      Buttons
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="pages/ui-features/typography.html">
                      Typography
                    </a>
                  </div>
                </nav>
              </div>
            </div> -->
            <!-- <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#">
              <i class="fa fa-thumb-tack pr-4 pl-1 fa-lg" aria-hidden="true"></i>
                Locations
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="#">
              <i class="fa fa-question-circle-o pr-4 pl-1 fa-lg" aria-hidden="true"></i>
                Requests
              </a>
            </div> -->
            
           
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
            <a class="btn btn-danger "><i class="fa fa-power-off" aria-hidden="true"></i>
              Logout</a>
          </div>
        </section>
      </div>
    </header>
    <!-- partial -->
    
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
      @yield('content')
      <!-- partial:partials/_footer.html -->
      <footer>
        <div class="mdc-layout-grid">
          <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
              <span class="text-muted">Copyright © 2018 <a class="text-green" href="https://www.ariosh.com" target="_blank">Ariosh Ltd</a>. All rights reserved.</span>
            </div>
          </div>
        </div>
      </footer>
      <!-- partial -->
    </div>
  </div>
  <!-- body wrapper #e52d27 -->
  <!-- plugins:js -->
  <script src="js/material-components-web/dist/material-components-web.min.js"></script>
  <script src="js/jquery/dist/jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  
  <!-- bootstrap 4 and Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/misc.js"></script>
  <script src="js/material.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

  @yield('page_scripts')
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>