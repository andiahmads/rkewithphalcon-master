<?php $date = date('l, d-M-Y H:i-a')    ?>
<div class="main-content">
          <div class="content-view">
            <div class="card">
              <div class="card-block">
                <div class="p-b-2 clearfix">
                  <div class="pull-right text-xs-right">
                    <h5 class="bold m-b-0">
                      Bukti Pembayaran:
                    </h5>

                    <p class="m-b-0">

                    </p>
                    <p class="m-b-0">
                      {{date}}
                    </p>
                  </div>
                  <div class="circle-icon bg-success text-white m-r-1">
                    <i class="material-icons">
                      archive
                    </i>
                  </div>
                  <div class="overflow-hidden">
                    <p class="m-b-0">
                      RS Tampan Riau
                    </p>
                    <p class="m-b-0">
                       rstampan@yahoo.com
                    </p>
                    <p class="m-b-0">
                      Telp. (0761) 63240 fax. (0761) 63239
                    </p>
                  </div>
                </div>
                <div class="p-t-2 p-b-2 clearfix">
                    <img src="images/avatar.jpg" class="avatar avatar-xs img-circle m-r-1 pull-left" alt="Detail:" title="pasien"/>
                  <div class="overflow-hidden" value="{{ data.no_rm }}">
                    <p class="m-b-0">
                      <strong>No RM:
                        {{ data.no_rm }}
                      </strong>
                    </p>
                    <p class="m-b-0">Nama Pasien:
                      {{ data.nama_pasien  }}
                    </p>
                    <p class="m-b-0">Nomor Telepon:
                      {{ data.no_telpon  }}
                    </p>
                    <p class="m-b-0">

                    </p>
                    <p class="m-b-0">ALamat:
                      {{ data.alamat }}
                    </p>
                  </div>
                </div>
                <div class="table-responsive p-t-2 p-b-2">
                  <table class="table table-bordered m-b-0">
                    <thead>
                      <tr>
                        <th>
                          Nomor Rekamemdis
                        </th>
                        <th>
                          Nama Dokter
                        </th>
                        <th>
                          Poly
                        </th>
                        <th>
                          tanggal berobat
                        </th>
                        <th> Status Pembayaran</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        {% for datas in datas %}
                        <td>
                          {{ datas.no_rm }}
                        </td>
                        <td>
                          <?php $tes = Dokter::findFirstBynik($datas->nik); ?>

                          {{ tes.nama }}
                        </td>
                        <td>
                          {{ datas.poly }}
                        </td>
                        <td>
                          {{ datas.tanggal_berobat }}
                        </td>
                        <td>
                          {{ datas.status }}
                        </td>
{% endfor %}
                      </tr>



                    </tbody>
                  </table>
                </div>
                <div class="invoice-totals p-t-2 p-b-2">
                  <div class="invoice-totals-row">
                    <strong class="invoice-totals-title">
                      Total Pembayaran Rp =
                    </strong>
                    <span class="invoice-totals-value">
                      {{ datas.total_pembayaran }}
                    </span>
                  </div>

                </div>
                <small class="p-t-2">
                  <strong>
                    PAYMENT TERMS AND POLICIES
                  </strong>
                  All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be chargeKuitansi                  quoted fee noted above. If the Invoice remails unpaid. our dept recovery agency, Urban, may charge you a fee of 25% of the unpaid portion of the
                  invoice amount and other legal and collection costs not covered by the fee.
                </s
                mall>
              </div>
              <div class="card-footer text-xs-right">
                {% if session.st == null %}
                <a href="{{static_url('detailpembayaran/update/')}} {{ datas.id_berobat }}" name="konfirmasi" onclick="window.popup();"  class="btn btn-info btn-icon btn-sm " value="lunas"  href="javascript:;" title="tombol ini berguna untuk konfirmasi status pasien">
                  <i class="material-icons">check</i>
                  Konfirmasi
                </a>
                {% else %}
                <a href="#" name="konfirmasi" onclick="window.print();" class="btn btn-info btn-icon btn-sm " value="lunas"  href="javascript:;" title="tombol ini berguna untuk konfirmasi status pasien">
                  <i class="material-icons">check</i>
                  print
                </a>
                {% endif %}

              </div>
            </div>

{% if session.st != null %}
<?php $this->session->remove('st') ?>
{% endif %}
