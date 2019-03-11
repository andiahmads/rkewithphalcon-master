<?php $this->flashSession->output(); ?>
<div class="card-header bg-blue"><b><strong>Asesmen Hari Ini</strong></b></div>
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
                                <td>

                                <a href="{{static_url('Asesmen/editasesmen/')}}{{d.id_asesmen}}/{{d.no_rm}}/1" class="btn btn-warning btn-sm"><i class="material-icons">edit</i></a>
                                    </td>
                            </tr>
                            {% endfor %}
                    </tbody>
                  </table>
                </div>

