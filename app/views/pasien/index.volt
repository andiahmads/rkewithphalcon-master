
<div class="card">

<div class="card-block">

<table class="table table-bordered datatable">

            <thead>
            <tr>
            <th>
            Nomor Rekam Medis
            </th>
            <th>
            Nama Pasien
            </th>
            <th>
            Tanggal Lahir
            </th>
            <th>
            Nama Orang Tua
            </th>
            <th>Action
            </th>

            </tr>
            </thead>
            <tbody>

            {% for datas in pasien %}

            <tr>
            <td>{{ datas.no_rm }}</td>
            <td>{{ datas.nama_pasien }}</td>
            <td>{{ datas.tanggal_lahir }}</td>
            <td>{{ datas.nama_ayah }}</td>
            <td>
              <a href="Pendaftaran/detail/{{datas.no_rm }}" class="btn btn-info  m-r-xs m-b-xs btn-sm"><i class="material-icons"> perm_identity </i>Detail </a>
              <a href="" class="btn btn-danger m-r-xs m-b-xs btn-sm"><i class="material-icons">delete </i>Delete</a>



            </td>



            </tr>

            {% endfor %}


            </tbody>

            </table>
            </div>


</div>
