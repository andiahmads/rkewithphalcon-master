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
    <link rel="stylesheet" href="{{ static_url('styles/gsi-step-indicator.css')}}"/>
    <link rel="stylesheet" href="{{ static_url('styles/tsf-step-form-wizard.css')}}"/>

    <link rel="stylesheet" href="{{ static_url('vendor/datatables/media/css/dataTables.bootstrap4.css')}}">    <!-- end page stylesheets -->

    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="{{ static_url('vendor/bootstrap/dist/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{ static_url('vendor/pace/themes/blue/pace-theme-minimal.css')}}"/>
    <link rel="stylesheet" href="{{ static_url('vendor/font-awesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{ static_url('vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{ static_url('styles/app.css" id="loadtsf_styles_before')}}"/>
    <link rel="stylesheet" href="{{ static_url('styles/app.skins.css')}}"/>
    
    <!-- select -->
        <link rel="stylesheet" href="{{ static_url('vendor/jquery.tagsinput/src/jquery.tagsinput.css')}}">
    <link rel="stylesheet" href="{{ static_url('vendor/intl-tel-input/build/css/intlTelInput.css')}}">
    <link rel="stylesheet" href="{{ static_url('vendor/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ static_url('vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" href="{{ static_url('vendor/clockpicker/dist/bootstrap-clockpicker.min.css')}}">
    <link rel="stylesheet" href="{{ static_url('vendor/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{ static_url('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}">
    <link rel="stylesheet" href="{{ static_url('vendor/jquery-labelauty/source/jquery-labelauty.css')}}">
    <link rel="stylesheet" href="{{ static_url('vendor/multiselect/css/multi-select.css')}}">
    <link rel="stylesheet" href="{{ static_url('vendor/ui-select/dist/select.css')}}">
    <link rel="stylesheet" href="{{ static_url('vendor/select2/select2.css')}}">
    <link rel="stylesheet" href="{{ static_url('vendor/selectize/dist/css/selectize.css')}}">
    <!-- endbuild -->
  </head>
<body>
{% if session.nik %}
<div class="app">
    <!--sidebar panel-->

{% if session.level_pengguna == 'pendaftaran' or session.level_pengguna == 'perawat' %}

    <div class="off-canvas-overlay" data-toggle="sidebar"></div>
    <!-- content panel -->
    <div class="main-panel">
        <!-- top header -->
        <nav class="header navbar">
            {% include 'layouts/navbar-header.volt' %}
        </nav>
        <!-- /top header -->

        <!-- main area -->
        <div class="main-content">
          <div class="content-view">
            {{ content() }}
        </div>
        </div>
        <!-- /main area -->
    </div>
    <!-- /content panel -->

{% else %}
    <div class="off-canvas-overlay" data-toggle="sidebar"></div>
    <div class="sidebar-panel">

        {% include 'layouts/sidebar-panel.volt' %}
        <!-- /main navigation -->
    </div>
    <!-- /sidebar panel -->
    <!-- content panel -->
    <div class="main-panel">
        <!-- top header -->
        <nav class="header navbar">
            {% include 'layouts/navbar-header.volt' %}
        </nav>
        <!-- /top header -->

        <!-- main area -->
        <div class="main-content">
          <div class="content-view">
            {{ content() }}
        </div>
        </div>
        <!-- /main area -->
    </div>
    <!-- /content panel -->

{% endif %}
</div>
{% else  %}
{% include 'auth/login.volt' %}
{% endif %}


    

    <!-- build:js({.tmp,app}) scripts/app.min.js -->
   
   
   
    <script src="{{ static_url('vendor/jquery/dist/jquery.js')}}"></script>
    <script src="{{ static_url('vendor/pace/pace.js')}}"></script>
    <script src="{{ static_url('vendor/tether/dist/js/tether.js')}}"></script>
    <script src="{{ static_url('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{ static_url('vendor/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{ static_url('scripts/constants.js')}}"></script>
    <script src="{{ static_url('scripts/main.js')}}"></script>
    <!-- endbuild -->

    <!-- page scripts -->
    <script src="{{ static_url('vendor/parsleyjs/dist/parsley.min.js')}}"></script>

    <!-- endbuild -->

       <!-- page scripts -->
    <script src="{{ static_url('vendor/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{ static_url('vendor/datatables/media/js/dataTables.bootstrap4.js')}}"></script>


    <!-- select -->
       <script src="{{ static_url('vendor/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <script src="{{ static_url('vendor/intl-tel-input//build/js/intlTelInput.min.js')}}"></script>
    <script src="{{ static_url('vendor/moment/min/moment.min.js')}}"></script>
    <script src="{{ static_url('vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ static_url('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ static_url('vendor/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
    <script src="{{ static_url('vendor/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
    <script src="{{ static_url('vendor/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{ static_url('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{ static_url('vendor/select2/select2.js')}}"></script>
    <script src="{{ static_url('vendor/selectize/dist/js/standalone/selectize.min.js')}}"></script>
    <script src="{{ static_url('vendor/jquery-labelauty/source/jquery-labelauty.js')}}"></script>
    <script src="{{ static_url('vendor/bootstrap-maxlength/src/bootstrap-maxlength.js')}}"></script>
    <script src="{{ static_url('vendor/typeahead.js/dist/typeahead.bundle.js')}}"></script>
    <script src="{{ static_url('vendor/multiselect/js/jquery.multi-select.js')}}"></script>

    <script src="{{ static_url('scripts/forms/plugins.js')}}"></script>

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
