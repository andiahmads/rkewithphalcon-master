<div class="row">
  <div class="card">
    <div class="card-header bg-success" align="center"><b><strong>ASESMEN AWAL PASIEN GIGI RAWAT JALAN</strong></b></div>
    <div class="card card-group">
     
      <!-- bagian A -->
      <div class="form-group">
        <div class="card-header bg-primary">
         <strong> A. PENILAIAN TINGKAT NYERI</strong> 
       </div>
       <div class="card-block col-lg-6">
        <?php if ($data->nyeri == 'Tidak ada Nyeri') { ?>
        <?php $a = 'checked="" type="radio"'; ?>
        <?php } elseif ($data->nyeri == 'Nyeri Kronis') { ?>
        <?php $b = 'checked="";  type="radio"'; ?>
        <?php } elseif ($data->nyeri == 'Nyeri Akut') { ?>
        <?php $c = 'checked="" type="radio"'; ?>
        <?php } ?>


        <div class="form-group m-b">
         
          <label class=" custom-control custom-radio" >
           <input id="radio1" name="nyeri" <?= $a ?> readonly="" value="Tidak ada Nyeri" class="custom-control-input" ></input>
           <span class="custom-control-indicator" ></span>
           <span class="custom-control-description"> Tidak Ada Nyeri</span>
         </label>
         <label class=" custom-control custom-radio" >
           <input id="radio1" name="nyeri" <?= $b ?> readonly="" value="Nyeri Kronis" class="custom-control-input" ></input>
           <span class="custom-control-indicator" ></span>
           <span class="custom-control-description"> Nyeri Kronis</span>
         </label>
         <label class=" custom-control custom-radio" >
           <input id="radio1" name="nyeri" <?= $c ?> readonly="" value="Nyeri Akut" class="custom-control-input" ></input>
           <span class="custom-control-indicator" ></span>
           <span class="custom-control-description"> Nyeri Akut</span>
         </label>

       </div>
       <div class="form-group m-b">
        <div class="col-lg-5">
         <label>Skala Nyeri :</label>
         <input class="form-control btn-sm" readonly="" name="skala" value="<?= $data->skala ?>" type="number" placeholder="1-10"></input>
       </div>
       <div class="col-lg-5">
         <label> Lokasi :</label>
         <input class="form-control m-b-1 btn-sm" readonly="" name="lokasi" type="text" value="<?= $data->lokasi ?>" placeholder="Enter Lokasi"></input>
       </div>
     </div>
     <div class="form-group lg">
      <div class="col-lg-5">
       <label>Durasi :</label>
       <input class="form-control btn-sm" readonly="" name="durasi" value="<?= $data->durasi ?>" type="number" placeholder="1-10"></input>
     </div>
     <div class="col-lg-5">
       <label> Frekuensi :</label>
       <input class="form-control m-b-1 btn-sm" readonly="" name="frekuensi" type="number" value="<?= $data->frekuensi ?>" placeholder="Enter Frekuensi"></input>
     </div>
   </div>
   <div class="form-group m-b">
    <label class="m-b-1">Nyeri Hilang Bila :</label><br>
    <div class="col-lg-12 m-b-1">
      <?php if ($data->nyeri_hilang == 'Minum Obat') { ?>
      <?php $aa = 'checked="" type="radio"' ?>
      <?php } elseif ($data->nyeri_hilang == 'Mendengar Musik') { ?>
      <?php $bb = 'checked="" type="radio"' ?>
      <?php } elseif ($data->nyeri_hilang == 'Istirahat') { ?>
      <?php $cc = 'checked="" type="radio"' ?>
      <?php } elseif ($data->nyeri_hilang == 'Berubah Posisi/Tidur') { ?>
      <?php $dd = 'checked="" type="radio"' ?>
      <?php } ?>
      <div class="col-lg-4" >
       <label class=" custom-control custom-radio" >
        <input id="radio1" <?= $aa ?> name="nyerihilang"  class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description"> Minum Obat</span>
      </label>
    </div>
    <div class="col-lg-6" >
     <label class=" custom-control custom-radio" >
      <input id="radio1" <?= $bb ?> name="nyerihilang"  class="custom-control-input" ></input>
      <span class="custom-control-indicator" ></span>
      <span class="custom-control-description"> Mendengar Musik</span>
    </label>
  </div>
</div>
<div class="col-lg-12 m-b-1">
  <div class="col-lg-4" >
   <label class=" custom-control custom-radio" >
    <input id="radio1" <?= $cc ?> name="nyerihilang"  class="custom-control-input" ></input>
    <span class="custom-control-indicator" ></span>
    <span class="custom-control-description"> Istirahat</span>
  </label>
</div>
<div class="col-lg-6" >
 <label class=" custom-control custom-radio" >
  <input id="radio1" <?= $dd ?> name="nyerihilang"  class="custom-control-input" ></input>
  <span class="custom-control-indicator" ></span>
  <span class="custom-control-description"> Berubah Posisi/Tidur</span>
</label>
</div>
</div>
</div>
<div class="form-group m-b">
  <label>Diberitahukan ke DOKTER :</label>
  <br>
  <div class="col-lg-7" >
   <div class="col-lg-2">
     <?php if ($data->info == 'Ya') { ?>
     <?php $hh = 'checked="" type="radio"' ?>
     <?php } elseif ($data->info == 'Tidak') { ?>
     <?php $ii = 'checked="" type="radio"' ?>
     <?php } ?>
     <label class=" custom-control custom-radio" >
      <input id="radio1" name="info" <?= $hh ?> value="Ya"  class="custom-control-input" ></input>
      <span class="custom-control-indicator" ></span>
      <span class="custom-control-description"> Ya</span>
    </label>
  </div>
  <div class="">
   <label class="col-xs-4 col-form-label">, pukul :</label>
   <div class="col-xs-6">
    <input class="form-control btn-sm" value="<?= $data->pukul ?>" readonly="" name="pukul" type="text" >
  </div>
