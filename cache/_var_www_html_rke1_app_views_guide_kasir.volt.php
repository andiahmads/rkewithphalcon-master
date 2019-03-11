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


<div class="card-header">
  <?php $this->flashSession->output() ?>
<ul class="nav nav-tabs" role="tablist">

  <li class="nav-item">
  <button class="btn btn-outline-info btn m-r-xs-m-b-xs" data-toggle="tab" href="#one" role="tab"><p>Pembayara Awal</p>
  </button></li>
  <li class="nav-item">
  <button class="btn btn-outline-info btn m-r-xs-m-b-xs" data-toggle="tab" href="#two" role="tab"><p>Pembayaran Berobat</p>
  </button></li>

</ul>
</div>




<div class="tab-content">
  <div class="tab-pane active no-bg" id="one" role="tabpanel" required="">
<div class="card-header bg-white">
<div class="row no-bg">


      <div class="row pricing">
        <?php foreach ($bayar as $datas) { ?>
             <div class="col-lg-3">
               <div class="pricing-plan">
                 <div class="plan-price text-info">
                   <label>NO RM</label><br>
                   <span> <?= $datas->no_rm ?></span>
                 </div>
                 <ul class="plan-features">
                   <img src="images/avatar.jpg" height="80"/>
                   <?php $tes = Dokter::findFirstBynik($datas->nik); ?>
                     <li><b>Dokter:</b><?= $tes->nama ?></li>

                     <li><b>Poly:     </b><?= $datas->poly ?></li>
                     <li><b>Berobat: </b><?= $datas->tanggal_berobat ?></li>
                     <li><b>Pembayaran:<?= $datas->total_pembayaran ?></li>
                 </ul>

                 <a href="detailpembayaran/detail/<?= $datas->id_berobat ?>" class="btn btn-info  m-r-xs m-b-xs btn-sm"><i class="material-icons"> perm_identity </i>Detail</a>

               </div>
             </div>
<?php } ?>
    </div>

</div>
</div>
</div>



<div class="tab-pane" id="two" role="tabpanel">
  <div class="row pricing">

         <div class="col-lg-3">
           <div class="pricing-plan">
             <div class="plan-price text-info">
               <label>NO RM</label><br>
               <span>7777</span>
             </div>
             <ul class="plan-features">
               <img src="images/avatar.jpg" height="80"/>

                 <li><b>Dokter:</b>Hariansyah</li>

                 <li><b>Poly:     </b>Jiwa</li>
                 <li><b>Berobat: </b>2018-1-2</li>
                 <li><b>Pembayaran:50.0000</li>
             </ul>

             <a href="detailpembayaran/berobat" class="btn btn-info  m-r-xs m-b-xs btn-sm"><i class="material-icons"> perm_identity </i>Detail</a>

           </div>
         </div>

</div>
          </div>

</div>
