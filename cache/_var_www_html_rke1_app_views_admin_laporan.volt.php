<div class="row">
  <div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card card-block">
      <h5 class="m-b-0 v-align-middle text-overflow">
        <span class="small pull-xs-right">
          <i class="material-icons text-success">people</i>
          <span style="line-height: 24px;"></span>
        </span>
        <span> <?= $pasien->count() ?> </span>
      </h5>
      <div class="small text-overflow text-muted">
        Pasien
      </div>
      <div class="small text-overflow" align="right">
        <h5>Pasien</h5>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card card-block">
      <h5 class="m-b-0 v-align-middle text-overflow">
        <span class="small pull-xs-right">
          <i class="material-icons text-success">people</i>
          <span style="line-height: 24px;"></span>
        </span>
        <span> <?= $pb->count() ?> </span>
      </h5>
      <div class="small text-overflow text-muted">
        Pasien
      </div>
      <div class="small text-overflow" align="right">
        <h5>Pasien <span>Berobat</span></h5>
      </div>
    </div>
  </div>

<div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card card-block">
      <h5 class="m-b-0 v-align-middle text-overflow">
        <span class="small pull-xs-right">
          <i class="material-icons text-success">folder</i>
          <span style="line-height: 24px;"></span>
        </span>
        <span><?= $diagnosa->count() ?></span>
      </h5>
      <div class="small text-overflow text-muted">
        Diagnosa
      </div>
      <div class="small text-overflow" align="right">
        <h5>Diagnosa</h5>
      </div>
    </div>
  </div>

<div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card card-block">
      <h5 class="m-b-0 v-align-middle text-overflow">
        <span class="small pull-xs-right">
          <i class="material-icons text-success">folder</i>
          <span style="line-height: 24px;"></span>
        </span>
        <span><?= $asesmen->count() ?></span>
      </h5>
      <div class="small text-overflow text-muted">
        Diagnosa
      </div>
      <div class="small text-overflow" align="right">
        <h5>Asesmen</h5>
      </div>
    </div>
  </div>
</div>
