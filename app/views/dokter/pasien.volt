<?php $this->flashSession->output(); ?>

<div class="row">
 <div class=" col-lg-4">
  <div class=" card profile-bio m-r-xs m-b-xs">
    <a class="background">
    </a>
    <a href="javascript:;" class="avatar">
      <img src="{{ static_url('images/avatar.jpg')}}" alt=""/>
    </a>
    <div class="user-details">
      <div class="user-name">
        <a href="javascript:;">
          {{data.nama_pasien}}
        </a>
      </div>
      <a href="javascript:;">

        <span>
          {{data.no_rm}}
        </span>
      </a>
    </div>
    <div class="user-stats form-group">

      <div class="form-group m-b">
        <small><strong>
          Tanggal Lahir :
        </strong></small>

        <label class="form-control btn-sm m-r-xs m-b-xs col-lg-12"> {{ data.tanggal_lahir }} </label>
      </div>

      <div class="form-group m-b">
        <small><strong>
          Umur :
        </strong></small>
        <?php  $lahir = new DateTime($data->tanggal_lahir);
        $today = new DateTime();
        $umur = $today->diff($lahir);
        ?>
        <label class="form-control btn-sm m-r-xs m-b-xs col-lg-12"> <?php echo $umur->y; ?> tahun <?php echo $umur->m; ?> Bulan </label>
      </div>

      <div class="form-group m-b">
        <small><strong>
          Jenis Kelamin :
          </strong></small>
        <label class="form-control btn-sm m-r-xs m-b-xs col-lg-12"> {{ data.jenis_kelamin }} </label>
      </div>
      
      <div class="form-group m-b">
        <small><strong>
          Ayah :
        </strong></small>

        <label class="form-control btn-sm m-r-xs m-b-xs col-lg-12"> {{ data.nama_ayah }} </label>
      </div>
      <div class="form-group m-b">
        <small><strong>
          Ibu :
        </strong></small>

        <label class="form-control btn-sm m-r-xs m-b-xs col-lg-12"> {{ data.nama_ibu }} </label>
      </div>
      <div class="form-group m-b">
        <br>
        <button type="submit" class="btn btn-outline-success m-b btn-round btn-sm m-r-xs m-b-xs col-lg-12 "><i class="material-icons">visibility </i>
          View Profile Pasien
        </button>
        <br>
      </div>

    </div>

  </div>
</div>
<div class="card col-lg-8">

  <div class="card-block">
    <h4><strong><i class="material-icons m-r-xs col-lg-8">edit </i>Diagnosa dan Resep</strong></h4>
  </div>    
  <div class=" card card-block">

   <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#one" role="tab">Asesmen Pasien</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " data-toggle="tab" href="#two" role="tab">Diagnosa Pasien</a>
    </li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="one" role="tabpanel">
      <div class="form-group">
        <h3 align="center">
          Asesmen Pasein
        </h3>
        <br>

        <div class="card-collapsed" align="center">
          <a href="{{ static_url('Dokter/asesmen/')}}{{pb.id_berobat}}" class="btn btn-primary btn-lg btn-icon m-b-1" ><i class="material-icons">
            library_add
          </i>
          <span>Asesmen Pasien</span>
        </a>
      </div>

    </div>
  </div>
  <div class="tab-pane " id="two" role="tabpanel">
    <form action="{{ static_url('Dokter/diagnosa/') }}{{data.no_rm}}" method="post">
      <div class="form-group">
        <label for="exampleTextarea">

          Diagnosa :
        </label>
        <input type="hidden" name="pb" value="{{pb.id_berobat}}">
        <textarea class="form-control" name="diagnosa" required=""></textarea>
      </div>
    </div>


  </div>

</div>
<div class="col-lg-9"></div>
<div class="col-lg-3">
  <button class="form-control btn btn-primary m-b-1">Selesai</button>
</div>
</form>
</div>
</div>
</div>

</div>


