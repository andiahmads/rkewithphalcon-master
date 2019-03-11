<?php $this->flashSession->output(); ?>
<div class="card-header bg-blue"><b><strong>Data Pasien Berobat</strong></b></div>
<div class="card card-block">
 

  <table  class="table table-bordered datatable">

    <thead >
      <tr>
        <th>
          ID Berobat
        </th>
        <th>No. RM</th>
        <th>Nama Pasien</th>
        <th>
          Nama Dokter
        </th>
        <th>Tanggal</th>
        </th>
      </tr>
    </thead>
    <tbody>
      <div class="list_pengguna"></div>
      <?php foreach ($data as $d) { ?>
      <tr>
        <td align="center"><?= $d->id_berobat ?></td>
        <td align="center"><?= $d->no_rm ?></td>
        <?php $pasien = DataPasien::findFirstByno_rm($d->no_rm); ?>
        <td><?= $pasien->nama_pasien ?></td>
        <?php $dokter = Dokter::findFirstBynik($d->nik); ?>
        <td><?= $dokter->nama ?></td>
        <td><?= $d->tanggal_berobat ?></td>
 
      </tr>

  <?php } ?>
</tbody>
</table>
</div>

