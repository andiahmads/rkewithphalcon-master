    <!doctype html>
<html lang="en">
<head>

    
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"/>
    <meta name="msapplication-tap-highlight" content="no">
    
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Milestone">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Milestone">

    <meta name="theme-color" content="#4C7FF0">
    
    <title>RSJ Tampan</title>

      <!-- page stylesheets -->
    <link rel="stylesheet" href="<?= $this->url->getStatic('styles/gsi-step-indicator.css') ?>"/>
    <link rel="stylesheet" href="<?= $this->url->getStatic('styles/tsf-step-form-wizard.css') ?>"/>

    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/datatables/media/css/dataTables.bootstrap4.css') ?>">    <!-- end page stylesheets -->

    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/bootstrap/dist/css/bootstrap.css') ?>"/>
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/pace/themes/blue/pace-theme-minimal.css') ?>"/>
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/font-awesome/css/font-awesome.css') ?>"/>
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/animate.css/animate.css') ?>"/>
    <link rel="stylesheet" href="<?= $this->url->getStatic('styles/app.css" id="loadtsf_styles_before') ?>"/>
    <link rel="stylesheet" href="<?= $this->url->getStatic('styles/app.skins.css') ?>"/>
    
    <!-- select -->
        <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/jquery.tagsinput/src/jquery.tagsinput.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/intl-tel-input/build/css/intlTelInput.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/bootstrap-daterangepicker/daterangepicker.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/clockpicker/dist/bootstrap-clockpicker.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/jquery-labelauty/source/jquery-labelauty.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/multiselect/css/multi-select.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/ui-select/dist/select.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/select2/select2.css') ?>">
    <link rel="stylesheet" href="<?= $this->url->getStatic('vendor/selectize/dist/css/selectize.css') ?>">
    <!-- endbuild -->
  </head>
