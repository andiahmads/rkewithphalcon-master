<?php $this->flashSession->output(); ?>
<?php  
  
$url = $_SERVER['REQUEST_URI'];  
  
header("Refresh: 10; URL=$url");  
  
?>
<div class="card-header bg-blue"><b><strong>Pasien Berobat</strong></b></div>
<div class="card card-block">
   
                            <div class="menu">
                                  {% for d in data %}
                                    
                                   <div class="col-md-2 col-sm-4 col-xs-6">
                                  <div class="card card-block" align="center">


                                  <h4 class="card-title">
                                  <?php $pasien = DataPasien::findFirstByno_rm($d->no_rm); ?>
                                      {{ pasien.nama_pasien }}
                                      
                                      </h4>
                                      <img src="{{ static_url('images/1.jpg')}}" height="150" width="100">
                                      <br>
                                      <p class="card-text">
                                      No. RM : {{d.no_rm}}
                                      </p>
                                      
                                      <a href="Asesmen/pasien/{{d.no_rm}}/{{d.id_berobat}}" class="btn btn-primary btn-block " type="submit">
                                        Asesmen
                                      </a>
                                      
                                    </div>
                                    </div>
                                  {% endfor %}
            </div>                       
</div>                                                     
            