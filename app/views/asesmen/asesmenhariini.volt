
<div class="row card"><br>
<div class="col-lg-8">
	<div class="col-lg-2">
		<img src="{{ static_url('img/riau.png')}}" height="150">
	</div>
	<div class="col-lg-9">
		<h3><strong>PEMERINTAH PROVINSI RIAU</strong></h3>
		<h1><strong>RUMAH SAKIT JIWA TAMPAN</strong></h1>
		<h5>Jl. H. R. Soebrantas Km. 12,5 Pekanbaru Telp. (0761) 63240 fax. (0761) 63239 E-mail : rstampan@yahoo.com</h5>
	</div>
</div>
	<div class="card row col-lg-4">
                	<div class="form-group">
                      <label for="example-text-input" class="col-xs-4 col-form-label">No. RM</label>
                      <div class="col-xs-8">
                      <label for="example-text-input" class="col-xs-4 col-form-label">: {{data.no_rm}}</label>
                      
                      </div>
                    </div><br>
                    <div class="form-group">
                      <label for="example-text-input" class="col-xs-4 col-form-label">Nama Pasien</label>	
                      <div class="col-xs-8">
                      <label for="example-text-input" class="col-xs-4 col-form-label">: {{data.nama_pasien}}</label>	
                      </div>
                    </div><br>
                    <div class="form-group">
<?php  $lahir = new DateTime($data->tanggal_lahir);
    $today = new DateTime();
    $umur = $today->diff($lahir);
     ?>
                      <label for="example-text-input" class="col-xs-4 col-form-label">Tanggal Lahir</label>	
                      <div class="col-xs-8">
                      <label for="example-text-input" class="col-xs-12 col-form-label">: {{data.tanggal_lahir}}   |   Umur : <?php echo $umur->y; ?> Tahun </label>	
                      </div>
                    </div><br>
                    <div class="form-group">
                      <label for="example-text-input" class="col-xs-4 col-form-label">Jenis Kelamin</label>	
                      <div class="col-xs-8">
                      <label for="example-text-input" class="col-xs-5 col-form-label">: {{data.jenis_kelamin}}</label>	
                      </div>
                    </div>
                	</div>
            </div>

<form action="{{ static_url('Asesmen/proseseditasesmen/')}}{{ datas.id_asesmen }}/1" method="POST" >
	<input type="hidden" name="idberobat" value="{{pb.id_berobat}}">
<div class="row">
<div class="card-header bg-success" align="center"><b><strong>ASESMEN AWAL PASIEN GIGI RAWAT JALAN</strong></b></div>
<div class="card card-group">
	
