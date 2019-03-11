 {% if session.level_pengguna == 'perawat' %}  
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
     <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="{{ static_url('')}}">
      <span> Home </span>
    </a>
    
  </li>
  <li class="nav-item">
   <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="{{ static_url('Asesmen/asesmenhariini') }}">
    <span> Asesmen Pasien Hari Ini </span>
  </a>
  
</li>
<li class="nav-item">
  <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="{{ static_url('Asesmen/dataasesmen') }}">
    <span> Asesmen Pasien </span>
  </a>
</li>

</ul>





<div class="navbar-item nav navbar-nav">
  <a href="{{url('keluar')}}" class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" data-toggle="modal" data-target=".bd-example-modal-lg"><span>Logout</span>
    <i class="material-icons"> power_settings_new</i>
  </a>
</div>
{% else %}
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
    <a href="{{url('keluar')}}" class="nav-item nav-link nav-link-icon demo5" data-toggle="modal" data-target=".bd-example-modal-lg">
      <i class="material-icons"> power_settings_new</i>
    </a>
  </div>
</div>

{% endif %}



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="col-lg-12" align="center">
      
      <div class="row">
        <img src="{{ static_url('img/Logout.png') }}">
        <br>
        <h1> Are You Sure??</h1>
      </div>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <a href="{{ static_url('keluar') }}" class="btn btn-primary">Log out</a>
    </div>
  </div>
</div>