</div>
</div>
<div class="col-lg-4" >
 <label class=" custom-control custom-radio" >
  <input id="radio1" name="info" <?= $ii ?> value="Tidak"  class="custom-control-input" ></input>
  <span class="custom-control-indicator" ></span>
  <span class="custom-control-description"> Tidak</span>
</label>
</div>
</div>
</div>
<div class="card-block col-lg-6">
 <div class="form-group m-b">
  <img align="center" src="<?= $this->url->getStatic('img/nyeri.jpeg') ?>" width="465" height="320">
</div>
</div>
</div>
</div>
<!-- akhir bagian A -->

<!-- Bagian B -->
<div class="card card-group">
  <div class="form-group">
   <div class="card-header bg-primary">
     <strong> B. PENILAIAN RESIKO JATUH</strong> 
   </div>
   
   <div class="card-block col-lg-4 ">
    <div class="form-group m-b-1">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="bg-warning" >
            <tr>
              <th align="center ">
                HUMPTY DUMPTY<br> (Anak-anak)
              </th>
              <th>
                Score
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                Umur
              </th>
              <td>
                <?= $data->umur ?>
              </td>
            </tr>
            <tr>
              <th scope="row">
                Jenis Kelamin
              </th>
              <td>
                <?= $data->gender ?>
              </td>
            </tr>
            <tr>
              <th scope="row">
                Diagnosis
              </th>
              <td>
                <?= $data->diagnosis ?>
              </td>
            </tr>
            <tr>
              <th scope="row">
                Gangguan Kognitif
              </th>
              <td>
                <?= $data->gangguankognitif ?>
              </td>
            </tr>
            <tr>
              <th scope="row">
                Faktor Lingkungan
              </th>
              <td>
                <?= $data->faktorlingkungan ?>
              </td>
            </tr>
            <tr>
              <th scope="row">
                Respon Terhadap Operasi/Sedasi/Anastesi
              </th>
              <td>
                <?= $data->responoperasi ?>
              </td>
            </tr>
            <tr>
              <th scope="row">
                Penggunaan Obar-obatan
              </th>
              <td>
                <?= $data->penggunaanobat ?>
              </td>
            </tr>
            <tr>
              <th scope="row">
                Total Score
              </th>
              <td>
                <?= $data->umur + $data->gender + $data->diagnosis + $data->gangguankognitif + $data->faktorlingkungan + $data->responoperasi + $data->penggunaanobat ?>
              </td>
            </tr>

            
          </tbody>
        </table>
      </div>

      
    </div>
  </div>
  <div class="card-block col-lg-4">
    
    <div class="form-group m-b-1">
     
     <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="bg-dark" >
          <tr>
            <th align="center ">
              EDMUNSON (Jiwa)
            </th>
            <th>
              Score
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">
              Usia
            </th>
            <td>
              <?= $data->usia ?>
            </td>
          </tr>
          <tr>
            <th scope="row">
              Status Mental
            </th>
            <td>
              <?= $data->statusmental ?>
            </td>
          </tr>
          <tr>
            <th scope="row">
              Eliminasi
            </th>
            <td>
              <?= $data->eliminasi ?>
            </td>
          </tr>
          <tr>
            <th scope="row">
              Pengobatan
            </th>
            <td>
              <?= $data->pengobatan ?>
            </td>
          </tr>
          <tr>
            <th scope="row">
              Diagnosa
            </th>
            <td>
              <?= $data->diagnosis2 ?>
            </td>
          </tr>
          <tr>
            <th scope="row">
              Ambulasi/Keseimbangan
            </th>
            <td>
              <?= $data->ambulasi ?>
            </td>
          </tr>
          <tr>
            <th scope="row">
              Nutrisi
            </th>
            <td>
              <?= $data->nutrisi ?>
            </td>
          </tr>
          <tr>
            <th scope="row">
              Gangguan Pola Tidur
            </th>
            <td>
              <?= $data->gangguanpolatidur ?>
            </td>
          </tr>
          <tr>
            <th scope="row">
              Riwayat Jatuh
            </th>
            <td>
              <?= $data->riwayatjatuh ?>
            </td>
          </tr>
          <tr>
            <th scope="row">
             Total Score
           </th>
           <td>
            <?= $data->usia + $data->statusmental + $data->eliminasi + $data->pengobatan + $data->diagnosis2 + $data->ambulasi + $data->nutrisi + $data->gangguanpolatidur + $data->riwayatjatuh ?>
          </td>
        </tr>
        
      </tbody>
    </table>
  </div>
  
</div>
</div>
<div class="card-block col-lg-4">
  
  <div class="form-group m-b-1">
   <div class="table-responsive">
    <table class="table table-bordered">
      <thead class="bg-warning" >
        <tr>
          <th align="center ">
            MORSE (Dewasa)
          </th>
          <th>
            Score
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">
            Riwayat Jatuh
          </th>
          <td>
            <?= $data->riwayatjatuh1 ?>
          </td>
        </tr>
        <tr>
          <th scope="row">
            Mempunyai Diagnosa Sekunder
          </th>
          <td>
            <?= $data->diagnosissekunder ?>
          </td>
        </tr>
        <tr>
          <th scope="row">
            Menggunakan Alat Bantu
          </th>
          <td>
            <?= $data->alatbantu ?>
          </td>
        </tr>
        <tr>
          <th scope="row">
            Penggunaan Obat IV tertentu
          </th>
          <td>
            <?= $data->obativ ?>
          </td>
        </tr>
        <tr>
          <th scope="row">
            Gaya Berjalan
          </th>
          <td>
            <?= $data->gayaberjalan ?>
          </td>
        </tr>
        <tr>
          <th scope="row">
            Status Mental
          </th>
          <td>
            <?= $data->statusmental1 ?>
          </td>
        </tr>    
        <tr>
          <th scope="row">
            Total Score
          </th>
          <td>
            <?= $data->riwayatjatuh1 + $data->diagnosissekunder + $data->alatbantu + $data->obativ + $data->gayaberjalan + $data->statusmental1 ?>
          </td>
        </tr>                  
      </tbody>
    </table>
  </div>

  
</div>
</div>


</div>
</div>
<!-- Akhir B -->

