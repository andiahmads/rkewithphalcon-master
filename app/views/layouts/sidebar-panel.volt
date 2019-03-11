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
            {{ image('images/avatar.jpg','class':'avatar img-circle') }}
        </div>
        <div class="user-info expanding-hidden">
            {{ session.nama }}
            <small class="bold">{{ session.nik }}</small>
        </div>
    </a>
    <div class="dropdown-menu">
        {% if session.level_pengguna != 'admin' %}
        <a class="dropdown-item" href="{{ static_url('Profile') }}">Settings</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ static_url('keluar') }}">Logout</a>
        {% else %}
        <a class="dropdown-item" href="{{ static_url('keluar') }}">Logout</a>
        {% endif %}
    </div>
</div>
<!-- main navigation -->
<nav>
    <p class="nav-title">NAVIGATION</p>
    {% if session.level_pengguna == 'admin' %}
    <ul class="nav">
        <!-- dashboard -->
        <li>
            <a href="{{ static_url('') }}">
                <i class="material-icons text-primary">home</i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="{{ static_url('pengguna') }}">
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
                    <a href="{{ url('Dokter/caripasien') }}">
                        <span>Data Pasien</span>
                    </a>
                </li>
                <li>
                    <a href="{{ static_url('Dokter') }}">
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
            <a href="{{ url('Asesmen/dataasesmen') }}">
                <i class="material-icons text-primary">folder_shared</i>
                <span>Asesmen</span>
            </a>
            
        </li>
        <li>
            <a href="{{ url('Dokter/datadiagnosa1') }}">
                <i class="material-icons text-warning">folder_special</i>
                <span>Diagnosa</span>
            </a>
            
        </li>
        <li>
            <a href="{{ url('Pengguna/laporan') }}">
                <i class="material-icons text-success">folder</i>
                <span>Laporan</span>
            </a>
            
        </li>
        <!-- /ui -->
        

    </ul>
    {% elseif session.level_pengguna == 'dokter' %}
    <ul class="nav">
        <li>
            <a href="{{ url('') }}">
                <i class="material-icons text-primary">home</i>
                <span>Home Dokter</span>
            </a>
        </li>
        <li>
            <a href="{{ static_url('Dokter/datadiagnosa') }}">
                <i class="material-icons text-warning"> folder_special </i>
                <span>Diagnosa Dokter</span>
            </a>
        </li>
        <li>
            <a href="{{ url('Dokter/caripasien') }}">
                <i class="material-icons text-success">folder_shared </i>
                <span>Data Pasien</span>
            </a>
        </li>

        <li>
            <a href="{{ url('Dokter/laporan') }}">
                <i class="material-icons text-blue">folder </i>
                <span>Laporan</span>
            </a>
        </li>
    </ul>
    {% elseif session.level_pengguna == 'lab' %}
    <ul class="nav">
        <li>
            <a href="{{ url('frontend') }}">
                <i class="material-icons text primary">home</i>
                <span>Home Lab</span>
            </a>
        </li>
    </ul>
    {% elseif session.level_pengguna == 'analisis' %}
    <ul class="nav">
        <li>
            <a href="{{ url('frontend') }}">
                <i class="material-icons text primary">home</i>
                <span>Home Analisis</span>
            </a>
        </li>
    </ul>
    {% elseif session.level_pengguna == 'kasir' %}
    <ul class="nav">
      <li>
          <a href="{{ url('') }}">
              <i class="material-icons text primary">home</i>
              <span>Home Pembayaran</span>
          </a>
      </li>
        <li>
            <a href="{{ url('Detailpembayaran/index') }}">
                <i class="material-icons text primary">history</i>
                <span>history Pembayaran</span>
            </a>
        </li>

    </ul>
    {% elseif session.level_pengguna == 'apoteker' %}
    <ul class="nav">
        <li>
            <a href="{{ url('frontend') }}">
                <i class="material-icons text primary">home</i>
                <span>Home Apoteker</span>
            </a>
        </li>
    </ul>
    {% elseif session.level_pengguna == 'pendaftaran' %}
    <ul class="nav">
        <li>
            <a href="{{ url('/pendaftaran/index') }}">
                <i class="material-icons text-success">home</i>
                <span>Home Pendaftaran</span>
            </a>
        </li>
    </ul>
    {% else %}
    <ul class="nav">
        <li>Anda SIapa?</li>
    </ul>
</nav>
{% endif %}