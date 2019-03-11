



<div class="card">
  <div class="card-header bg-white ">
    <div class="col-lg-8">
	<div class="col-lg-2">
		<img src="<?= $this->url->getStatic('img/riau.png') ?>" height="120">
	</div>
	<div class="col-lg-9">
		<h5><strong>PEMERINTAH PROVINSI RIAU</strong></h5>
		<h4><strong>RUMAH SAKIT JIWA TAMPAN</strong></h4>
		<h5>Jl. H. R. Soebrantas Km. 12,5 Pekanbaru Telp. (0761) 63240 fax. (0761) 63239 E-mail : rstampan@yahoo.com</h5>
	</div>
</div>



  </div>


                <ul class="nav nav-tabs" role="tablist" >
                  <li class="nav-item">
                    <button class="btn btn-outline-info btn  m-r-xs-m-b-xs" data-toggle="tab" href="#one" role="tab"> <p>Pendafran Pasien</p></button>
                  </li>
                  <li class="nav-item">
                    <button class="btn btn-outline-info m-r-xs-m-b-xs" data-toggle="tab" href="#two" role="tab"><p>Index Pasien</p></button>

                  <li class="nav-item">
                    <button class="btn btn-outline-info m-r-xs-m-b-xs" data-toggle="tab" href="#three" role="tab"><p>Daftar Berobat</p></button>
                  </li>
                  <li  class="nav-item">
                    <button class="btn btn-outline-info m-r-xs-m-b-xs" data-toggle="tab" href="#four" role="tab"><p>Detail</p></button>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content  ">


                  <div class="tab-pane active" id="one" role="tabpanel" required="">



        <div class="row">
          <div class="col-lg-6 ">
            <div class="card">
            <div class="card-header bg-white">
               <?php $this->flashSession->output() ?>
            <form action="<?= $this->url->getStatic('Pendaftaran/insert') ?>" method="POST">
          <p class="m-t-1">Nomor Rm:</p>
            <div class="input-prepend input-group m-b-1">
              <span class="add-on input-group-addon bg-blue">
                  <i class="material-icons ">
                        edit
                    </i>
                      </span>
                      <input type="text" name="no-rm" class="form-control" placeholder="no rm" id="maxlength" maxlength="6" required oninvalid="this.setCustomValidity('nomor rekamedis tidak boleh kosong !')"/>
                       </div>

    <p class="m-t-1">Nama Pasien:</p>
    <div class="input-prepend input-group m-b-1">
      <span class="add-on input-group-addon bg-blue">
          <i class="material-icons ">
                edit
            </i>
              </span>
              <input type="text" name="nama-pasien" class="form-control " value="" placeholder="Nama Pasien" required oninvalid="this.setCustomValidity('Nama Pasien tidak boleh kosong !')"/>
               </div>

               <p class="m-t-1">Tanggal Lahir:</p>
    <div class="input-prepend input-group m-b-1">
      <span class="add-on input-group-addon bg-blue">
          <i class="material-icons ">
                date_range
            </i>
              </span>
              <input type="date" name="tanggal" class="form-control" value="" placeholder="tanggal" required />
               </div>




                     <div class="card-header no-bg">
                    <h6 class="m-t-1">Jenis-Kelamin:</h6>
                    <div class="radio-control-stacked">
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="tes" type="radio" value="Laki_Laki">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Laki_Laki</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="tes" type="radio" value="Perempuan">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Perempuan</span>
                      </label>
                    </div></div>

                    <div class="card-header no-bg">
                    <h6 class="m-t-1">Agama:</h6>
                    <div class="custom-control-stacked" >
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="agama" type="radio" value="Islam" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Islam</span>
                      </label>
                      <label class="custom-control custom-radio" name="agama">
                        <input class="custom-control-input" name="agama" type="radio" value="Kristen">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Kristen</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="agama" type="radio" value="Budha">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Budha</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="agama" type="radio" value="Katolik">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Katolik</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="agama" type="radio" value="Konghocu">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">hindu</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="agama" type="radio" value="Hindu">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Konghocu</span>
                      </label>

                    </div></div>



                    <div class="card-header no-bg">
                     <h6 class="m-t-1">Status:</h6>
                    <div class="custom-control-stacked">
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="status_pasien" type="radio" value="Tidak_Kawin">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Tidak_Kawin</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="status_pasien" type="radio" value="Kawin">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Kawin</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="status_pasien" type="radio" value="Cerai_Hidup">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Cerai_Hidup</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="status_pasien" type="radio" value="Cerai_Mati">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Cerai_Mati</span>
                      </label>
                    </div></div>

                    <div class="card-header no-bg">
                     <h6 class="m-t-1">Pendidikan:</h6>
                    <div class="custom-control-stacked">
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="pendidikan" type="radio" value="Tidak_Sekolah">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Tidak_Sekolah</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="pendidikan" type="radio" value="SD">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">SD</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="pendidikan" type="radio" value="SMP">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">SMP</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="pendidikan" type="radio" value="SMA">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">SMA</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="pendidikan" type="radio" value="Akademik">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Akademik</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="pendidikan" type="radio" value="Universitas">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Universitas</span>
                      </label>
                    </div></div>

                    <div class="card-header no-bg">
                    <h6 class="m-t-1">Pekerjaan:</h6>
                    <div class="custom-control-stacked">
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="work" type="radio" value="Tidak_Kerja">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Tidak_Kerja</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="work" type="radio" value="Buruh">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Buruh</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="work" type="radio" value="Swasta">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Swasta</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="work" type="radio" value="Wiraswasta">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Wiraswasta</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="work" class="custom-control-input" name="work" type="radio" value="PNS">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">PNS</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="work" class="custom-control-input" name="work" type="radio" value="TNI">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">TNI</span>
                      </label><br></br>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="work" type="radio" value="POLRI">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">POLRI</span>
                      </label>
                    </div></div>



                    <p class="m-t-1">Bahasa Sehari Hari:</p>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="bahasa" class="form-control" value="" placeholder="bahasa" required oninvalid="this.setCustomValidity('kolom bahasa tidak boleh kosong !')"/>
                    </div>

                  <p class="m-t-1">Nama Ayah:</p>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="ayah" class="form-control" value="" placeholder="ayah"/>
                    </div>


                   <p class="m-t-1">Nama Ibu:</p>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="ibu" class="form-control" value="" placeholder="ibu" required oninvalid="this.setCustomValidity('nama ibu tidak boleh kosong !')"/>
                    </div>







        </div>

    </div>


  </div>