<!-- bagian A -->
	<div class="form-group">
		<div class="card-header bg-primary">
		 <strong> A. PENILAIAN TINGKAT NYERI</strong> 
		</div>
		 {% if datas.nyeri == 'Tidak ada Nyeri' %}
        <?php $a = 'checked=""'; ?>
        {% elseif datas.nyeri == 'Nyeri Kronis' %}
        <?php $b = 'checked=""'; ?>
        {% elseif datas.nyeri == 'Nyeri Akut' %}
        <?php $c = 'checked=""'; ?>
        {% endif %}
		<div class="card-block col-lg-6">
			<div class="form-group m-b">
				<label class=" custom-control custom-radio" >
					<input id="radio1" name="nyeri" {{a}} value="Tidak ada Nyeri" type="radio" class="custom-control-input" ></input>
					<span class="custom-control-indicator" ></span>
					<span class="custom-control-description"> Tidak Ada Nyeri</span>
				</label>
				<label class=" custom-control custom-radio" >
					<input id="radio1" name="nyeri" {{b}} value="Nyeri Kronis" type="radio" class="custom-control-input" ></input>
					<span class="custom-control-indicator" ></span>
					<span class="custom-control-description"> Nyeri Kronis</span>
				</label>
				<label class=" custom-control custom-radio" >
					<input id="radio1" name="nyeri" {{c}} value="Nyeri Akut" type="radio" class="custom-control-input" ></input>
					<span class="custom-control-indicator" ></span>
					<span class="custom-control-description"> Nyeri Akut</span>
				</label>
			</div>
			<div class="form-group m-b">
				<div class="col-lg-5">
					<label>Skala Nyeri :</label>
					<input class="form-control btn-sm" value="{{datas.skala}}" name="skala" type="number" placeholder="1-10"></input>
				</div>
				<div class="col-lg-5">
					<label> Lokasi :</label>
					<input class="form-control m-b-1 btn-sm" name="lokasi" value="{{datas.lokasi}}" type="text" placeholder="Enter Lokasi"></input>
				</div>
			</div>
			<div class="form-group lg">
				<div class="col-lg-5">
					<label>Durasi :</label>
					<input class="form-control btn-sm" value="{{datas.durasi}}" name="durasi" type="number" placeholder="1-10"></input>
				</div>
				<div class="col-lg-5">
					<label> Frekuensi :</label>
					<input class="form-control m-b-1 btn-sm" name="frekuensi" value="{{datas.frekuensi}}" type="number" placeholder="Enter Frekuensi"></input>
				</div>
			</div>
			<div class="form-group m-b">
				<label class="m-b-1">Nyeri Hilang Bila :</label><br>
				<div class="col-lg-12 m-b-1">
				{% if datas.nyeri_hilang == 'Minum Obat' %}
      <?php $aa = 'checked=""'; ?>
      {% elseif datas.nyeri_hilang == 'Mendengar Musik' %}
      <?php $bb = 'checked=""'; ?>
      {% elseif datas.nyeri_hilang == 'Istirahat' %}
      <?php $cc = 'checked=""'; ?>
      {% elseif datas.nyeri_hilang == 'Berubah Posisi/Tidur' %}
      <?php $dd = 'checked=""'; ?>
      {% endif %}
				<div class="col-lg-4" >
					<label class=" custom-control custom-radio" >
						<input id="radio1" name="nyerihilang" {{aa}} value="Minum Obat" type="radio" class="custom-control-input" ></input>
						<span class="custom-control-indicator" ></span>
						<span class="custom-control-description">Minum Obat</span>
					</label>
				</div>
				<div class="col-lg-6" >
					<label class=" custom-control custom-radio" >
						<input id="radio1" name="nyerihilang" {{bb}} value="Mendengar Musik" type="radio" class="custom-control-input" ></input>
						<span class="custom-control-indicator" ></span>
						<span class="custom-control-description"> Mendengar Musik</span>
					</label>
				</div>
				</div>
				<div class="col-lg-12 m-b-1">
				<div class="col-lg-4" >
					<label class=" custom-control custom-radio" >
						<input id="radio1" name="nyerihilang" {{cc}} type="radio" value="Istirahat" class="custom-control-input" ></input>
						<span class="custom-control-indicator" ></span>
						<span class="custom-control-description"> Istirahat</span>
					</label>
				</div>
				<div class="col-lg-6" >
					<label class=" custom-control custom-radio" >
						<input id="radio1" name="nyerihilang" {{dd}} value="Berubah Posisi/Tidur" type="radio" class="custom-control-input" ></input>
						<span class="custom-control-indicator" ></span>
						<span class="custom-control-description">Berubah Posisi/Tidur</span>
					</label>
				</div>
				</div>
			</div>
			<div class="form-group m-b">
				<label>Diberitahukan ke DOKTER :</label>
				<br>
				{% if datas.info == 'Ya' %}
     <?php $hh = 'checked=""' ;?>
     {% elseif datas.info == 'Tidak' %}
     <?php $ii = 'checked=""' ;?>
     {% endif %}
				<div class="col-lg-7" >
					<div class="col-lg-2">
					<label class=" custom-control custom-radio" >
						<input id="radio1" name="info" {{hh}} value="Ya" type="radio" class="custom-control-input" ></input>
						<span class="custom-control-indicator" ></span>
						<span class="custom-control-description"> Ya</span>
					</label>
					</div>
					<div class="">
					<label class="col-xs-3 col-form-label">, pukul :</label>
                      <div class="col-xs-5">
                        <input class="form-control btn-sm" value="{{datas.pukul}}" name="pukul" type="text" >
                      </div>
                    </div>
				</div>
				<div class="col-lg-4" >
					<label class=" custom-control custom-radio" >
						<input id="radio1" name="info" {{ii}} value="Tidak" type="radio" class="custom-control-input" ></input>
						<span class="custom-control-indicator" ></span>
						<span class="custom-control-description"> Tidak</span>
					</label>
				</div>
			</div>
		</div>
		<div class="card-block col-lg-6">
			<div class="form-group m-b">
				<img align="center" src="{{ static_url('img/nyeri.jpeg') }}" width="465" height="320">
			</div>
		</div>

	</div>
