<?php $this->flashSession->output(); ?>
<div class="card-header bg-blue"><b><strong>Data Asesmen</strong></b></div>
<div class="card card-block">
             

                <table  class="table table-bordered datatable">

                  <thead >
                    <tr>
                      <th>
                        ID Asesmen
                      </th>
                      <th>
                        No. RM
                      </th>
                      <th>Nama Pasien</th>
                      <th>
                        Nama Perawat
                      </th>
                      <th>Nama Dokter</th>
                        <th>Action
                        </th>
                    </tr>
                  </thead>
                    <tbody>
                        <div class="list_pengguna"></div>
                        {% for d in data %}
                            <tr>
                                <td>{{ d.id_asesmen }}</td>
                                <td>{{ d.no_rm }}</td>
                                <?php $pasien = DataPasien::findFirstByno_rm($d->no_rm); ?>
                                <td>{{ pasien.nama_pasien}}</td>
                                <?php $pengguna = Pengguna::findFirstBynik($d->id_perawat); ?>
                                <td>{{ pengguna.nama }}</td>
                                <?php $pengguna = Pengguna::findFirstBynik($d->id_dokter); ?>
                                <td>{{ pengguna.nama }}</td>
                                <td>

                               <a href="{{static_url('Asesmen/editasesmen/')}}{{d.id_asesmen}}/{{d.no_rm}}" class="btn btn-warning btn-sm"><i class="material-icons">edit</i></a>
                               {% if session.level_pengguna == 'admin' %}
          
          <button id="edit" class="btn btn-danger btn-sm m-r-xs" data-toggle="modal"
          data-target="#modalHapus{{ d.id_asesmen }}"><i class="material-icons">delete</i></button>

          {% endif %}
                                </td>
                            </tr>
                              <div class="modal fade" id="modalHapus{{ d.id_asesmen }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ static_url('Asesmen/dltasesmen')}}" method="POST">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Menghapus Data</h4>
                    </div>
                    <div class="modal-body">
                        Yakin untuk menghapus data?
                        <input type="hidden" name="id" value="{{ d.id_asesmen }}">
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
                            {% endfor %}
                    </tbody>
                  </table>
                </div>

