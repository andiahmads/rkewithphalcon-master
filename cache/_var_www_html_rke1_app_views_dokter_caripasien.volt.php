  <div class="card">
    <div class="card-block">
      <span class="m-b-1">Silahkan masukkan No.RM atau Nama pasien</span>
      <form action="<?= $this->url->getStatic('Dokter/detailpasien') ?>" method="post">
        <div class="modal-header">
          <div class="m-b ">
            <select data-placeholder="No. RM / NamaPasien" name="nama" type="submit" class="select2 m-b-1" style="width: 100%;">
              <option></option>
              <?php foreach ($data as $d) { ?>
              <option><?= $d->nama_pasien ?></option>
              <option><?= $d->no_rm ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="m-b">
            <button type="submit" class="btn btn-primary">View</button>
          </div>
        </div>
      </form>
      <br>
