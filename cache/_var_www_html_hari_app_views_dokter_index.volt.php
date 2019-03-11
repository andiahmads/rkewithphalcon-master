
<div class="card-collapsed">
    <button class="btn btn-microsoft btn-lg btn-icon m-b-1" data-toggle="modal" data-target=".bd-example-modal"><i class="material-icons">
        library_add
    </i>
    <span>Tambah Dokter</span>
</button>
</div>


<?php $this->flashSession->output(); ?>
<div class="card-header bg-blue"><b><strong>Dokter</strong></b></div>
<div class="card">
   
  <div class="card-block">


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
            gender
        </th>
        <th>
            alamat
        </th>
        <th>
            poly
        </th>
        <th>
            Telepone
        </th>
        <th>Action
        </th>

    </tr>
</thead>
<tbody>
    <div class="list_pengguna"></div>
    <?php foreach ($dokter as $d) { ?>
    <tr>
        <td><?= $d->nik ?></td>
        <td><?= $d->nama ?></td>
        <td><?= $d->gender ?></td>
        <td><?= $d->alamat ?></td>
        <td><?= $d->poly ?></td>
        <td><?= $d->tlp ?></td>
        <td align="center">
            <button id="edit" class="btn btn-warning btn-sm m-r-xs" data-toggle="modal"
            data-target="#myModal<?= $d->nik ?>"><i class="material-icons">edit</i></button>
            <button id="hapus" class="btn btn-danger btn-sm m-r-xs" data-toggle="modal"
            data-target="#modalHapus<?= $d->nik ?>"><i class="material-icons">delete</i></button>
        </td>
    </td>
</tr>

<div class="modal fade" id="modalHapus<?= $d->nik ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="pengguna/delete" method="POST">
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
        <form action="pengguna/update" method="POST">
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
                                    <input type="text" name="nik"
                                    value="<?= $d->username ?>"
                                    class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="">Nama :</label>
                                    <input type="text " name="nama"
                                    value="<?= $d->nama ?>"
                                    class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Username :</label>
                                    <input type="text " name="username"
                                    value="<?= $d->username ?>"
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
        </form>
    </div>

</div>
</div>
</div>


</div>
</div>

</div><?php } ?>
</tbody>

</table>

</div>
</div>


<div class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title " id="myModalLabel">Insert Dokter</h4>
    </div>
    <div class="modal-body">
      <form action="<?= $this->url->getStatic('Dokter/save') ?>" method="POST">
        <div class="form-group">
          <label >Nama</label>
          <select class="form-control" required="" name="nama">
            <option>  </option>
            <?php foreach ($pengguna as $da) { ?>
            <?php if ($da->level_pengguna == 'dokter') { ?>

            
            <option> <?= $da->nama ?> </option>
            
            <?php } ?>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
      <label >Gender</label>
      <select class="form-control" name="gender" required="" >
        <option>Laki-Laki</option>
        <option>Perempuan</option>
    </select>
</div>
<div class="form-group">
    <label>Alamat</label>
    <input class="form-control" type="text" name="alamat" placeholder="Enter Alamat"></input>
</div>
<div class="form-group">
    <label>Telephone</label>
    <input type="number" name="tlp" class="form-control" placeholder="Enter Number Telephone"></input>
</div>
<div class="form-group">
    <label>poly</label>
    <select class="form-control" name="poly">
        <option>  </option>
        <option> Kejiwaan </option>
        <option> VCT </option>
        <option> Gigi </option>
        <option> Penyakit Dalam </option>
        <option> Tumbuh Kembang </option>
        <option> Psikiater </option>
        <option> Forensik </option>
    </select>
</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Save changes</button>
</div>

</form>
</div>
</div>
</div>