<!-- Pemeriksaan untuk kasus non jiwa -->
<div class="card card-group">
  <div class="form-group">
    <div class="card-header bg-primary">
     <strong align="center"> Pemeriksaan Resiko Jatuh Morse (untuk kasus non jiwa)</strong> 
   </div>

   <div class="table-responsive ">
    <table class="table-sm table-bordered col-lg-12">
      <thead class="bg-dark" >
        <tr>
          <th align="center ">
            Faktor Risiko
          </th>
          <th>
            Skala
          </th>
          <th>
            Poin
          </th>
          <th>
            Skor Pasien
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="2" align="center">
            <b>Riwayat Jatuh</b>
          </td>
          <td>Ya</td>
          <td align="center">25</td>
          <td align="center">
            <?php if ($data->riwayatjatuh2 == 'Ya') { ?>
            <?php $riwayatjatuh2 = '25';
            echo '25'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <td>Tidak</td>
          <td align="center">0</td>
          <td align="center">
            <?php if ($data->riwayatjatuh2 == 'Tidak') { ?>
            <?php $riwayatjatuh2 = '0';
            echo '0'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <td rowspan="2" align="center"><b>Diagnosis Sekunder</b></td>
          <td>Ya</td>
          <td align="center">15</td>
          <td align="center">
            <?php if ($data->sekunder == 'Ya') { ?>
            <?php $sekunder = '15';
            echo '15'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <td>Tidak</td>
          <td align="center">0</td>
          <td align="center">
            <?php if ($data->sekunder == 'Tidak') { ?>
            <?php $sekunder = '0';
            echo '0'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <td rowspan="3" align="center"><b>Alat Bantu</b></td>
          <td>Perabot</td>
          <td align="center">30</td>
          <td align="center">
            <?php if ($data->alatbantu1 == 'Perabot') { ?>
            <?php $alatbantu1 = '30';
            echo '30'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <td>Tongkat / alat penopang</td>
          <td align="center">15</td>
          <td align="center">
            <?php if ($data->alatbantu1 == 'Tongkat/alat penopang') { ?>
            <?php $alatbantu1 = '15';
            echo '15'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <td>Tidak ada / Kursi Roda / perawat / tirah baring</td>
          <td align="center">0</td>
          <td align="center">
            <?php if ($data->alatbantu1 == 'Tidak ada/kursi roda/perawat/tirah baring') { ?>
            <?php $alatbantu1 = '0';
            echo '0'; ?>
            <?php } ?>
          </td>
        </tr>
        <td rowspan="2" align="center">
          <b>Terpasang Infus</b>
        </td>
        <td>Ya</td>
        <td align="center">20</td>
        <td align="center">
          <?php if ($data->terpasanginfus == 'Ya') { ?>
          <?php $terpasanginfus = '20';
          echo '20'; ?>
          <?php } ?>
        </td>
      </tr>
      <tr>
        <td>Tidak</td>
        <td align="center">0</td>
        <td align="center">
          <?php if ($data->terpasanginfus == 'Tidak') { ?>
          <?php $terpasanginfus = '0';
          echo '0'; ?>
          <?php } ?>
        </td>
      </tr>
      <tr>
        <td rowspan="3" align="center"><b>Gaya Berjalan</b></td>
        <td>Terganggu</td>
        <td align="center">20</td>
        <td align="center">
          <?php if ($data->gayaberjalan1 == 'Terganggu') { ?>
          <?php $gayaberjalan1 = '20';
          echo '20'; ?>
          <?php } ?>
        </td>
      </tr>
      <tr>
        <td>Lemah</td>
        <td align="center">10</td>
        <td align="center">
         <?php if ($data->gayaberjalan1 == 'Lemah') { ?>
         <?php $gayaberjalan1 = '10';
         echo '10'; ?>
         <?php } ?>
       </td>
     </tr>
     <tr>
      <td>Normal / tirah baring / imobilisasi</td>
      <td align="center">0</td>
      <td align="center">
       <?php if ($data->gayaberjalan1 == 'Normal / tirah baring / imobilisasi') { ?>
       <?php $gayaberjalan1 = '0';
       echo '0'; ?>
       <?php } ?>
     </td>
   </tr>
 </tr>
 <td rowspan="2" align="center">
  <b>Status Mental</b>
</td>
<td>Sering lupa akan keterbatasan yang dimiliki</td>
<td align="center">15</td>
<td align="center">
  <?php if ($data->statusmental3 == 'Sering lupa akan keterbatasan yang dimiliki') { ?>
  <?php $statusmental3 = '15';
  echo '15'; ?>
  <?php } ?>
</td>
</tr>
<tr>
  <td>Orientasi baik terhadap kemampuan diri sendiri</td>
  <td align="center">0</td>
  <td align="center">
    <?php if ($data->statusmental3 == 'Orientasi baik terhadap kemampuan diri sendiri') { ?>
    <?php $statusmental3 = '0';
    echo '0'; ?>
    <?php } ?>
  </td>
</tr>
<tr> 
  <td colspan="3" align="right"><b> Total </b></td>
  
  <?php $total = $riwayatjatuh2 + $sekunder + $alatbantu1 + $terpasanginfus + $gayaberjalan1 + $statusmental3 ; ?>
  <?php if ($total <= '24') { ?>
  <?php $warna = 'class="bg-success"'; $status = '( Resiko Rendah )' ; ?>
  <?php } elseif ($total >= '45') { ?>
  <?php $warna = 'class="bg-danger"'; $status = '( Resiko Tinggi )' ; ?>
  <?php } else { ?>
  <?php $warna = 'class="bg-warning"'; $status = '( Resiko Sedang )' ; ?>
  <?php } ?> 

  <td align="center" <?= $warna ?> > <?= $riwayatjatuh2 + $sekunder + $alatbantu1 + $terpasanginfus + $gayaberjalan1 + $statusmental3 ?> <br> <?= $status ?>
    
  </td>
</tr>
<tr>
  <td colspan="4"><b> Catatan : <br> Resiko Tinggi : Besar dari 44  <br>   Resiko sedang : 25 - 44  <br>   Resiko Rendah : 0 - 24</b></td>
</tr>
<tr>
  
</tr>
</tbody>
</table>
</div>


</div>



</div>
</div>



<!-- Pemeriksaan untuk kasus non jiwa -->



<!-- Pemeriksaan untuk kasus jiwa -->
<div class="card card-group">
  <div class="form-group">
   <div class="card-header bg-primary">
     <strong> Pemeriksaan Resiko Jatuh Edmunson (untuk kasus jiwa)</strong> 
   </div>
   <div class="table-responsive ">
    <table class="table-sm table-bordered col-lg-12">
      <thead class="bg-dark" >
        <tr>
          <th align="center ">
            Item Penilaian
          </th>
          <th>
            Point
          </th>
          <th>
            Skor Pasien
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" colspan="3" class="card-header">
            USIA
          </th>
          
        </tr>
        <tr>
          <th scope="row">
            a. Kurang dari 50 tahun
          </th>
          <td align="center">
            8
          </td>
          <td align="center">
            <?php if ($data->usia1 == 'Kurang dari 50 tahun') { ?>
            <?php $usia1 = '8'; 
            echo '8'?>
            <?php } ?>
          </td>
          
        </tr>
        <tr>
          <th scope="row">
            b. 50 - 70 tahun
          </th>
          <td align="center">
            10
          </td>
          <td align="center">
            <?php if ($data->usia1 == '50-70 tahun') { ?>
            <?php $usia1='10';
            echo '10'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <th scope="row">
            c. Lebih dari 80 tahun
          </th>
          <td align="center">
            26
          </td>
          <td align="center">
            <?php if ($data->usia1 == 'Lebih dari 80 tahun') { ?>
            <?php $usia1='26';
            echo '26'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <th colspan="3">
            
          </th>
        </tr>
        <tr>
          <th scope="row" colspan="3" class="card-header">
            STATUS MENTAL
          </th>
        </tr>  
        <tr>
          <th scope="row">
            a. Kesadaran baik / orientasi baik setiap saat
          </th>
          <td align="center">
            4
          </td>
          <td align="center">
            <?php if ($data->statusmental2 == 'Kesadaran baik') { ?>
            <?php $statusmental2='4';
            echo '4'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <th scope="row">
            d. Agitasi / Ansietas
          </th>
          <td align="center">
            12
          </td>
          <td align="center">
            <?php if ($data->statusmental2 == 'Agitasi/Ansietas') { ?>
            <?php $statusmental2='12';
            echo '12'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            c. Kadang-kadang Bingung
          </th>
          <td align="center">
            13
          </td>
          <td align="center">
            <?php if ($data->statusmental2 == 'Kadang-kadang bingung') { ?>
            <?php $statusmental2='13';
            echo '13'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            d. Bingung / Disorientasi
          </th>
          <td align="center">
            14
          </td>
          <td align="center">
            <?php if ($data->statusmental2 == 'Bingung/Disorientasi') { ?>
            <?php $usia='14';
            echo '14'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row" colspan="3">
          </th>
        </tr>

        <tr>
          <th scope="row" colspan="3" class="card-header">
            ELIMINASI
          </th>
        </tr>

        <tr>
          <th scope="row">
            a. Mandiri dan mampu mengontrol BAB/BAK
          </th>
          <td align="center">
            8
          </td>
          <td align="center">
            <?php if ($data->eliminasi1 == 'Mandiri dan mampu mengontrol BAB/BAK') { ?>
            <?php $eleminasi1='8';
            echo '8'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            b. Dower Catheter / Colostomy
          </th>
          <td align="center">
            12
          </td>
          <td align="center">
            <?php if ($data->eliminasi1 == 'Dower Catheter/Colostomy') { ?>
            <?php $eleminasi1='12';
            echo '12'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            c. Eliminasi dengan bantuan
          </th>
          <td align="center">
            10
          </td>
          <td align="center">
            <?php if ($data->eliminasi1 == 'Eliminasi dengan Bantuan') { ?>
            <?php $eleminasi1='10';
            echo '10'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            d. Gangguan eliminasi ( Inkontinensia/Nokturia/Frekwensi )
          </th>
          <td align="center">
            12
          </td>
          <td align="center">
            <?php if ($data->eliminasi1 == 'Gangguan Eliminasi') { ?>
            <?php $eleminasi1='12';
            echo '12'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            e. Inkontensia tetapi mampu untuk mobilisasi
          </th>
          <td align="center">
            12
          </td>
          <td align="center">
            <?php if ($data->eliminasi1 == 'Inkontinensia tetapi mampu untuk mobilisasi') { ?>
            <?php $eleminasi1='12';
            echo '12'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <th scope="row" colspan="3">
          </th>
        </tr>
        <tr>
          <th scope="row" colspan="3" class="card-header">
            PENGOBATAN
          </th>
        </tr>
        <tr>
          <th scope="row">
            a. Tanpa obat-obatan
          </th>
          <td align="center">
            10
          </td>
          <td align="center">
            <?php if ($data->pengobatan1 == 'Tanpa obat-obatan') { ?>
            <?php $obat ='10';
            echo '10'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            b. Obat-obatan Jantung
          </th>
          <td align="center">
            10
          </td>
          <td align="center">
            <?php if ($data->pengobatan1 == 'Obat-obatan jantung') { ?>
            <?php $obat ='10';
            echo '10'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            c. Obat-obat Psikotropika ( termasuk Benzodiazepine dan Antidepresan)
          </th>
          <td align="center">
            8
          </td>
          <td align="center">
            <?php if ($data->pengobatan1 == 'Obat-obat psikotropika') { ?>
            <?php $obat ='8';
            echo '8'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            d. Mendapatkan Tambahan obatn-obatan dan/atau obat-obat PRN (psikiatri, antinyeri) yang diberikan dalam 24 am terakhir
          </th>
          <td align="center">
            12
          </td>
          <td align="center">
            <?php if ($data->pengobatan1 == 'Mendapat tambahan obat-obatan dan/atau obat-obat PRN(psikiatri, antinyeri) yang diberikan dalam 24 j') { ?>
            <?php $obat ='12';
            echo '12'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <th colspan="3"></th>
        </tr>
        <tr>
          <th colspan="3" class="card-header">DIAGNOSA</th>
        </tr>

        <tr>
          <th scope="row">
            a. Bipolar / Gangguan Schizoaffective
          </th>
          <td align="center">
            10
          </td>
          <td align="center">
            <?php if ($data->diagnosa == 'Bipolar / Gangguan Schizoaffective') { ?>
            <?php $diagnosa='10';
            echo '10'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            b. Penggunaan Obat-obatan Terlarang / Ketergantungan alkohol
          </th>
          <td align="center">
            8
          </td>
          <td align="center">
            <?php if ($data->diagnosa == 'Penggunaan Obat-obatan Terlarang / Ketergantungan ') { ?>
            <?php $diagnosa='8';
            echo '8'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            c. Gangguan Depresi Mayor
          </th>
          <td align="center">
            10
          </td>
          <td align="center">
            <?php if ($data->diagnosa == 'Gangguan Depresi Mayor') { ?>
            <?php $diagnosa='10';
            echo '10'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            d. Dimensia / Delirium
          </th>
          <td align="center">
            12
          </td>
          <td align="center">
            <?php if ($data->diagnosa == 'Dimensia / Delirium') { ?>
            <?php $diagnosa='12';
            echo '12'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th colspan="3"></th>
        </tr>           
        <tr>
          <th colspan="3" class="card-header">
            AMBULASI/KESEIMBANGAN
          </th>
        </tr>

        <tr>
          <th scope="row">
            a. Mandiri/ Keseimbangan baik/ immobilisasi
          </th>
          <td align="center">
            7
          </td>
          <td align="center">
            <?php if ($data->ambulasi1 == 'Mandiri/ Keseimbangan baik/ immobilisasi') { ?>
            <?php $ambulasi1='7';
            echo '7'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            b. Dengan Alat Bantu (kursi roda dll)
          </th>
          <td align="center">
            8
          </td>
          <td align="center">
            <?php if ($data->ambulasi1 == 'Dengan Alat Bantu (kursi roda dll)') { ?>
            <?php $ambulasi1='8';
            echo '8'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th scope="row">
            c. Vertigo/ kelemahan
          </th>
          <td align="center">
            10
          </td>
          <td align="center">
            <?php if ($data->ambulasi1 == 'Vertigo/ kelemahan') { ?>
            <?php $ambulasi1='10';
            echo '10'; ?>
            <?php } ?>
          </td>
        </tr>


        <tr>
          <th scope="row">
            d. Goyah/ membutuhkan bantuan dan menyadari kemampoan
          </th>
          <td align="center">
            8
          </td>
          <td align="center">
            <?php if ($data->ambulasi1 == 'Goyah/ membutuhkan bantuan dan menyadari kemampoan') { ?>
            <?php $ambulasi1='8';
            echo '8'; ?>
            <?php } ?>
          </td>
        </tr>


        <tr>
          <th scope="row">
            e. Goyah tapi lupa keterbatasan
          </th>
          <td align="center">
            15
          </td>
          <td align="center">
            <?php if ($data->ambulasi1 == 'Goyah tapi lupa keterbatasan') { ?>
            <?php $ambulasi1='15';
            echo '15'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <th colspan="3"></th>
        </tr>
        <tr>
          <th colspan="3" class="card-header"> NUTRISI </th>
        </tr>
        <tr>
          <th scope="row">
            a. Mengkonsumsi sedikit makanan atau minuman dalam 24 jam terakhir
          </th>
          <td align="center">
            12
          </td>
          <td align="center">
            <?php if ($data->nutrisi1 == 'Mengkonsumsi sedikit makanan atau minuman dalam 24') { ?>
            <?php $nutrisi1='12';
            echo '12'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <th scope="row">
            b. Tidak ada kelainan dengan nafsu makan
          </th>
          <td align="center">
            0
          </td>
          <td align="center">
            <?php if ($data->nutrisi1 == 'Tidak ada kelainan dengan nafsu makan') { ?>
            <?php $nutrisi1='0';
            echo '0'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th colspan="3"></th>
        </tr>
        <tr>
          <th colspan="3" class="card-header"> GANGGUAN POLA TIDUR </th>
        </tr>
        <tr>
          <th scope="row">
            a. Tidak ada gangguan tidur
          </th>
          <td align="center">
            8
          </td>
          <td align="center">
            <?php if ($data->polatidur == 'Tidak ada gangguan tidur') { ?>
            <?php $polatidur='8';
            echo '8'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <th scope="row">
            b. Ada keluhan gangguan tidur yang dilaporkan oleh pasien, keluarga atau petugas
          </th>
          <td align="center">
            12
          </td>
          <td align="center">
            <?php if ($data->polatidur == 'Ada keluhan gangguan tidur yang dilaporkan oleh pa') { ?>
            <?php $polatidur='12';
            echo '12'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <th colspan="3"></th>
        </tr>
        <tr>
          <th colspan="3" class="card-header"> RIWAYAT JATUH </th>
        </tr>
        <tr>
          <th scope="row">
            a. Tidak ada riwayat jatuh
          </th>
          <td align="center">
            8
          </td>
          <td align="center">
            <?php if ($data->jatuh == 'Tidak ada riwayat jatuh') { ?>
            <?php $jatuh='8';
            echo '8'; ?>
            <?php } ?>
          </td>
        </tr>
        <tr>
          <th scope="row">
            b. Ada riwayat jatuh dalam 3 bulan terakhir
          </th>
          <td align="center">
            12
          </td>
          <td align="center">
            <?php if ($data->jatuh == 'Ada riwayat jatuh dalam 3 bulan terakhir') { ?>
            <?php $jatuh='12';
            echo '12'; ?>
            <?php } ?>
          </td>
        </tr>

        <tr>
          <th colspan="3"></th>
        </tr>
        <tr>
          <th scope="row" colspan="2">
            Total Score
          </th>
          <?php 
          $jml = $usia1 + $statusmental2 + $eleminasi1 + $obat + $diagnosa + $ambulasi1 + $nutrisi1 + $polatidur + $jatuh ; ?>
          <?php if ($jml < '90') { ?>
          <?php $warna = 'class="bg-success"' ; $status = 'Tidak Berisiko'; ; ?>
          <?php } else { ?>
          <?php $warna = 'class="bg-danger"' ; $status = 'Berisiko' ; ?>
          <?php } ?>
          
          <td align="center" <?= $warna ?> >
            <b><?= $jml ?> <br> <?= $status ?>
              
            </b>
          </td>
        </tr>                  
      </tbody>
    </table>
  </div>

  
</div>
<div class="form-group col-lg-12 ">
  <br>
  <div class="col-lg-12">
    <div class="col-lg-6">
      <label>CATATAN :</label> <br>
      <label>Tidak Berisiko : Skor < 90 </label><br>
      <label>1. Orientasikan pasien pada lingkungan kamar / bangsal <br>
        2. Pastikan rem tempat tidur terkunci <br>
        3. Pastikan bel terjangkau <br>
        4. Singkirkan barang berbahaya terutama pada malam hari ( kursi tambahan dan lain-lain ) <br>
        5. Minta persetujuan pasien agar lampu malam tetap menyala karena lingkungan masih asing <br>
        6. Pastikan alat bantu jalan dalam jangkauan (bila menggunakan)<br>
        7. Pastikan alas kaki tidak licin <br>
        8. Pastikan kebutuhan pribadi dalam jangkauan <br>
        9. Tempatkan meja pasien dengan baik agar tidak menghaslangi <br>
        10. Tempatkan pasien sesuai dengan tinggi badannya.
      </label>
    </div>
    <div class="col-lg-6">
      <br>
      <label> Berisiko : Skor > 90 <br><br>
        1. Lakukan tindakan sesuai skor (>90)<br>
        2. Pasang penanda risiko jatuh pada pintu kamar bagian atas/brankard <br>
        3. Awasi atau bantu sebagian ADL pasien<br>
        4. Cepat menanggapi keluhan pasien<br>
        5. Review kembali obat-obatan yang berisiko<br>
        6. Beritahu pasien agar mobilisasi secara bertahap : duduk perlahan-lahan sebelum berdiri<br>
        7. Libatkan pasien secara aktif
      </label>
    </div>
  </div>
</div>
</div>
<!-- Pemeriksaan untuk kasus jiwa -->


<div class="card card-group">
  <div class="form-group">
    <div class="card-header bg-primary">
     <strong> Data Medik </strong> 
   </div>
   <br>
   <form action="<?= $this->url->getStatic('dokter/proseseditasesmen/') ?><?= $data->id_asesmen ?>/<?= $data->no_rm ?>" method="post">
    <div class="form-group col-lg-12">
      <div  class="col-lg-3"><label>Golongan Darah </label> </div>
      <?php if ($data->golongandarah == 'A') { ?>
        <?php $a = 'checked=""'; ?>
      <?php } elseif ($data->golongandarah == 'B') { ?>
        <?php $b = 'checked=""'; ?>
      <?php } elseif ($data->golongandarah == 'AB') { ?>
        <?php $ab = 'checked=""'; ?>
      <?php } else { ?>
        <?php $o = 'checked=""'; ?>
      <?php } ?>
      <div class="col-lg-9">
        <div class="form-group m-b">
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="golongandarah" <?= $a ?> value="A" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description"> A </span>
          </label>
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="golongandarah" <?= $b ?> value="B" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">B</span>
          </label>
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="golongandarah" <?= $ab ?> value="AB" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">AB</span>
          </label>
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="golongandarah" <?= $o ?> value="O" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">O</span>
          </label>
        </div>
      </div>
    </div>

    <div class="form-group col-lg-12">
      <div  class="col-lg-3"><label>Tekanan Darah</label> </div>
      <div class="form-group col-lg-1">
        <input type="number" class="form-control btn-sm" value="<?= $data->tekanandarah1 ?>" name="tekanandarah1" ></input>
      </div>
      <div class="form-group col-xs-1" align="center">
        <label > / </label>
      </div>
      <div class="form-group col-lg-1">
        <input type="number" class="form-control btn-sm" value="<?= $data->tekanandarah2 ?>" name="tekanandarah2" ></input>
      </div>

      <?php if ($data->tekanandarah == 'hypertensi') { ?>
        <?php $t = 'checked=""'; ?>
      <?php } elseif ($data->tekanandarah == 'hypotensi') { ?>
        <?php $tt = 'checked=""'; ?>
      <?php } else { ?>
        <?php $ttt = 'checked=""'; ?>
      <?php } ?>
      
      <div class="form-group m-b">
        <label class=" custom-control custom-radio" >
          <input id="radio1" name="tekanandarah" <?= $t ?> value="hypertensi" type="radio" class="custom-control-input" ></input>
          <span class="custom-control-indicator" ></span>
          <span class="custom-control-description"> Hypertensi </span>
        </label>
        <label class=" custom-control custom-radio" >
          <input id="radio1" name="tekanandarah" <?= $tt ?> value="hypotensi" type="radio" class="custom-control-input" ></input>
          <span class="custom-control-indicator" ></span>
          <span class="custom-control-description">Hypotensi</span>
        </label>
        <label class=" custom-control custom-radio" >
          <input id="radio1" name="tekanandarah" <?= $ttt ?> value="normal" type="radio" class="custom-control-input" ></input>
          <span class="custom-control-indicator" ></span>
          <span class="custom-control-description">Normal</span>
        </label>
      </div>
    </div>

    <div class="form-group col-lg-12">
      <div  class="col-lg-3"><label>Tekanan Jantung</label> </div>
       <?php if ($data->tekananjantung == 'Tidak Ada') { ?>
        <?php $q = 'checked=""'; ?>
      <?php } else { ?>
        <?php $qq = 'checked=""'; ?>
      <?php } ?>
      <div class="col-lg-3">
        <div class="form-group ">
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="tekananjantung" <?= $q ?> value="Tidak Ada" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description"> Tidak Ada </span>
          </label>
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="tekananjantung" <?= $qq ?> value="Ada" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description"> Ada : </span>
          </label>        
        </div>
      </div>
      <div class="form-group col-lg-6">
       
       <div class="col-lg-10">
         <input class="form-control btn-sm" type="text" value="<?= $data->tjket ?>" name="tjket"></input>
       </div>
     </div>
   </div>


   <div class="form-group col-lg-12">
    <div  class="col-lg-3"><label>Diabetes</label> </div>

       <?php if ($data->diabetes == 'Tidak Ada') { ?>
        <?php $w = 'checked=""'; ?>
      <?php } else { ?>
        <?php $ww = 'checked=""'; ?>
      <?php } ?>

    <div class="col-lg-3">
      <div class="form-group ">
        <label class=" custom-control custom-radio" >
          <input id="radio1" name="diabetes" <?= $w ?> value="Tidak Ada" type="radio" class="custom-control-input" ></input>
          <span class="custom-control-indicator" ></span>
          <span class="custom-control-description"> Tidak Ada </span>
        </label>
        <label class=" custom-control custom-radio" >
          <input id="radio1" name="diabetes" <?= $ww ?> value="Ada" type="radio" class="custom-control-input" ></input>
          <span class="custom-control-indicator" ></span>
          <span class="custom-control-description"> Ada : </span>
        </label>        
      </div>
    </div>
    <div class="form-group col-lg-6">
     
     <div class="col-lg-10">
       <input class="form-control btn-sm" type="text" name="diabetesket"></input>
     </div>
   </div>
 </div>

 <img class="col-lg-12" src="<?= $this->url->getStatic('img/gigi.png') ?> " height="350">
</div>

<div class="form-group col-lg-12">
  <div  class="col-lg-3"><label>Oklusi</label> </div>
  <div class="col-lg-9">

      <?php if ($data->oklusi == 'normal bite') { ?>
        <?php $e = 'checked=""'; ?>
      <?php } elseif ($data->oklusi == 'Cross bite') { ?>
        <?php $ee = 'checked=""'; ?>
      <?php } else { ?>
        <?php $eee = 'checked=""'; ?>
      <?php } ?>
      
    <div class="form-group m-b">
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="oklusi" <?= $e ?> value="normal bite" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description"> normal bite </span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="oklusi" <?= $ee ?> value="Cross bite" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description">Cross bite</span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="oklusi" <?= $eee ?> value="deep bite" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description">deep bite</span>
      </label>
    </div>
  </div>
</div>
<div class="form-group col-lg-12">
  <div  class="col-lg-3"><label>Torus Palatinus</label> </div>
  <div class="col-lg-9">
      <?php if ($data->toruspalatinus == 'tidak ada') { ?>
        <?php $r = 'checked=""'; ?>
      <?php } elseif ($data->toruspalatinus == 'kecil') { ?>
        <?php $rr = 'checked=""'; ?>
      <?php } elseif ($data->toruspalatinus == 'sedang') { ?>
        <?php $rrr = 'checked=""'; ?>
      <?php } elseif ($data->toruspalatinus == 'besar') { ?>
        <?php $rrrr = 'checked=""'; ?>
      <?php } else { ?>
        <?php $rrrrr = 'checked=""'; ?>
      <?php } ?>
    <div class="form-group m-b">
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="toruspalatinus" <?= $r ?> value="tidak ada" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description"> Tidak ada </span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="toruspalatinus" <?= $rr ?> value="kecil" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description">Kecil</span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="toruspalatinus" <?= $rrr ?> value="sedang" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description">Sedang</span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="toruspalatinus" <?= $rrrr ?> value="besar" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description">Besar</span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="toruspalatinus" <?= $rrrrr ?> value="multiple" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description">Multiple</span>
      </label>
    </div>
  </div>
</div>
<div class="form-group col-lg-12">
  <div  class="col-lg-3"><label>Torus Mandibularis</label> </div>
  <div class="col-lg-9">
      <?php if ($data->torusmandibularis == 'tidak ada') { ?>
        <?php $r = 'checked=""'; ?>
      <?php } elseif ($data->torusmandibularis == 'kecil') { ?>
        <?php $rr = 'checked=""'; ?>
      <?php } elseif ($data->torusmandibularis == 'sedang') { ?>
        <?php $rrr = 'checked=""'; ?>
      <?php } elseif ($data->torusmandibularis == 'besar') { ?>
        <?php $rrrr = 'checked=""'; ?>
      <?php } else { ?>
        <?php $rrrrr = 'checked=""'; ?>
      <?php } ?>
    <div class="form-group m-b">
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="torusmandibularis" <?= $r ?> value="tidak ada" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description"> Tidak ada </span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="torusmandibularis" <?= $rr ?> value="kecil" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description">Kecil</span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="torusmandibularis" <?= $rrr ?> value="sedang" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description">Sedang</span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="torusmandibularis" <?= $rrrr ?> value="besar" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description">Besar</span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="torusmandibularis" <?= $rrrrr ?> value="multiple" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description">Multiple</span>
      </label>
    </div>
  </div>
</div>

<div class="form-group col-lg-12">
  <div  class="col-lg-3"><label>Palatum</label> </div>
  <div class="col-lg-9">
  <?php if ($data->palatum == 'Dalam') { ?>
        <?php $t = 'checked=""'; ?>
      <?php } elseif ($data->palatum == 'Sedang') { ?>
        <?php $tt = 'checked=""'; ?>
      <?php } else { ?>
        <?php $ttt = 'checked=""'; ?>
      <?php } ?>
      
    <div class="form-group m-b">
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="palatum" <?= $t ?> value="Dalam" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description"> Dalam </span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="palatum" <?= $tt ?> value="Sedang" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description">Sedang</span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="palatum" <?= $ttt ?> value="Rendah" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description">Rendah</span>
      </label>
      
    </div>
  </div>
</div>

<div class="form-group col-lg-12">
  <div  class="col-lg-3"><label>Supermumerary Teeth</label> </div>
  <div class="col-lg-3">

       <?php if ($data->supernumerary == 'Tidak Ada') { ?>
        <?php $as = 'checked=""'; ?>
      <?php } else { ?>
        <?php $ass = 'checked=""'; ?>
      <?php } ?>
    <div class="form-group ">
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="supernumerary" <?= $as ?> value="Tidak Ada" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description"> Tidak Ada </span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="supernumerary" <?= $ass ?> value="Ada" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description"> Ada : </span>
      </label>        
    </div>
  </div>
  <div class="form-group col-lg-6">
   
   <div class="col-lg-10">
     <input class="form-control btn-sm" value="<?= $data->supernumeraryket ?>" type="text" name="supernumeraryket"></input>
   </div>
 </div>
</div>

<div class="form-group col-lg-12">
  <div  class="col-lg-3"><label>Diastema</label> </div>
  <div class="col-lg-3">

       <?php if ($data->Diastema == 'Tidak Ada') { ?>
        <?php $z = 'checked=""'; ?>
      <?php } else { ?>
        <?php $zz = 'checked=""'; ?>
      <?php } ?>
    <div class="form-group ">
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="Diastema" <?= $z ?> value="Tidak Ada" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description"> Tidak Ada </span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="Diastema" <?= $zz ?> value="Ada" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description"> Ada : </span>
      </label>        
    </div>
  </div>
  <div class="form-group col-lg-6">
   
   <div class="col-lg-10">
     <input class="form-control btn-sm" value="<?= $data->Diastemaket ?>" type="text" name="Diastemaket"></input>
   </div>
 </div>
</div>

<div class="form-group col-lg-12">
  <div  class="col-lg-3"><label>Gigi Anomali</label> </div>

       <?php if ($data->Gigianomali == 'Tidak Ada') { ?>
        <?php $x = 'checked=""'; ?>
      <?php } else { ?>
        <?php $xx = 'checked=""'; ?>
      <?php } ?>

    <div class="col-lg-3">
    <div class="form-group ">
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="Gigianomali" <?= $x ?> value="Tidak Ada" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description"> Tidak Ada </span>
      </label>
      <label class=" custom-control custom-radio" >
        <input id="radio1" name="Gigianomali" <?= $xx ?> value="Ada" type="radio" class="custom-control-input" ></input>
        <span class="custom-control-indicator" ></span>
        <span class="custom-control-description"> Ada : </span>
      </label>        
    </div>
  </div>
  <div class="form-group col-lg-6">
   
   <div class="col-lg-10">
     <input class="form-control btn-sm" type="text" value="<?= $data->Gigianomaliket ?>" name="Gigianomaliket"></input>
   </div>
 </div>
</div>

<div class="form-group col-lg-12">
  <div  class="col-lg-3"><label>Lain-lain</label> </div>
  <div class="col-lg-8">
   <input class="form-control btn-sm" type="text" value="<?= $data->lain ?>" name="lain"></input>
 </div>
</div>


<div class="form-group col-lg-12">
  <div  class="col-lg-3"><label>Keterangan</label> </div>
  <div class="col-lg-8">
   <input class="form-control btn-sm" type="text" value="<?= $data->Keterangan ?>" name="Keterangan"></input>
 </div>
</div>



<div class="table-responsive ">
  <table class="table-sm table-bordered col-lg-12">
    <thead>
     <tr>
       
     </tr> 
   </thead>
   <tbody>
    <tr>
      <td> 18 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g18 ?>" name="18"> </input></td>
      <td> 28 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g28 ?>" name="28"> </input></td>
      <td> 38 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g38 ?>" name="38"> </input></td>
      <td> 48 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g48 ?>" name="48"> </input></td>
    </tr>
    <tr>
      <td> 17 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g17 ?>" name="17"> </input></td>
      <td> 27 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g27 ?>" name="27"> </input></td>
      <td> 37 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g37 ?>" name="37"> </input></td>
      <td> 47 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g47 ?>" name="47"> </input></td>
    </tr>
    <tr>
      <td> 16 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g16 ?>" name="16"> </input></td>
      <td> 26 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g26 ?>" name="26"> </input></td>
      <td> 36 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g36 ?>" name="36"> </input></td>
      <td> 46 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g46 ?>" name="46"> </input></td>
    </tr>
    <tr>
      <td> 15/55 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g15g55 ?>" name="15/55"> </input></td>
      <td> 25/65 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g25g65 ?>" name="25/65"></input></td>
      <td> 35/75 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g35g75 ?>" name="35/75"> </input></td>
      <td> 45/85 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g45g85 ?>" name="45/85"> </input></td>
    </tr>
    <tr>
      <td> 14/54 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g14g54 ?>" name="14/54"> </input></td>
      <td> 24/64 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g24g64 ?>" name="24/64"> </input></td>
      <td> 34/74 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g34g74 ?>" name="34/74"> </input></td>
      <td> 44/84 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g44g84 ?>" name="44/84"> </input></td>
    </tr>
    <tr>
      <td> 13/53 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g13g53 ?>" name="13/53"> </input></td>
      <td> 23/63 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g23g63 ?>" name="23/63"> </input></td>
      <td> 33/73 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g33g73 ?>" name="33/73"> </input></td>
      <td> 43/83 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g43g83 ?>" name="43/83"> </input></td>
    </tr>
    <tr>
      <td> 12/52 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g12g52 ?>" name="12/52"> </input></td>
      <td> 22/62 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g22g62 ?>" name="22/62"> </input></td>
      <td> 32/72 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g32g72 ?>" name="32/72"> </input></td>
      <td> 42/82 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g42g82 ?>" name="42/82"> </input></td>
    </tr>
    <tr>
      <td> 11/51 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g11g51 ?>" name="11/51"> </input></td>
      <td> 21/61 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g21g61 ?>" name="21/61"> </input></td>
      <td> 31/71 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g31g71 ?>" name="31/71"> </input></td>
      <td> 41/81 : <input class="form-control btn-sm col-lg-4" value="<?= $data->g41g81 ?>" name="41/81"> </input></td>
    </tr>
  </tbody>
</table>
</div>

<div class="form-group col-lg-12">
  <div class="col-lg-10"></div> 
  <div class="col-lg-2">
    <br> 
    <button type="submit" class="form-control btn btn-primary"> Simpan </button>
  </div>
</div>
</div>
