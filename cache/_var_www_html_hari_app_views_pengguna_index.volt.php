
<div class="card-collapsed">
    <button class="btn btn-microsoft btn-lg btn-icon m-b-1" data-toggle="modal" data-target=".bd-example-modal"><i class="material-icons">
        library_add
    </i>
    <span>Tambah pengguna</span>
</button>
</div>


<?php $this->flashSession->output(); ?>
<div class="card-header bg-blue"><b><strong>Pengguna</strong></b></div>
<div class="card card-block">
   

    <table  class="table table-bordered datatable">

      <thead >
        <tr>
          <th>
            NIK
        </th>
        <th>
            nama
        </th>
        <th>
            level user
        </th>
        <th>Action
        </th>
    </tr>
</thead>
<tbody>
    <div class="list_pengguna"></div>
    <?php foreach ($data as $d) { ?>
    <tr>
        <td><?= $d->nik ?></td>
        <td><?= $d->nama ?></td>
        <td><?= $d->level_pengguna ?></td>
        <td >
            <?php if ($d->level_pengguna == 'admin') { ?>
            <?php if ($d->nik == $this->session->nik) { ?>
            
            <button id="edit" class="btn btn-warning btn-sm m-r-xs" data-toggle="modal"
            data-target="#myModal<?= $d->nik ?>"><i class="material-icons">edit</i></button>
            <?php } ?>
            <?php } else { ?>
            <button id="edit" class="btn btn-warning btn-sm m-r-xs" data-toggle="modal"
            data-target="#myModal<?= $d->nik ?>"><i class="material-icons">edit</i></button>
            <button id="hapus" class="btn btn-danger btn-sm m-r-xs" data-toggle="modal"
            data-target="#modalHapus<?= $d->nik ?>"><i class="material-icons">delete</i></button>
            <?php } ?>
        </td>
    </tr>

    <div class="modal fade" id="modalHapus<?= $d->nik ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="Pengguna/delete" method="POST">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Menghapus Data</h4>
                    </div>
                    <div class="modal-body">
                        Yakin untuk menghapus data?
                        <input type="hidden" name="nik" value="<?= $d->nik ?>">
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

    <div class="modal fade" id="myModal<?= $d->nik ?>" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form action="Pengguna/update" method="POST">
             <div class="card">
                <div class="card-header bg-primary" data-background-color="purple">
                    <button type="button" class="close" data-dismiss="modal">&times;
                    </button>
                    <h4 class="modal-title">Edit Data</h4>
                </div>
                <div class="card-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-body">
                                    <input type="hidden" name="id"
                                    value="<?= $d->nik ?>">
                                    <div class="form-group">
                                        <label for="">NIK :</label>
                                        <input type="text" name="nikk"
                                        value="<?= $d->nik ?>"
                                        class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama :</label>
                                        <input type="text " name="nama"
                                        value="<?= $d->nama ?>"
                                        class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password :</label>
                                        <input type="Password " name="password"
                                        value="<?= $d->password ?>"
                                        class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Hak Akses</label>
                                    <select name="level_pengguna"  class="form-control">
                                        <?php if ($d->level_pengguna == 'admin') { ?>
                                        <option>
                                            admin
                                        </option>
                                        <option>
                                            dokter
                                        </option>
                                        <option>
                                            apoteker
                                        </option>
                                        <option>
                                            pendaftaran
                                        </option>
                                        <option>
                                            kasir
                                        </option>
                                        <option>
                                            lab
                                        </option>
                                        <option>
                                            analisa
                                        </option>
                                        <?php } elseif ($d->level_pengguna == 'dokter') { ?>
                                        <option>
                                            dokter
                                        </option>
                                        <option>
                                            admin
                                        </option>
                                        <option>
                                            apoteker
                                        </option>
                                        <option>
                                            pendaftaran
                                        </option>
                                        <option>
                                            kasir
                                        </option>
                                        <option>
                                            lab
                                        </option>
                                        <option>
                                            analisa
                                        </option>
                                        <?php } else { ?>
                                        <option>
                                            apoteker
                                        </option>
                                        <option>
                                            admin
                                        </option>
                                        <option>
                                            dokter
                                        </option>
                                        <option>
                                            pendaftaran
                                        </option>
                                        <option>
                                            kasir
                                        </option>
                                        <option>
                                            lab
                                        </option>
                                        <option>
                                            analisa
                                        </option>
                                        <?php } ?>

                                        
                                    </select>
                                </div>
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

<?php } ?>
</tbody>

</table>
</div>




<div class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <h4 class="modal-title " id="myModalLabel">Tambah Pengguna</h4>
                
            </div>
            <div class="modal-body">
                <form action="Pengguna/create"class="form-horizontal"method="POST">
                    <div class="form-group">
                        <label class='col-md-2'>Nik/Userid:</label>
                        <div class='col-md-9'><input type="text" name="nik" autocomplete="off" required placeholder="Enter nik" class="form-control m-b-1" ></div>
                    </div>
                    <div class="form-group">
                        <label class='col-md-2'>Password:</label>
                        <div class='col-md-9'><input type="password" name="password" autocomplete="off" required placeholder="Enter Password" class="form-control m-b-1" ></div>
                    </div>
                    <div class="form-group">
                        <label class='col-md-2'>Nama:</label>
                        <div class='col-md-9'><input type="text" name="nama" autocomplete="off" required placeholder="Enter Name" class="form-control m-b-1" ></div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2">level user:</label>
                        <div class="col-md-9">
                            <select id="level_user" name="level" class="form-control m-b-1"> 
                                <option>
                                    admin
                                </option>
                                <option>
                                    dokter
                                </option>
                                <option>
                                    apoteker
                                </option>
                                <option>
                                    pendaftaran
                                </option>
                                <option>
                                    kasir
                                </option>
                                <option>
                                    lab
                                </option>
                                <option>
                                    analisa
                                </option>
                                
                            </select>
                        </div>

                    </div>
                    <div class="">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="add" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                <br>
            </div>

        </div>
    </div>
</div>


