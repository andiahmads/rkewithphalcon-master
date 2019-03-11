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
      
      <div class="col-lg-12">
        <?php $this->flashSession->output(); ?>
        <div class="user-image col-lg-3" align="center">
          <img src="<?= $this->url->getStatic('images/avatar.jpg') ?>" class="avatar img-circle" height="200" width="200">
        </div>
        <div class="col-lg-8">
          <div class="form-group">
            <br>
            <label for="example-text-input" class="col-xs-3 col-form-label">No. RM</label>
            <div class="col-xs-8">
              <label for="example-text-input" class="col-xs-5 col-form-label">: <?= $pasien->no_rm ?></label>
              
            </div>
          </div><br>
          <div class="form-group">
            <label for="example-text-input" class="col-xs-3 col-form-label">Nama</label>
            <div class="col-xs-8">
              <label for="example-text-input" class="col-xs-5 col-form-label">: <?= $pasien->nama_pasien ?></label>
              
            </div>
          </div><br>
          <div class="form-group">
            <label for="example-text-input" class="col-xs-3 col-form-label">Tanggal Lahir</label>
            <div class="col-xs-8">
              <label for="example-text-input" class="col-xs-5 col-form-label">: <?= $pasien->tanggal_lahir ?></label>
              
            </div>
          </div><br>
          <div class="form-group">
            <?php  $lahir = new DateTime($pasien->tanggal_lahir);
            $today = new DateTime();
            $umur = $today->diff($lahir);
            ?>
            <label for="example-text-input" class="col-xs-3 col-form-label">Umur</label>
            <div class="col-xs-8">
              <label for="example-text-input" class="col-xs-5 col-form-label">: <?php echo $umur->y; ?> tahun <?php echo $umur->m; ?> Bulan </label>
              
            </div>
          </div><br>
          <div class="form-group">
            <label for="example-text-input" class="col-xs-3 col-form-label">Alamat</label>
            <div class="col-xs-8">
              <label for="example-text-input" class="col-xs-5 col-form-label">: <?= $pasien->alamat ?></label>
              
            </div>
          </div><br>
        </div>
      </div>


      <?php foreach ($data1 as $a) { ?>
      
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <br>
          <br>
          <a class="nav-link active" data-toggle="tab" href="#one" role="tab">Asesmen Pasien</a>
        </li>
        <li class="nav-item">
          <br>
          <br>
          <a class="nav-link " data-toggle="tab" href="#two" role="tab">Diagnosa Pasien</a>
        </li>
        
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <!-- asesmen -->
        <div class="tab-pane active" id="one" role="tabpanel">
          
          <table  class="table table-bordered datatable">

            <thead >
              <tr>
                <th>
                  ID Asesmen
                </th>
                <th>
                  Perawat
                </th>
                <th>
                  Dokter
                </th>
                <th>
                  tanggal
                </th>
                <th>Action
                </th>
              </tr>
            </thead>
            <tbody>
              <div class="list_pengguna"></div>
              <?php foreach ($asesmen as $ad) { ?>
              <tr>
                <td><?= $ad->id_asesmen ?></td>
                <?php $pengguna = Pengguna::findFirstBynik($ad->id_perawat) ?>
                <td><?= $pengguna->nama ?></td>
                <?php $dokter = Dokter::findFirstBynik($ad->id_dokter) ?>
                <td><?= $dokter->nama ?></td>
                <td><?= $ad->tanggal ?></td>
                <td >
                 <a href="<?= $this->url->getStatic('Dokter/editasesmen/') ?><?= $ad->id_asesmen ?>" class="btn btn-warning btn-sm"><i class="material-icons">edit</i></a>
               </td>
             </tr>
             <?php } ?>
             
           </tbody>

         </table>

       </div>
       <!-- end asesmen -->
       <!-- diagnosa -->
       <div class="tab-pane " id="two" role="tabpanel">
        <div class="card card-block">
         

          <table  class="table table-bordered datatable">

            <thead >
              <tr>
                <th>
                  ID Asesmen
                </th>
                <th>
                  Nama Dokter
                </th>
                <th>Diagnosa</th>
                <th>Tanggal</th>
                <th>Action
                </th>
              </tr>
            </thead>
            <tbody>
              <div class="list_pengguna"></div>
              <?php foreach ($diagnosa as $data) { ?>
              <tr>
                <td><?= $data->id_diagnosa ?></td>
                <?php $dokter = Dokter::findFirstBynik($data->id_dokter); ?>
                <td><?= $dokter->nama ?></td>
                <td><?= $data->diagnosa ?></td>
                <td><?= $data->tanggal ?></td>
                <td>
                  <?php if ($this->session->nik == $data->id_dokter) { ?>
                  <button id="edit" class="btn btn-warning btn-sm m-r-xs" data-toggle="modal"
                  data-target="#myModal<?= $data->id_diagnosa ?>"><i class="material-icons">edit</i></button>
                  <?php } ?>
                </td>
              </tr>

              <div class="modal fade" id="myModal<?= $data->id_diagnosa ?>" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <form action="<?= $this->url->getStatic('Dokter/editdiagnosa/') ?><?= $data->id_diagnosa ?>" method="POST">
                   <div class="card">
                    <div class="card-header bg-primary" data-background-color="purple">
                      <button type="button" class="close" data-dismiss="modal">&times;
                      </button>
                      <h4 class="modal-title">Edit Diagnosa</h4>
                    </div>
                    <div class="card-content">
                      <div class="modal-body">
                        <div class="row-content">
                          <div class="form-group">
                            <label for="">Diagnosa :</label>
                            <textarea class="form-control" name="diagnosa"> <?= $data->diagnosa ?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="">Password :</label>
                            <input type="password" name="pass" placeholder="Konfirmasi Password" class="form-control" >
                          </div>
                          


                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                        Close
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <?php } ?>
        </tbody>
      </table>
    </div>




  </div>
  <!-- end diagnosa -->

</div>



<?php } ?>
</div>
</div>
