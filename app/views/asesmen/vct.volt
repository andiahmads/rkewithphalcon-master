<div class="card col-lg-8">
  <div class="card-block">
      <h4><strong><i class="material-icons m-r-xs">edit </i>Diagnosa dan Resep</strong></h4>
   <div class=" card card-block">
                 
   <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#one" role="tab">Asesmen Pasien</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="#two" role="tab">Diagnosa Pasien</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#three" role="tab">Resep Obat</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="one" role="tabpanel">
                    <div class="form-group">
                        <h3 align="center">
                          Asesmen Pasein
                        </h3>
                        <br>

                        <div class="card-collapsed" align="center">
    <a href="{{ static_url('Asesmen/pasien') }}" class="btn btn-primary btn-lg btn-icon m-b-1" ><i class="material-icons">
            library_add
        </i>
        <span>Asesmen Pasien</span>
    </a>
</div>
                        
                      </div>
                  </div>
                  <div class="tab-pane " id="two" role="tabpanel">
                    <div class="form-group">
                        <label for="exampleTextarea">
                          Diagnosa :
                        </label>
                        <textarea class="form-control" name="diagnosa" rows="4">
                        </textarea>
                      </div>
                  </div>
                  <div class="tab-pane" id="three" role="tabpanel">
                    <div class="form-group">
                      <label for="exampleTextarea">
                          Resep :
                        </label>
                    <select data-placeholder="Nama Obat" name="resep" multiple class="select2" style="width: 100%;">
                      <option>American Black Bear</option>
                    </select>
                  </div>
                    <div class="form-group">
                      <label for="exampleTextarea">
                          Dosis :
                        </label>
                        <input class="form-control" type="number" name="dosis">
                    </div>
                  </div>
                  

                  </div>
                  
                </div>
              </div>
            </div>
          </div></div>


