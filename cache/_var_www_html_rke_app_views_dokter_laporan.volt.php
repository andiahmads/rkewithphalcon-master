<div class="row">
<a href="<?= $this->url->getStatic('Dokter/pasienhar') ?>">  
  <div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card card-block">
      <h5 class="m-b-0 v-align-middle text-overflow">
        <span class="small pull-xs-right">
          <i class="material-icons text-success">people</i>
          <span style="line-height: 24px;"></span>
        </span>
        <span> <?= $jmlday->count() ?> </span>
      </h5>
      <div class="small text-overflow text-muted">
        Pasien
      </div>
      <div class="small text-overflow" align="right">
        <h5>Pasien <span>Hari Ini</span></h5>
      </div>
    </div>
  </div>
</a>
<a href="<?= $this->url->getStatic('Dokter/pasiensel') ?>">  
  <div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card card-block">
      <h5 class="m-b-0 v-align-middle text-overflow">
        <span class="small pull-xs-right">
          <i class="material-icons text-success">people</i>
          <span style="line-height: 24px;"></span>
        </span>
        <span> <?= $jmlall->count() ?> </span>
      </h5>
      <div class="small text-overflow text-muted">
        Pasien
      </div>
      <div class="small text-overflow" align="right">
        <h5>Pasien <span>Seluruhnya</span></h5>
      </div>
    </div>
  </div>
</a>
<a href="<?= $this->url->getStatic('Dokter/datadiagnosa') ?>">  <div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card card-block">
      <h5 class="m-b-0 v-align-middle text-overflow">
        <span class="small pull-xs-right">
          <i class="material-icons text-success">folder</i>
          <span style="line-height: 24px;"></span>
        </span>
        <?php $diagnosa = Diagnosa::countByid_dokter($this->session->get('nik')); ?>
        <span><?= $diagnosa ?></span>
      </h5>
      <div class="small text-overflow text-muted">
        Diagnosa
      </div>
      <div class="small text-overflow" align="right">
        <h5>Diagnosa</h5>
      </div>
    </div>
  </div>
</a>
</div>