<div class="row">
  <div class="col-lg-6">
    <div class="card">
<div class="card-header bg-white">


           <p class="m-t-1">Budaya atau Suku:</p>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="suku" class="form-control" value="" placeholder="budaya/Suku"/>
                    </div>

                   <p class="m-t-1">Alamat:</p>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="alamat" class="form-control" value="" placeholder="Alamat"/>
                    </div>
                    <p class="m-t-1">RT:</p>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="number" name="rt" class="form-control" value="" placeholder="Rt"/>
                    </div>
                    <p class="m-t-1">RW:</p>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="number" name="rw" class="form-control" value="" placeholder="Rw"/>
                    </div>
                    <p class="m-t-1">Telepon:</p>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          call
                        </i>
                      </span>
                      <input type="number" name="telpon" class="form-control" value="+628" placeholder=""/>
                    </div>
                    <p class="m-t-1">Perubahan Alamat:</p>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="alamat1" class="form-control" value="" data-placeholder="Alamat"/>
                    </div>
                    <p class="m-t-1">Nama Wali 1:</p>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="Wali-1" class="form-control" value="" placeholder="Wali-1"/>
                    </div>
                    <p class="m-t-1">Nama Wali 2:</p>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="wali-2" class="form-control" value="" placeholder="Wali 2"/>
                    </div>

                  <p class="m-t-1">Hubungan:</p>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="hubungan" class="form-control" value="" placeholder="Hubungan"/>
                    </div>
                    <p class="m-t-1">Nomor Telepon Wali:</p>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          call
                        </i>
                      </span>
                      <input type="number" name="no-wali" class="form-control" value="+628" placeholder=""/>
                    </div>



                      <div class="col-lg-9">
                      <button class="btn bg-blue btn-round btn-lg btn-block" type="submit">
                        <i class="material-icons">send</i>
                        <span>save</span>
                      </button>
                    </div>



                    </div>

                    </div>
                    </div>

                    </div>
                    </form>



                  </div><!--tutup div panel atas -->



                </div>

                    <div class="tab-pane" id="two" role="tabpanel">

                        <div class="card-header bg-blue">Lihat pasien</div>
                       <div class="card-block">

                <table class="table table-bordered datatable">

                  <thead>
                    <tr>
                      <th>
                        Nomor Rekam Medis
                      </th>
                      <th>
                        Nama Pasien
                      </th>
                      <th>
                        Tanggal Lahir
                      </th>
                      <th>
                        Nama Orang Tua
                      </th>
                        <th>Action
                        </th>

                    </tr>
                  </thead>
                  <tbody>

        <?php foreach ($pasien as $datas) { ?>

        <tr>
            <td><?= $datas->no_rm ?></td>
            <td><?= $datas->nama_pasien ?></td>
            <td><?= $datas->tanggal_lahir ?></td>
            <td><?= $datas->nama_ayah ?></td>
            <td><a href="Pendaftaran/detail/<?= $datas->no_rm ?>" class="btn btn-info  m-r-xs m-b-xs btn-sm"><i class="material-icons"> perm_identity </i>Detail </a>



            </td>



        </tr>

        <?php } ?>


    </tbody>

    </table>
  </div>


