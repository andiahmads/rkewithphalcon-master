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




<div class="row">

  <div class="col-lg-6">
    <div class="card">
    <div class="card-header bg-white">
     <form action="<?= $this->url->getStatic('Pendaftaran/update/') ?> <?= $data->no_rm ?>" method="POST">
  <label>Nomor RM:</label>
    <fieldset disabled>
    <div class="input-prepend input-group m-b-1">
      <span class="add-on input-group-addon bg-blue">
          <i class="material-icons ">
                edit
            </i>
              </span>
              <input id="DisabledTextInput" name="no-rm" class="form-control" value="<?= $data->no_rm ?>" placeholder="no rm"/>
               </div></fieldset>

    <label>Nomor Pasien:</label>
    <div class="input-prepend input-group m-b-1">
      <span class="add-on input-group-addon bg-blue">
          <i class="material-icons ">
                edit
            </i>
              </span>
              <input type="text" name="nama-pasien" class="form-control" value="<?= $data->nama_pasien ?>" placeholder="nama pasien"/>
               </div>

               <label>tanggal-lahir:</label>
    <div class="input-prepend input-group m-b-1">
      <span class="add-on input-group-addon bg-blue">
          <i class="material-icons ">
                edit
            </i>
              </span>
              <input type="date" name="tanggal" class="form-control" value="<?= $data->tanggal_lahir ?>" placeholder="tanggal"/>
               </div>




                  <?php if ($data->jenis_kelamin == 'Laki_Laki') { ?>
                  <?php $lk = 'checked =""' ?>
                  <?php } else { ?>
                  <?php $p = 'checked =""' ?>
                  <?php } ?>
                     <div class="card-header no-bg">

                    <h6 class="m-t-1">Jenis-Kelamin:</h6>
                    <div class="radio-control-stacked" name="Jenis-Kelamin">

                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="tes" <?= $lk ?> type="radio" value="Laki_Laki">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Laki_Laki</span>
                      </label>

                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="tes" <?= $p ?> type="radio" value="Perempuan">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Perempuan</span>
                      </label>


                    </div></div>


                    <?php if ($data->agama == 'Islam') { ?>
                    <?php $islam = 'checked = ""' ?>
                    <?php } elseif ($data->agama == 'Kristen') { ?>
                    <?php $Kristen = 'checked = ""' ?>
                    <?php } elseif ($data->agama == 'Budha') { ?>
                    <?php $Budha = 'checked = ""' ?>
                    <?php } elseif ($data->agama == 'Katolik') { ?>
                    <?php $Katolik = 'checked = ""' ?>
                    <?php } elseif ($data->agama == 'Konghocu') { ?>
                    <?php $Konghocu = 'checked = ""' ?>
                    <?php } else { ?>
                    <?php $Hindu = 'checked =""' ?>
                    <?php } ?>

                    <div class="card-header no-bg">
                    <h6 class="m-t-1">Agama:</h6>
                    <div class="custom-control-stacked" >
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="agama" <?= $islam ?> type="radio" value="Islam" >
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Islam</span>
                      </label>
                      <label class="custom-control custom-radio" name="agama">
                        <input class="custom-control-input" name="agama" <?= $Kristen ?> type="radio" value="Kristen">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Kristen</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="agama" <?= $Budha ?> type="radio" value="Budha">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Budha</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="agama" <?= $Katolik ?> type="radio" value="Katolik">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Katolik</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="agama" <?= $Konghocu ?> type="radio" value="Konghocu">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Konghocu</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="agama" <?= $Hindu ?> type="radio" value="Hindu">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Hindu</span>
                      </label>

                    </div></div>



                      <?php if ($data->status == 'Tidak_Kawin') { ?>
                      <?php $tk = 'checked =""' ?>
                      <?php } elseif ($data->status == 'Kawin') { ?>
                      <?php $kw = 'checked =""' ?>
                       <?php } elseif ($data->status == 'Cerai_Hidup') { ?>
                      <?php $ch = 'checked =""' ?>
                       <?php } else { ?>
                      <?php $cm = 'checked =""' ?>

                      <?php } ?>

                    <div class="card-header no-bg">
                     <h6 class="m-t-1">Status:</h6>
                    <div class="custom-control-stacked">
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="status_pasien" <?= $tk ?> type="radio" value="Tidak_Kawin">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Tidak_Kawin</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="status_pasien" <?= $kw ?> type="radio" value="Kawin">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Kawin</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="status_pasien" <?= $ch ?> type="radio" value="Cerai_Hidup">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Cerai_Hidup</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="status_pasien" <?= $cm ?> type="radio" value="Cerai_Mati">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Cerai_Mati</span>
                      </label>
                    </div></div>



                      <?php if ($data->pendidikan == 'Tidak_Sekolah') { ?>
                      <?php $ts = 'checked =""' ?>

                      <?php } elseif ($data->pendidikan == 'SD') { ?>
                      <?php $sd = 'checked =""' ?>

                      <?php } elseif ($data->pendidikan == 'SMP') { ?>
                      <?php $smp = 'checked =""' ?>

                      <?php } elseif ($data->pendidikan == 'SMA') { ?>
                      <?php $sma = 'checked =""' ?>

                      <?php } elseif ($data->pendidikan == 'Akademik') { ?>
                      <?php $ak = 'checked =""' ?>
                       <?php } else { ?>
                      <?php $unv = 'checked =""' ?>


                      <?php } ?>

                    <div class="card-header ">
                     <h6 class="m-t-1">Pendidikan:</h6>
                    <div class="custom-control-stacked">
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="pendidikan"<?= $ts ?> type="radio" value="Tidak_Sekolah">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Tidak_Sekolah</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="pendidikan" <?= $sd ?> type="radio" value="SD">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">SD</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="pendidikan"<?= $smp ?> type="radio" value="SMP">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">SMP</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="pendidikan" <?= $sma ?> type="radio" value="SMA">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">SMA</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="pendidikan" <?= $ak ?> type="radio" value="Akademik">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Akademik</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="pendidikan" <?= $unv ?> type="radio" value="Universitas">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Universitas</span>
                      </label>
                    </div></div>


                     <?php if ($data->pekerjaan == 'Tidak_Kerja') { ?>
                      <?php $tk = 'checked =""' ?>
                       <?php } elseif ($data->pekerjaan == 'Buruh') { ?>
                      <?php $br = 'checked =""' ?>
                      <?php } elseif ($data->pekerjaan == 'Swasta') { ?>
                      <?php $sw = 'checked =""' ?>
                      <?php } elseif ($data->pekerjaan == 'Wiraswasta') { ?>
                      <?php $wr = 'checked =""' ?>
                      <?php } elseif ($data->pekerjaan == 'PNS') { ?>
                      <?php $pns = 'checked =""' ?>
                      <?php } elseif ($data->pekerjaan == 'TNI') { ?>
                      <?php $tni = 'checked =""' ?>
                      <?php } else { ?>
                      <?php $pl = 'checked=""' ?>
                      <?php } ?>

                    <div class="card-header no-bg">
                    <h6 class="m-t-1">Pekerjaan:</h6>
                    <div class="custom-control-stacked">
                      <label class="custom-control custom-radio">
                        <input class="custom-control-input" name="work"<?= $tk ?> type="radio" value="Tidak_Kerja">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Tidak_Kerja</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="work" <?= $br ?> type="radio" value="Buruh">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Buruh</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="work" <?= $sw ?> type="radio" value="Swasta">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Swasta</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="work"
                        <?= $wr ?> type="radio" value="Wiraswasta">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Wiraswasta</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="work" class="custom-control-input" name="work" <?= $pns ?> type="
                        radio" value="PNS">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">PNS</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="work" class="custom-control-input" name="work"<?= $tni ?> type="radio" value="TNI">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">TNI</span>
                      </label>
                      <label class="custom-control custom-radio">
                        <input id="radiostacked1" class="custom-control-input" name="work"<?= $pl ?> type="radio" value="POLRI">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">POLRI</span>
                      </label>
                    </div></div><br>



                     <label>Bahasa Sehari-hari:</label>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="bahasa" class="form-control" value="<?= $data->bahasa_sehari ?>" placeholder="bahasa"/>
                    </div>

                    <label>Nama Ayah:</label>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="ayah" class="form-control" value="<?= $data->nama_ayah ?>" placeholder="ayah"/>
                    </div>


                     <label>Nama-Ibu:</label>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="ibu" class="form-control" value="<?= $data->nama_ibu ?>" placeholder="ibu"/>
                    </div>








        </div>
    </div>


  </div>