<body>
<?php if ($this->session->nik) { ?>
<div class="app">
    <!--sidebar panel-->

<?php if ($this->session->level_pengguna == 'pendaftaran' || $this->session->level_pengguna == 'perawat') { ?>

    <div class="off-canvas-overlay" data-toggle="sidebar"></div>
    <!-- content panel -->
    <div class="main-panel">
        <!-- top header -->
        <nav class="header navbar">
             <?php if ($this->session->level_pengguna == 'perawat') { ?>  
 <div class="header-inner">
  <div class="navbar-item navbar-spacer-right brand hidden-lg-up">
    <!-- toggle offscreen menu -->
    <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen">
      <i class="material-icons">menu</i>
    </a>
    <!-- /toggle offscreen menu -->
    <!-- logo -->
    <a class="brand-logo hidden-xs-down">
      <img src="images/logo_white.png" alt="logo"/>
    </a>
    <!-- /logo -->
  </div>
  <ul class="nav nav-pills">
    <li class="nav-item">
     <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="<?= $this->url->getStatic('') ?>">
      <span> Home </span>
    </a>
    
  </li>
  <li class="nav-item">
   <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="<?= $this->url->getStatic('Asesmen/asesmenhariini') ?>">
    <span> Asesmen Pasien Hari Ini </span>
  </a>
  
</li>
<li class="nav-item">
  <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="<?= $this->url->getStatic('Asesmen/dataasesmen') ?>">
    <span> Asesmen Pasien </span>
  </a>
</li>

</ul>





<div class="navbar-item nav navbar-nav">
  <a href="<?= $this->url->get('keluar') ?>" class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" data-toggle="modal" data-target=".bd-example-modal-lg"><span>Logout</span>
    <i class="material-icons"> power_settings_new</i>
  </a>
</div>
<?php } else { ?>
<div class="header-inner">
  <div class="navbar-item navbar-spacer-right brand hidden-lg-up">
    <!-- toggle offscreen menu -->
    <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen">
      <i class="material-icons">menu</i>
    </a>
    <!-- /toggle offscreen menu -->
    <!-- logo -->
    <a class="brand-logo hidden-xs-down">
      <img src="images/logo_white.png" alt="logo"/>
    </a>
    <!-- /logo -->
  </div>
  <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="#">
    <span></span>
  </a>
  <div class="navbar-search navbar-item">
  </div>
  <div class="navbar-item nav navbar-nav">
    
    <div class="nav-item nav-link dropdown">
      
      <div class="dropdown-menu dropdown-menu-right notifications">
        <div class="dropdown-item">
          <div class="notifications-wrapper">
            
          </div>
          <div class="notification-footer">Notifications</div>
        </div>
      </div>
    </div>
    <a href="<?= $this->url->get('keluar') ?>" class="nav-item nav-link nav-link-icon demo5" data-toggle="modal" data-target=".bd-example-modal-lg">
      <i class="material-icons"> power_settings_new</i>
    </a>
  </div>
</div>

<?php } ?>



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="col-lg-12" align="center">
      
      <div class="row">
        <img src="<?= $this->url->getStatic('img/Logout.png') ?>">
        <br>
        <h1> Are You Sure??</h1>
      </div>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <a href="<?= $this->url->getStatic('keluar') ?>" class="btn btn-primary">Log out</a>
    </div>
  </div>
</div>
        </nav>
        <!-- /top header -->

        <!-- main area -->
        <div class="main-content">
          <div class="content-view">
            <?= $this->getContent() ?>
        </div>
        </div>
        <!-- /main area -->
    </div>
    <!-- /content panel -->

<?php } else { ?>
    <div class="off-canvas-overlay" data-toggle="sidebar"></div>
    <div class="sidebar-panel">

        <div class="brand">
    <!-- toggle offscreen menu -->
    <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen hidden-lg-up">
        <i class="material-icons">menu</i>
    </a>
    <!-- /toggle offscreen menu -->
    <!-- logo -->
    <a class="brand-logo">
        <img class="expanding-hidden" src="images/logo.png" alt=""/>
    </a>
    <!-- /logo -->
</div>
<div class="nav-profile dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
        <div class="user-image">
            <?= $this->tag->image(['images/avatar.jpg', 'class' => 'avatar img-circle']) ?>
        </div>
        <div class="user-info expanding-hidden">
            <?= $this->session->nama ?>
            <small class="bold"><?= $this->session->nik ?></small>
        </div>
    </a>
    <div class="dropdown-menu">
        <?php if ($this->session->level_pengguna != 'admin') { ?>
        <a class="dropdown-item" href="<?= $this->url->getStatic('Profile') ?>">Settings</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?= $this->url->getStatic('keluar') ?>">Logout</a>
        <?php } else { ?>
        <a class="dropdown-item" href="<?= $this->url->getStatic('keluar') ?>">Logout</a>
        <?php } ?>
    </div>
</div>
<!-- main navigation -->
<nav>
    <p class="nav-title">NAVIGATION</p>
    <?php if ($this->session->level_pengguna == 'admin') { ?>
    <ul class="nav">
        <!-- dashboard -->
        <li>
            <a href="<?= $this->url->getStatic('') ?>">
                <i class="material-icons text-primary">home</i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="<?= $this->url->getStatic('pengguna') ?>">
                <i class="material-icons text-warning">people</i>
                <span>Pengguna</span>
            </a>
        </li>
        <li>

            <a href="javascript:;">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-success">view_list</i>
                <span></span>
                <span>Data-Master</span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="<?= $this->url->get('Dokter/caripasien') ?>">
                        <span>Data Pasien</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $this->url->getStatic('Dokter') ?>">
                        <span>Dokter</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Obat</span>
                    </a>
                </li>
                
            </ul>
        </li>
        <!-- /apps -->
        <!-- ui -->
        <li>
            <a href="<?= $this->url->get('Asesmen/dataasesmen') ?>">
                <i class="material-icons text-primary">folder_shared</i>
                <span>Asesmen</span>
            </a>
            
        </li>
        <li>
            <a href="<?= $this->url->get('Dokter/datadiagnosa1') ?>">
                <i class="material-icons text-warning">folder_special</i>
                <span>Diagnosa</span>
            </a>
            
        </li>
        <li>
            <a href="<?= $this->url->get('Pengguna/laporan') ?>">
                <i class="material-icons text-success">folder</i>
                <span>Laporan</span>
            </a>
            
        </li>
        <!-- /ui -->
        

    </ul>
    <?php } elseif ($this->session->level_pengguna == 'dokter') { ?>
    <ul class="nav">
        <li>
            <a href="<?= $this->url->get('') ?>">
                <i class="material-icons text-primary">home</i>
                <span>Home Dokter</span>
            </a>
        </li>
        <li>
            <a href="<?= $this->url->getStatic('Dokter/datadiagnosa') ?>">
                <i class="material-icons text-warning"> folder_special </i>
                <span>Diagnosa Dokter</span>
            </a>
        </li>
        <li>
            <a href="<?= $this->url->get('Dokter/caripasien') ?>">
                <i class="material-icons text-success">folder_shared </i>
                <span>Data Pasien</span>
            </a>
        </li>

        <li>
            <a href="<?= $this->url->get('Dokter/laporan') ?>">
                <i class="material-icons text-blue">folder </i>
                <span>Laporan</span>
            </a>
        </li>
    </ul>
    <?php } elseif ($this->session->level_pengguna == 'lab') { ?>
    <ul class="nav">
        <li>
            <a href="<?= $this->url->get('frontend') ?>">
                <i class="material-icons text primary">home</i>
                <span>Home Lab</span>
            </a>
        </li>
    </ul>
    <?php } elseif ($this->session->level_pengguna == 'analisis') { ?>
    <ul class="nav">
        <li>
            <a href="<?= $this->url->get('frontend') ?>">
                <i class="material-icons text primary">home</i>
                <span>Home Analisis</span>
            </a>
        </li>
    </ul>
    <?php } elseif ($this->session->level_pengguna == 'kasir') { ?>
    <ul class="nav">
      <li>
          <a href="<?= $this->url->get('') ?>">
              <i class="material-icons text primary">home</i>
              <span>Home Pembayaran</span>
          </a>
      </li>
        <li>
            <a href="<?= $this->url->get('Detailpembayaran/index') ?>">
                <i class="material-icons text primary">history</i>
                <span>history Pembayaran</span>
            </a>
        </li>

    </ul>
    <?php } elseif ($this->session->level_pengguna == 'apoteker') { ?>
    <ul class="nav">
        <li>
            <a href="<?= $this->url->get('frontend') ?>">
                <i class="material-icons text primary">home</i>
                <span>Home Apoteker</span>
            </a>
        </li>
    </ul>
    <?php } elseif ($this->session->level_pengguna == 'pendaftaran') { ?>
    <ul class="nav">
        <li>
            <a href="<?= $this->url->get('/pendaftaran/index') ?>">
                <i class="material-icons text-success">home</i>
                <span>Home Pendaftaran</span>
            </a>
        </li>
    </ul>
    <?php } else { ?>
    <ul class="nav">
        <li>Anda SIapa?</li>
    </ul>
</nav>
<?php } ?>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar panel -->
    <!-- content panel -->
    <div class="main-panel">
        <!-- top header -->
        <nav class="header navbar">
             <?php if ($this->session->level_pengguna == 'perawat') { ?>  
 <div class="header-inner">
  <div class="navbar-item navbar-spacer-right brand hidden-lg-up">
    <!-- toggle offscreen menu -->
    <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen">
      <i class="material-icons">menu</i>
    </a>
    <!-- /toggle offscreen menu -->
    <!-- logo -->
    <a class="brand-logo hidden-xs-down">
      <img src="images/logo_white.png" alt="logo"/>
    </a>
    <!-- /logo -->
  </div>
  <ul class="nav nav-pills">
    <li class="nav-item">
     <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="<?= $this->url->getStatic('') ?>">
      <span> Home </span>
    </a>
    
  </li>
  <li class="nav-item">
   <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="<?= $this->url->getStatic('Asesmen/asesmenhariini') ?>">
    <span> Asesmen Pasien Hari Ini </span>
  </a>
  
</li>
<li class="nav-item">
  <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="<?= $this->url->getStatic('Asesmen/dataasesmen') ?>">
    <span> Asesmen Pasien </span>
  </a>
</li>

</ul>





<div class="navbar-item nav navbar-nav">
  <a href="<?= $this->url->get('keluar') ?>" class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" data-toggle="modal" data-target=".bd-example-modal-lg"><span>Logout</span>
    <i class="material-icons"> power_settings_new</i>
  </a>
</div>
<?php } else { ?>
<div class="header-inner">
  <div class="navbar-item navbar-spacer-right brand hidden-lg-up">
    <!-- toggle offscreen menu -->
    <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen">
      <i class="material-icons">menu</i>
    </a>
    <!-- /toggle offscreen menu -->
    <!-- logo -->
    <a class="brand-logo hidden-xs-down">
      <img src="images/logo_white.png" alt="logo"/>
    </a>
    <!-- /logo -->
  </div>
  <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="#">
    <span></span>
  </a>
  <div class="navbar-search navbar-item">
  </div>
  <div class="navbar-item nav navbar-nav">
    
    <div class="nav-item nav-link dropdown">
      
      <div class="dropdown-menu dropdown-menu-right notifications">
        <div class="dropdown-item">
          <div class="notifications-wrapper">
            
          </div>
          <div class="notification-footer">Notifications</div>
        </div>
      </div>
    </div>
    <a href="<?= $this->url->get('keluar') ?>" class="nav-item nav-link nav-link-icon demo5" data-toggle="modal" data-target=".bd-example-modal-lg">
      <i class="material-icons"> power_settings_new</i>
    </a>
  </div>
</div>

<?php } ?>



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="col-lg-12" align="center">
      
      <div class="row">
        <img src="<?= $this->url->getStatic('img/Logout.png') ?>">
        <br>
        <h1> Are You Sure??</h1>
      </div>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <a href="<?= $this->url->getStatic('keluar') ?>" class="btn btn-primary">Log out</a>
    </div>
  </div>
</div>
        </nav>
        <!-- /top header -->

        <!-- main area -->
        <div class="main-content">
          <div class="content-view">
            <?= $this->getContent() ?>
        </div>
        </div>
        <!-- /main area -->
    </div>
    <!-- /content panel -->

<?php } ?>
</div>
<?php } else { ?>
 <html>
<head>




</head>
<body>
<div class="app no-padding no-footer layout-static">
    <div class="session-panel">
        <div class="session">
            <div class="session-content">
                <div class="card card-block form-layout">
                    <form role="form" action="<?= $this->url->get('auth/loginproses') ?>" method="post" id="validate">
                        <div class="text-xs-center m-b-3">
                            <img src="images/1.jpg" height="80" alt="" class="m-b-1"/>
                            Selamat Datang !
                            </h5>
                            <p class="text-muted">
                                Silakan Anda Login Terlebih Dahulu
                            </p>
                        </div>
                        <?php $this->flashSession->output() ?>
                        <fieldset class="form-group">
                            <label for="username">
                                Silakan Inputkan nik/iduser
                            </label>
                            <input type="text" name="nik" class="form-control form-control-lg" id="username" placeholder="Nomor Induk Kepegawaian"/>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="password">
                                Masukan Password anda
                            </label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password Anda "/>
                        </fieldset>
                        <label class="custom-control custom-checkbox m-b-1">
                            <input type="checkbox" class="custom-control-input">

                        </label>
                        <button class="btn btn-primary btn-block btn-lg" type="submit">
                            Login
                        </button>


                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
</body>
</html>
<?php } ?>


    

    <!-- build:js({.tmp,app}) scripts/app.min.js -->
   
   
   
    <script src="<?= $this->url->getStatic('vendor/jquery/dist/jquery.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/pace/pace.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/tether/dist/js/tether.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/bootstrap/dist/js/bootstrap.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/fastclick/lib/fastclick.js') ?>"></script>
    <script src="<?= $this->url->getStatic('scripts/constants.js') ?>"></script>
    <script src="<?= $this->url->getStatic('scripts/main.js') ?>"></script>
    <!-- endbuild -->

    <!-- page scripts -->
    <script src="<?= $this->url->getStatic('vendor/parsleyjs/dist/parsley.min.js') ?>"></script>

    <!-- endbuild -->

       <!-- page scripts -->
    <script src="<?= $this->url->getStatic('vendor/datatables/media/js/jquery.dataTables.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/datatables/media/js/dataTables.bootstrap4.js') ?>"></script>


    <!-- select -->
       <script src="<?= $this->url->getStatic('vendor/jquery.tagsinput/src/jquery.tagsinput.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/intl-tel-input//build/js/intlTelInput.min.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/moment/min/moment.min.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/bootstrap-timepicker/js/bootstrap-timepicker.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/clockpicker/dist/jquery-clockpicker.min.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/select2/select2.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/selectize/dist/js/standalone/selectize.min.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/jquery-labelauty/source/jquery-labelauty.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/bootstrap-maxlength/src/bootstrap-maxlength.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/typeahead.js/dist/typeahead.bundle.js') ?>"></script>
    <script src="<?= $this->url->getStatic('vendor/multiselect/js/jquery.multi-select.js') ?>"></script>

    <script src="<?= $this->url->getStatic('scripts/forms/plugins.js') ?>"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.datatable').DataTable();
    })
    </script>

    <script type="text/javascript">
      window.paceOptions = {
        document: true,
        eventLag: true,
        restartOnPushState: true,
        restartOnRequestAfter: true,
        ajax: {
          trackMethods: [ 'POST','GET']
        }
      };
    </script>


   

</body>
</html>
