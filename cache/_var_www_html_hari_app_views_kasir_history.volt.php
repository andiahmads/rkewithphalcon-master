<div class="card-header bg-blue"><b></b><strong>history Pembayaran</strong></b></div>
<div class="card">

              <div class="card-block">

                <table class="table table-bordered datatable">

                  <thead>
                    <tr>
                      <th>
                        Nomor Rekamemdis
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Nama Dokter
                      </th>
                      <th>
                        Poly
                      </th>
                        <th>
                          Tanggal Berobat
                        </th>
                        <th>
                          Total Pembayaran
                        </th>
                        <th>
                            Status
                        </th>

                    </tr>
                  </thead>
                  <tbody>

        <?php foreach ($lunas as $datas) { ?>

        <tr>
            <td><?= $datas->no_rm ?></td>
            <?php $nama = DataPasien::findFirstByno_rm($datas->no_rm); ?>
            <td><?= $nama->nama_pasien ?></td>
            <?php $dokter = Dokter::findFirstBynik($datas->nik); ?>
            <td><?= $dokter->nama ?></td>
            <td><?= $datas->poly ?></td>
            <td><?= $datas->tanggal_berobat ?></td>
            <td><?= $datas->total_pembayaran ?></td>
            <td><?= $datas->status ?></td>

        </tr>

        <?php } ?>


    </tbody>

    </table>

              </div>
