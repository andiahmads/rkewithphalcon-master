<?php  
  
$url = $_SERVER['REQUEST_URI'];  
  
header("Refresh: 10; URL=$url");  
  
?>
<?php $this->flashSession->output(); ?>

<div class="card-header bg-blue"><b><strong>Pasien Berobat</strong></b></div>
<div class="card card-block">
   
                            <div class="row">
                                  {% for d in data %}
                                    
                                   <div class="col-md-3 col-sm-4 col-xs-6">
                                  <div class="card card-block" align="center">


                                  <h4 class="card-title">
                                  <?php $pasien = DataPasien::findFirstByno_rm($d->no_rm); ?>
                                      {{ pasien.nama_pasien }}
                                      
                                      </h4>
                                      <img src="{{ static_url('images/1.jpg')}}" height="150" width="100">
                                      <br>
                                      <p class="card-text">
                                      No. RM : <strong>{{d.no_rm}}</strong>
                                      </p>
                                      <a href="Dokter/pasien/{{d.no_rm}}/{{d.id_berobat}}" class="btn btn-primary btn-block " type="submit">
                                        Proses
                                      </a>
                                      
                                    </div>
                                    </div>
                                  {% endfor %}
            </div>                       
</div>                                                     
            