</div>



                    <div class="tab-pane" id="three" role="tab-pane">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="card">

                            <div class="card-header bg-blue "><p>Form Daftar Ulang</p></div>
                            <div class="card-block">
                              <div class="m-b">
                                <form name="role" action="<?= $this->url->getStatic('Pasienbaru/insert') ?>" method="post">
                                <p class="m-t-1">Nomor Rm</p>
                    <div class="m-b">
                      <select data-placeholder="Nomor Rekamemdis" name="no-rm" class="select2 m-b-1" style="width: 100%;">
                        <?php foreach ($pasien as $datas) { ?>
                          <option></option>
                        <option><?= $datas->no_rm ?></option>
                        <?php } ?>
                      </select>

                    </div>
                  </div>


              <div class="m-b">
              <p class="m-t-1">Nama Dokter</p>
              <div class="m-b">
                <select data-placeholder="Nama Dokter" name="nama-dokter" class="select2 m-b-1" style="width: 100%;">
                  <?php foreach ($dokter as $d) { ?>
                  <option></option>
                  <option value="<?= $d->nik ?>"><?= $d->nama ?></option>

                  <?php } ?>

                </select>
              </div>
            </div>

              <div class="m-b">
          <p class="m-t-1">Poly</p>
        <div class="m-b">
        <select data-placeholder="poly tujuan" name="poly-berobat" class="select2 m-b-1" style="width: 100%;">
            <?php foreach ($dokter as $d) { ?>
              <option></option>
        <option><?= $d->poly ?></option>
        <?php } ?>
      </select>
        </div>
        </div>


        <p class="m-t-1">tanggal masuk:</p>
        <input type="text" readonly value="<?php $tgl=date('Y-m-d'); echo $tgl; ?>" class="form-control" name="tanggal-berobat" data-placeholder="tanggal masuk">
        <div class="modal-footer">
            <button type="submit" class="btn btn-microsoft"><i class="material-icons">send</i><Span>Simpan</span></button>

        </div>




                </form>

                              </div>


                            </div>


                          </div>


                        </div>


                      </div>


                        <div class="tab-pane" id="four" role="tab-pane">
                          <div class="card-header bg-blue">pasien-berobat</div>
                         <div class="card-block">

                           <table class="table table-bordered datatable" order>
                             <thead>
                               <tr>
                                 <th>Nomor Rm</th>
                                 <th>Nama Pasien</th>
                                 <th>Nama Dokter</th>
                                 <th>Poly</th>
                                 <th>Tanggal Masuk</th>
                                 <th>Aksi</th>

                               </tr>
                             </thead>
                             <tbody>

                               <?php foreach ($pasienbaru as $datas) { ?>
                               <tr>
                                 <td><?= $datas->no_rm ?></td>
                                  <?php $pasien = DataPasien::findFirstByno_rm($datas->no_rm);?>
                                 <td><?= $pasien->nama_pasien ?></td>
                                 <?php $dokter = Dokter::findFirstBynik($datas->nik); ?>
                                  <td><?= $dokter->nama ?></td>
                                  <td><?= $datas->poly ?></td>
                                  <td><?= $datas->tanggal_berobat ?></td>
                                  <td><a href="#" data-toggle="modal" data-target="#myModal<?= $datas->id_berobat ?>"
                                     class="btn btn-info  m-r-xs m-b-xs btn-sm"><i class="material-icons"> edit</i>Edit</a></td>
                               </tr>
                                  <div class="modal fade" id="myModal<?= $datas->id_berobat ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                               <div class="modal-dialog">
                                                   <div class="modal-content">

                                                       <div class="modal-header bg-primary">
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                           </button>
                                                           <h4 class="modal-title " id="myModalLabel">Edit</h4>
                                                       </div>
                                                       <div class="modal-body">

                                                           <form action="<?= $this->url->get('pendaftaran/ubah') ?>/<?= $datas->id_berobat ?>"class="form-horizontal"method="POST">
                                                             <div class="form-group">
                                                                 <label class='col-md-2'>No rm:</label>
                                                                 <div class='col-md-9'><input type="text" autocomplete="off" class="form-control" value="<?= $datas->no_rm ?>" disabled ></div>
                                                             </div>

                                                                 <div class="form-group">
                                                                     <label class="col-md-2">dokter:</label>
                                                                     <div class="col-md-9"><select  name="nama-dokter" id="" value="<?= $datas->nik ?>" class="form-control">
                                                                             <?php foreach ($dok as $d) { ?>
                                                                             <option value="<?= $d->nik ?>"><?= $d->nama ?></option>
                                                                             <?php } ?>
                                                                         </select>
                                                                     </div>
                                                               <div class="form-group">
                                                                   <label class="col-md-2">poly:</label>
                                                                   <div class="col-md-9"><select  name="poly" id="" value="<?= $datas->poly ?>" class="form-control">
                                                                         <?php foreach ($dok as $d) { ?>
                                                                           <option><?= $d->poly ?></option>
                                                                           <?php } ?>
                                                                       </select>

                                                                   </div>

                                                               </div>
                                                               <div class="modal-footer">
                                                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                   <button type="submit" id="add" class="btn btn-primary">Save changes</button>
                                                               </div>
                                                           </form>
                                                           <br>
                                                       </div>


                                                   </div>
                                               </div>
                                           </div>

                               <?php } ?>

                           </table>
                         </div>
                        </div>

                  </div >
              </div>
            </div>







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