<div class="row">
  <div class="col-lg-6">
    <div class="card">
<div class="card-header bg-white">


           <label>Budaya Suku:</label>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="suku" class="form-control" value="<?= $data->budaya_suku ?>" placeholder="budaya/Suku"/>
                    </div>

                   <label>Alamat:</label>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="alamat" class="form-control" value="<?= $data->alamat ?>" placeholder="Alamat"/>
                    </div>
                    <label>RT:</label>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="number" name="rt" class="form-control" value="<?= $data->rt ?>" placeholder="Rt"/>
                    </div>
                    <label>Rw:</label>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="number" name="rw" class="form-control" value="<?= $data->rw ?>" placeholder="Rw"/>
                    </div>
                    <label>Telepon:</label>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          call
                        </i>
                      </span>
                      <input type="number" name="telpon" class="form-control" value="<?= $data->no_telpon ?>" placeholder=""/>
                    </div>
                    <label>Perubahan Alamat:</label>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="alamat1" class="form-control  " value="<?= $data->perubahan_alamat ?>" placeholder="Alamat"/>
                    </div>
                    <label>Nama Wali 1:</label>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="wali-1" class="form-control  " value="<?= $data->nama_wali1 ?>" placeholder="Wali-1"/>
                    </div>
                    <label>Nama Wali 2:</label>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="wali-2" class="form-control  " value="<?= $data->nama_wali2 ?>" placeholder="Wali-2"/>
                    </div>

                    <label>Hubungan:</label>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          edit
                        </i>
                      </span>
                      <input type="text" name="hubungan" class="form-control  " value="<?= $data->hubungan ?>" placeholder="Hubungan"/>
                    </div>
                    <label>Telepon Wali:</label>
                      <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-blue">
                        <i class="material-icons ">
                          call
                        </i>
                      </span>
                      <input type="number" name="no-wali" class="form-control  " value="<?= $data->telpon_wali ?>" placeholder=""/>
                    </div>




                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="add" class="btn btn-microsoft"><i class="material-icons">send</i><Span>Simpan</span></button>
                        <button type="button" class="btn btn-google" onclick="window.print();"><i class="material-icons">print</i><span>print</span></button>

                    </div>









</div>
</div>
</div>
</div>
</form>
