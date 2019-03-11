<?php $this->flashSession->output(); ?>
<div class="card-header bg-blue"><b><strong>Data Diagnosa</strong></b></div>
<div class="card card-block">
 

  <table  class="table table-bordered datatable">

    <thead >
      <tr>
        <th>
          ID Diagnosa
        </th>
        <th>No. RM</th>
        <th>Nama Pasien</th>
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
      {% for d in diagnosa %}
      <tr>
        <td align="center">{{ d.id_diagnosa }}</td>
        <td align="center">{{ d.no_rm }}</td>
        <?php $pasien = DataPasien::findFirstByno_rm($d->no_rm); ?>
        <td>{{ pasien.nama_pasien }}</td>
        <?php $dokter = Dokter::findFirstBynik($d->id_dokter); ?>
        <td>{{ dokter.nama }}</td>
        <td>{{d.diagnosa}}</td>
        <td>{{ d.tanggal }}</td>
        <td>
          {% if session.nik == d.id_dokter %}
          <button id="edit" class="btn btn-warning btn-sm m-r-xs" data-toggle="modal"
          data-target="#myModal{{ d.id_diagnosa }}"><i class="material-icons">edit</i></button>
          {% elseif session.level_pengguna == 'admin' %}
          <button id="edit" class="btn btn-warning btn-sm m-r-xs" data-toggle="modal"
          data-target="#myModal{{ d.id_diagnosa }}"><i class="material-icons">edit</i></button>
          <button id="delete" class="btn btn-danger btn-sm m-r-xs" data-toggle="modal"
          data-target="#modalHapus{{ d.id_diagnosa }}"><i class="material-icons">delete</i></button>

          {% endif %}

        </td>
      </tr>

    <div class="modal fade" id="modalHapus{{ d.id_diagnosa }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ static_url('Dokter/dltdiagnosa')}}" method="POST">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Menghapus Data</h4>
                    </div>
                    <div class="modal-body">
                        Yakin untuk menghapus data?
                        <input type="hidden" name="id" value="{{ d.id_diagnosa }}">
                    </div>
                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>-->
                        <button type="submit" name="delete-data" class="btn btn-danger btn-ok" role="button">Hapus</button></td>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
      
      <div class="modal fade" id="myModal{{ d.id_diagnosa }}" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <form action="{{ static_url('Dokter/editdiagnosa1/')}}{{d.id_diagnosa}}" method="POST">
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
                    <textarea class="form-control" name="diagnosa">{{d.diagnosa}}</textarea>
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
  {% endfor %}
</tbody>
</table>
</div>