</div>
</div>
<!-- akhir bagian A -->

<!-- Bagian B -->
<div class="row">
<div class="card card-group">
<div class="form-group">
	<div class="card-header bg-primary">
		 <strong> B. PENILAIAN RESIKO JATUH</strong> 
	</div>
	
	<div class="card-block col-lg-4 ">
		<div class="card-header bg-warning" align="center">
		 <strong> HUMPTY DUMPTY (ANAK-ANAK) </strong> 
		</div>
		<div class="form-group m-b-1">
			<div class="col-lg-12 m-b-1">
				<label>Umur :</label>
				<input class="form-control btn-sm" value="{{datas.umur}}" name="umur" type="number" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Jenis Kelamin :</label>
				<input class="form-control btn-sm" value="{{datas.gender}}" name="gender" type="number" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Diagnosis :</label>
				<input class="form-control btn-sm" value="{{datas.diagnosis}}" name="diagnosis" type="number" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Gangguan Kognitif :</label>
				<input class="form-control btn-sm" value="{{datas.gangguankognitif}}" name="gangguankognitif" type="number" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Faktor Lingkungan :</label>
				<input class="form-control btn-sm" value="{{datas.faktorlingkungan}}" name="faktorlingkungan" type="number" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Respon terhadap Operasi/Sedasi/Anastesi :</label>
				<input class="form-control btn-sm" value="{{datas.responoperasi}}" name="responoperasi" type="number" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Penggunaan Obat-obatan :</label>
				<input class="form-control btn-sm" value="{{datas.penggunaanobat}}" name="penggunaanobat" type="number" placeholder="Score 1-10"></input>
			</div>
			
		</div>
	</div>
	<div class="card-block col-lg-4">
		<div class="card-header bg-dark" align="center">
		 <strong> EDMUNSON (JIWA) </strong> 
		</div>
		<div class="form-group m-b-1">
			<div class="col-lg-12 m-b-1">
				<label>Usia :</label>
				<input class="form-control btn-sm" value="{{datas.usia}}" name="usia" type="number" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Status Mental :</label>
				<input class="form-control btn-sm" value="{{datas.statusmental}}" name="statusmental" type="number" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Eliminasi :</label>
				<input class="form-control btn-sm" value="{{datas.eliminasi}}" name="eliminasi" type="number" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Pengobatan :</label>
				<input class="form-control btn-sm" type="number" value="{{datas.pengobatan}}" name="pengobatan" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Diagnosis :</label>
				<input class="form-control btn-sm" type="number" value="{{datas.diagnosis2}}" name="diagnosis2" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Ambulasi/Keseimbangan :</label>
				<input class="form-control btn-sm" type="number" value="{{datas.ambulasi}}" name="ambulasi" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Nutrisi :</label>
				<input class="form-control btn-sm" type="number" value="{{datas.nutrisi}}" name="nutrisi" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Gangguan Pola Tidur :</label>
				<input class="form-control btn-sm" type="number" value="{{datas.gangguanpolatidur}}" name="gangguanpolatidur" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Riwayat Jatuh :</label>
				<input class="form-control btn-sm" type="number" value="{{datas.riwayatjatuh}}" name="riwayatjatuh" placeholder="Score 1-10"></input>
			</div>
			
		</div>
	</div>
	<div class="card-block col-lg-4">
		<div class="card-header bg-warning" align="center">
		 <strong> MORSE (DEWASA) </strong> 
		</div>
		<div class="form-group m-b-1">
			<div class="col-lg-12 m-b-1">
				<label>Riwayat Jatuh :</label>
				<input class="form-control btn-sm" value="{{datas.riwayatjatuh1}}" name="riwayatjatuh1" type="number" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Mempunyai Diagnosa Sekunder :</label>
				<input class="form-control btn-sm" value="{{datas.diagnosissekunder}}" name="diagnosasekunder" type="number" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Menggunakan Alat Bantu :</label>
				<input class="form-control btn-sm" value="{{datas.alatbantu}}" name="alatbantu" type="number" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Menggunakan Obat IV Tertentu :</label>
				<input class="form-control btn-sm" value="{{datas.obativ}}" name="obativ" type="number" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Gaya Berjalan :</label>
				<input class="form-control btn-sm" type="number" value="{{datas.gayaberjalan}}" name="gayaberjalan" placeholder="Score 1-10"></input>
			</div>
			<div class="col-lg-12 m-b-1">
				<label>Status Mentas :</label>
				<input class="form-control btn-sm" type="number" value="{{datas.statusmental1}}" name="statusmental1" placeholder="Score 1-10"></input>
			</div>
			
		</div>
	</div>
	
	
