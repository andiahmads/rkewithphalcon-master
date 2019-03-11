 
 <div class="row">
<?php $this->flashSession->output() ?>
               
              <div class="col-lg-4">


                <div class="card profile-bio">
                  <a class="background">
                  </a>
                  <a href="javascript:;" class="avatar">
                    <img src="{{ static_url('images/avatar.jpg')}}" alt=""/>
                  </a>
                  <div class="user-details">
                    <div class="user-name">
                      <a href="javascript:;">
                        {{session.nama}}
                      </a>
                    </div>
                    <a href="javascript:;">
                      
                      <span>
                        {{session.nik}}
                      </span>
                    </a>
                  </div>
                  <div class="user-stats ">
                  	   
                  	<div class="card card-block">
                 	  <h6><strong><i class="material-icons m-r-xs">edit </i>Change Password</strong></h6>
                 <form action="profile/pengguna" method="POST">

            
              <div class="form-group m-b">
                <small><strong>
                  Password :
                </strong></small>
                <input type="password" class="form-control bg-sm" name="password" value="{{pengguna.password}}" required minlength="5"/>
              </div>
              <button type="submit" class="btn btn-outline-danger btn-round btn-sm m-r-xs m-b-xs col-lg-12">
                  Change Password
                </button>
            </form>
                </div>
            </div>

            </div>

              </div>
              <div class="col-lg-8">
                <div class="card card-block">
                  <div class="profile-timeline-header">                    
                  <div class="col-lg-9">                      
                  <form action="{{ static_url('profile/update')}}" method="post">
                       <h4><strong><i class="material-icons m-r-xs">edit </i>informasi personal</strong></h4>
                  </div>
                  <div class="col-lg-3">
					<button type="submit" class="btn btn-primary btn-icon loading-demo m-r-xs m-b-xs">
                      <i class="material-icons">
                        save
                      </i>
                      <span>
                        Save
                      </span>
                    </button></div>

                  </div>
                   
                  <div class="card card-block">
                  <div class="col-lg-6">
        					<label>NIK :</label>
        					<div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon bg-danger">
                        <i class="material-icons">
                          card_membership
                        </i>
                      </span>
                      <fieldset disabled=""> 
                      <input type="disabled" name="nik" class="form-control " value="{{dokter.nik}}"/>
                    </fieldset>
                    </div>

                  </div>
                  <div class="col-lg-6">
                  
					<label>Nama :</label>
					<div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon ">
                        <i class="material-icons">
                          assignment_ind
                        </i>
                      </span>
                      <input type="text" name="nama" class="form-control " value="{{dokter.nama}}"/>
                    </div>

                  </div>

				<div class="col-lg-6">
					<label>Gender :</label>
					<div class="form-group m-b">
          {% if dokter.gender == 'Laki-Laki' %}
          <?php $j1= 'checked=""' ?>
          {% else %}
          <?php $j2= 'checked=""' ?>
       
        {% endif %}

        <label class=" custom-control custom-radio" >
          <input id="radio1" name="gender" {{j1}}  value="Laki-Laki" type="radio" class="custom-control-input" ></input>
          <span class="custom-control-indicator" ></span>
          <span class="custom-control-description"> Laki-Laki</span>
        </label>
        <label class=" custom-control custom-radio" >
          <input id="radio1" name="gender" {{j2}} value="Perempuan" type="radio" class="custom-control-input" ></input>
          <span class="custom-control-indicator" ></span>
          <span class="custom-control-description"> Perempuan</span>
        </label>
      </div>
      </div>

                  <div class="col-lg-6">
					<label>Poly :</label>
					<div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon">
                        <i class="material-icons">
                          account_balance
                        </i>
                      </span>
                      <select class="form-control " name="poly">
                      	{% if dokter.poly == 'gigi' %}
                      	<option>gigi</option>
                      	<option>Kejiwaan</option>
                      	<option>VCT</option>
                      	<option>Psikiater</option>
                      	<option>Penyakit Dalam</option>
                      	{% elseif dokter.poly == 'kejiwaan' %}
                      	<option>Kejiwaan</option>
                      	<option>VCT</option>
                      	<option>Psikiater</option>
                      	<option>Penyakit Dalam</option>
                      	<option>Gigi</option>
                      	{% elseif dokter.poly == 'VCT' %}
                      	<option>VCT</option>
                      	<option>Psikiater</option>
                      	<option>Penyakit Dalam</option>
                      	<option>Gigi</option>
                      	<option>Kejiwaan</option>
                      	{% elseif dokter.poly == 'Penyakit Dalam' %}
                      	<option>Psikiater</option>
                      	<option>Penyakit Dalam</option>
                      	<option>Gigi</option>
                      	<option>Kejiwaan</option>
                      	<option>VCT</option>
                      	{% else %}
                      	<option>Psikiater</option>
                      	<option>Gigi</option>
                      	<option>Penyakit Dalam</option>
                      	<option>Kejiwaan</option>
                      	<option>VCT</option>
                      	{% endif %}
                      	</select>
                    </div>

                  </div>

				<div class="col-lg-12">
        <label>Telephone :</label>
          <div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon">
                        <i class="material-icons">
                          phone
                        </i>
                      </span>
                      <input type="text" name="alamat" class="form-control " value="{{dokter.tlp}}"/>
                    </div>

        </div>
				<div class="col-lg-12">
				<label>Alamat :</label>
					<div class="input-prepend input-group m-b-1">
                      <span class="add-on input-group-addon">
                        <i class="material-icons">
                          location_on
                        </i>
                      </span>
                      <input type="text" name="alamat" class="form-control " value="{{dokter.alamat}}"/>
                    </div>

</div></form>
              </div>
 </div>
            </div>
        </div>