</div>
</div>
</div>
<!-- Akhir B -->




<!-- Pemeriksaan untuk kasus jiwa -->

<div class="col-lg-8">
<div class="card card-group">
<div class="form-group">
	<div class="card-header bg-primary">
		 <strong> Pemeriksaan Resiko Jatuh Edmunson (untuk kasus jiwa)</strong> 
	</div>
	<div class="card-header" align="center">
		 <strong> ITEM PENILAIAN </strong> 
		</div>
			<div class="col-lg-12 m-b-1">
				<label class="m-b-1">USIA :</label><br>
				{% if datas.usia1 == 'Kurang dari 50 tahun' %}
				<?php $i = 'checked=""' ?>
				{% elseif datas.usia1 == '50-70 tahun' %}
				<?php $ii = 'checked=""' ?>
				{% else %}
				<?php $iii = 'checked=""' ?>
				{% endif %}
        <div class="col-lg-3" >
					<label class=" custom-control custom-radio" >
						<input id="radio1" {{i}} name="usia1" type="radio" value="Kurang dari 50 tahun" class="custom-control-input" ></input>
						<span class="custom-control-indicator" ></span>
						<span class="custom-control-description">Kurang dari 50 tahun</span>
					</label>
				</div>
				<div class="col-lg-2" >
					<label class=" custom-control custom-radio" >
						<input id="radio1" {{ii}} name="usia1" value="50-70 tahun" type="radio" class="custom-control-input" ></input>
						<span class="custom-control-indicator" ></span>
						<span class="custom-control-description">50-70 tahun</span>
					</label>
				</div>
				<div class="col-lg-3" >
					<label class=" custom-control custom-radio" >
						<input id="radio1" {{iii}} name="usia1" value="Lebih dari 80 tahun" type="radio" class="custom-control-input" ></input>
						<span class="custom-control-indicator" ></span>
						<span class="custom-control-description">Lebih dari 80 tahun</span>
					</label>
				</div>
			</div>

			<div class="col-lg-12 m-b-1">
        <label class="m-b-1">STATUS MENTAL :</label><br>
				{% if datas.statusmental2 == 'Kesadaran baik' %}
				<?php $j = 'checked=""' ?>
				{% elseif datas.statusmental2 == 'Agitasi/Ansietas' %}
				<?php $jj = 'checked=""' ?>
				{% elseif datas.statusmental2 == 'Kadang-kadang bingung' %}
				<?php $jjj = 'checked=""' ?>
				{% else %}
				<?php $jjjj = 'checked=""' ?>
				{% endif %}        
        <div class="col-lg-2" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="statusmental2" {{j}} value="Kesadaran baik" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description"> Kesadaran baik</span>
          </label>
        </div>
        <div class="col-lg-2" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="statusmental2" {{jj}} value="Agitasi/Ansietas" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description"> Agitasi/Ansietas</span>
          </label>
        </div>
        <div class="col-lg-3" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="statusmental2" {{jjj}} value="Kadang-kadang bingung" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Kadang-kadang bingung</span>
          </label>
        </div>
        <div class="col-lg-1" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="statusmental2" {{jjjj}} value="Bingung/Disorientasi" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Bingung/Disorientasi</span>
          </label>
        </div>
      </div>

      <div class="col-lg-12 m-b-1">
        <label class="m-b-1">ELIMINASI :</label><br>
				{% if datas.eliminasi1 == 'Mandiri dan mampu mengontrol BAB/BAK' %}
				<?php $k = 'checked=""' ?>
				{% elseif datas.eliminasi1 == 'Dower Catheter/Colostomy' %}
				<?php $kk = 'checked=""' ?>
				{% elseif datas.eliminasi1 == 'Eliminasi dengan Bantuan' %}
				<?php $kkk = 'checked=""' ?>
				{% elseif datas.eliminasi1 == 'Gangguan Eliminasi' %}
				<?php $kkkk = 'checked=""' ?>
				{% else %}
				<?php $kkkkk = 'checked=""' ?>
				{% endif %} 
        <div class="col-lg-4" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{k}} name="eliminasi1" value="Mandiri dan mampu mengontrol BAB/BAK" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Mandiri dan mampu mengontrol BAB/BAK</span>
          </label>
        </div>
        <div class="col-lg-3" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{kk}} name="eliminasi1" value="Dower Catheter/Colostomy" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Dower Catheter/Colostomy</span>
          </label>
        </div>
        <div class="col-lg-3" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{kkk}} name="eliminasi1" value="Eliminasi dengan Bantuan" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Eliminasi dengan Bantuan</span>
          </label>
        </div>
        <div class="col-lg-4" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{kkkk}} name="eliminasi1" value="Gangguan Eliminasi" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Gangguan Eliminasi</span>
          </label>
        </div>
        <div class="col-lg-5" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{kkkkk}} name="eliminasi1" value="Inkontinensia tetapi mampu untuk mobilisasi" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Inkontinensia tetapi mampu untuk mobilisasi</span>
          </label>
        </div>
      </div>

      <div class="col-lg-12 m-b-1">
        <label class="m-b-1">PENGOBATAN :</label><br>
				{% if datas.pengobatan1 == 'Tanpa obat-obatan' %}
				<?php $l = 'checked=""' ?>
				{% elseif datas.pengobatan1 == 'Obat-obatan jantung' %}
				<?php $ll = 'checked=""' ?>
				{% elseif datas.pengobatan1 == 'Obat-obat psikotropika' %}
				<?php $lll = 'checked=""' ?>
				{% else %}
				<?php $llll = 'checked=""' ?>
				{% endif %}  
        <div class="col-lg-3" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="pengobatan1" {{l}} value="Tanpa obat-obatan" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Tanpa obat-obatan</span>
          </label>
        </div>
        <div class="col-lg-3" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="pengobatan1" {{ll}} value="Obat-obatan jantung" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Obat-obatan jantung</span>
          </label>
        </div>
        <div class="col-lg-3" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="pengobatan1" {{lll}} value="Obat-obat psikotropika" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Obat-obat psikotropika</span>
          </label>
        </div>
        <div class="col-lg-12" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="pengobatan1" {{llll}} value="Mendapat tambahan obat-obatan dan/atau obat-obat PRN(psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Mendapat tambahan obat-obatan dan/atau obat-obat PRN(psikiatri, antinyeri) yang diberikan dalam 24 jam terakhir</span>
          </label>
        </div>
      </div>

      <div class="col-lg-12 m-b-1">
        <label class="m-b-1">DIAGNOSA :</label><br>
				{% if datas.diagnosa == 'Bipolar / Gangguan SchizoaffectiveTanpa obat-obatan' %}
				<?php $m = 'checked=""' ?>
				{% elseif datas.diagnosa == 'Penggunaan Obat-obatan Terlarang / Ketergantungan alkohol' %}
				<?php $mm = 'checked=""' ?>
				{% elseif datas.diagnosa == 'Gangguan Depresi Mayor' %}
				<?php $mmm = 'checked=""' ?>
				{% else %}
				<?php $mmmm = 'checked=""' ?>
				{% endif %} 
        <div class="col-lg-4" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="diagnosa" {{m}} value="Bipolar / Gangguan Schizoaffective" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Bipolar / Gangguan Schizoaffective</span>
          </label>
        </div>
        <div class="col-lg-6" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="diagnosa" {{mm}} value="Penggunaan Obat-obatan Terlarang / Ketergantungan alkohol" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Penggunaan Obat-obatan Terlarang / Ketergantungan alkohol</span>
          </label>
        </div>
        <div class="col-lg-4" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="diagnosa" {{mmm}} value="Gangguan Depresi Mayor" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Gangguan Depresi Mayor</span>
          </label>
        </div>
        <div class="col-lg-4" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="diagnosa" {{mmmm}} value="Dimensia / Delirium" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Dimensia / Delirium</span>
          </label>
        </div>
      </div>

      <div class="col-lg-12 m-b-1">
        <label class="m-b-1">AMBULASI / KESEIMBANGAN :</label><br>
				{% if datas.ambulasi1 == 'Mandiri/ Keseimbangan baik/ immobilisasi' %}
				<?php $n = 'checked=""' ?>
				{% elseif datas.ambulasi1 == 'Dengan Alat Bantu (kursi roda dll)' %}
				<?php $nn = 'checked=""' ?>
				{% elseif datas.ambulasi1 == 'Vertigo/ kelemahan' %}
				<?php $nnn = 'checked=""' ?>
				{% elseif datas.ambulasi1 == 'Goyah tapi lupa keterbatasan' %}
				<?php $nnnnn = 'checked=""' ?>
				{% else %}
				<?php $nnnn = 'checked=""' ?>
				{% endif %} 
        <div class="col-lg-12" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="ambulasi1" {{n}} value="Mandiri/ Keseimbangan baik/ immobilisasi" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Mandiri/ Keseimbangan baik/ immobilisasi</span>
          </label>
        </div>
        <div class="col-lg-12" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="ambulasi1" {{nn}} value="Dengan Alat Bantu (kursi roda dll)" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Dengan Alat Bantu (kursi roda dll)</span>
          </label>
        </div>
        <div class="col-lg-12" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="ambulasi1" {{nnn}} value="Vertigo/ kelemahan" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Vertigo/ kelemahan</span>
          </label>
        </div>
        <div class="col-lg-12" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="ambulasi1" {{nnnn}} value="Goyah/ membutuhkan bantuan dan menyadari kemampoan" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Goyah/ membutuhkan bantuan dan menyadari kemampoan</span>
          </label>
        </div>
        <div class="col-lg-12" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="ambulasi1" {{nnnnn}} value="Goyah tapi lupa keterbatasan" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Goyah tapi lupa keterbatasan</span>
          </label>
        </div>
      </div>

      <div class="col-lg-12 m-b-1">
        <label class="m-b-1">NUTRISI :</label><br>
        {% if datas.nutrisi1 == 'Tidak ada kelainan dengan nafsu makan' %}
				<?php $oo = 'checked=""' ?>
				{% else %}
				<?php $o = 'checked=""' ?>
				{% endif %} 
        <div class="col-lg-12" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="nutrisi1" {{o}} value="Mengkonsumsi sedikit makanan atau minuman dalam 24 jam terakhir" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Mengkonsumsi sedikit makanan atau minuman dalam 24 jam terakhir</span>
          </label>
        </div>
        <div class="col-lg-12" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="nutrisi1" {{oo}} value="Tidak ada kelainan dengan nafsu makan" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Tidak ada kelainan dengan nafsu makan</span>
          </label>
        </div>        
      </div>

      <div class="col-lg-12 m-b-1">
        <label class="m-b-1">GANGGUAN POLA TIDUR :</label><br>
        {% if datas.polatidur == 'Tidak ada gangguan tidur' %}
				<?php $p = 'checked=""' ?>
				{% else %}
				<?php $pp = 'checked=""' ?>
				{% endif %} 
        <div class="col-lg-12" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="polatidur" {{p}} value="Tidak ada gangguan tidur" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Tidak ada gangguan tidur</span>
          </label>
        </div>
        <div class="col-lg-12" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="polatidur" {{pp}} value="Ada keluhan gangguan tidur yang dilaporkan oleh pasien, keluarga atau petugas" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Ada keluhan gangguan tidur yang dilaporkan oleh pasien, keluarga atau petugas</span>
          </label>
        </div>        
      </div>
  

      <div class="col-lg-12 m-b-1">
        <label class="m-b-1">RIWAYAT JATUH :</label><br>
        {% if datas.jatuh == 'Tidak ada riwayat jatuh' %}
				<?php $s = 'checked=""' ?>
				{% else %}
				<?php $ss = 'checked=""' ?>
				{% endif %} 
        <div class="col-lg-12" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="jatuh" {{s}} value="Tidak ada riwayat jatuh" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Tidak ada riwayat jatuh</span>
          </label>
        </div>
        <div class="col-lg-12" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="jatuh" {{ss}} value="Ada riwayat jatuh dalam 3 bulan terakhir" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Ada riwayat jatuh dalam 3 bulan terakhir</span>
          </label>
        </div>        
      </div>
  
</div>
</div>
</div>
<!-- Pemeriksaan untuk kasus jiwa -->

<!-- Pemeriksaan untuk kasus non jiwa -->
<div class=" col-lg-4">
<div class="card card-group">
<div class="form-group">
  <div class="card-header bg-primary">
     <strong align="center"> Pemeriksaan Resiko Jatuh Morse (untuk kasus non jiwa)</strong> 
  </div>
  <div class="card-header" align="center">
     <strong> FAKTOR RISIKO </strong> 
    </div>
  
      <div class="col-lg-12 m-b-1">
        <label class="m-b-1">RRIWAYAT JATUH :</label><br>
        <div class="col-lg-2" >
        {% if datas.riwayatjatuh2 == 'Ya' %}
        <?php $q = 'checked=""' ?>
        {% else %}
        <?php $qq ='checked=""' ?>
        {% endif %}
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{q}} name="riwayatjatuh2" value="Ya" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description"> Ya</span>
          </label>
        </div>
        <div class="col-lg-2" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{qq}} name="riwayatjatuh2" value="Tidak" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description"> Tidak</span>
          </label>
        </div>
      </div>

      <div class="col-lg-12 m-b-1">
        <label class="m-b-1">DIAGNOSA SEKUNDER :</label><br>
        {% if datas.sekunder == 'Ya' %}
        <?php $w = 'checked=""' ?>
        {% else %}
        <?php $ww ='checked=""' ?>
        {% endif %}
        <div class="col-lg-2" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{w}} name="sekunder" value="Ya" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Ya</span>
          </label>
        </div>
        <div class="col-lg-2" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{ww}} name="sekunder" value="Tidak" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Tidak</span>
          </label>
        </div>
      </div>

      <div class="col-lg-12 m-b-1">
        <label class="m-b-1">ALAT BANTU :</label><br>
        {% if datas.alatbantu1 == 'Perabot' %}
        <?php $e = 'checked=""' ?>
        {% elseif datas.alatbantu1 == 'Tongkat/alat penopang' %}
        <?php $ee = 'checked=""' ?>
        {% else %}
        <?php $eee ='checked=""' ?>
        {% endif %}
          <div class="col-lg-12">
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{e}} name="alatbantu1" value="Perabot" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Perabot</span>
          </label>
          <br>
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{ee}} name="alatbantu1" value="Tongkat/alat penopang" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Tongkat/alat penopang</span>
          </label>
          <br>
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{eee}} name="alatbantu1" value="Tidak ada/kursi roda/perawat/tirah baring" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Tidak ada/kursi roda/perawat/tirah baring</span>
          </label>
          </div>
      </div>

      <div class="col-lg-12 m-b-1">
        <label class="m-b-1">TERPASANG INFUS :</label><br>
        {% if datas.terpasanginfus == 'Ya' %}
        <?php $f = 'checked=""' ?>
        {% else %}
        <?php $ff ='checked=""' ?>
        {% endif %}
        <div class="col-lg-2" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{f}} name="terpasanginfus" value="Ya" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Ya</span>
          </label>
        </div>
        <div class="col-lg-2" >
          <label class=" custom-control custom-radio" >
            <input id="radio1" {{ff}} name="terpasanginfus" value="Tidak" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Tidak</span>
          </label>
        </div>
      </div>

      <div class="col-lg-12 m-b-1">
        <label class="m-b-1">GAYA BERJALAN :</label><br>
        {% if datas.gayaberjalan1 == 'Terganggu' %}
        <?php $g = 'checked=""' ?>
        {% elseif datas.gayaberjalan1 == 'Lemah' %}
        <?php $gg = 'checked=""' ?>
        {% else %}
        <?php $ggg ='checked=""' ?>
        {% endif %}
        <div class="col-lg-12">
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="gayaberjalan1" {{g}} value="Terganggu" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Terganggu</span>
          </label>
          <br>
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="gayaberjalan1" {{gg}} value="Lemah" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Lemah</span>
          </label>
          <br>
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="gayaberjalan1" {{ggg}} value="Normal / tirah baring / imobilisasi" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Normal / tirah baring / imobilisasi</span>
          </label>
        </div>
      </div>

      <div class="col-lg-12 m-b-1">
        <label class="m-b-1">STATUS MENTAL :</label><br>
        {% if datas.statusmental3 == 'Sering lupa akan keterbatasan yang dimiliki' %}
        <?php $h = 'checked=""' ?>
        {% else %}
        <?php $hh ='checked=""' ?>
        {% endif %}
        <div class="col-lg-12">
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="statusmental3" {{h}} value="Sering lupa akan keterbatasan yang dimiliki" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Sering lupa akan keterbatasan yang dimiliki</span>
          </label>
          <br>
          <label class=" custom-control custom-radio" >
            <input id="radio1" name="statusmental3" {{hh}} value="Orientasi baik terhadap kemampuan diri sendiri" type="radio" class="custom-control-input" ></input>
            <span class="custom-control-indicator" ></span>
            <span class="custom-control-description">Orientasi baik terhadap kemampuan diri sendiri</span>
          </label>
          
        </div>
      </div>
  
</div>
</div>
<div class="col-lg-9">
  <a href="{{ static_url('asesmen/dataasesmen')}}" class="btn btn-primary" > Cancel </a>
</div>
<div class="col-lg-3">
  <button class="btn btn-primary col-lg-12" type="submit">  Edit  </button>
</div>

</div>
<!-- Pemeriksaan untuk kasus non jiwa -->
</form>