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
                        <?= $date ?>
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
                    <div class="overflow-hidden" value="<?= $data->no_rm ?>">
                      <p class="m-b-0">
                        <strong>No RM:
                          7777
                        </strong>
                      </p>
                      <p class="m-b-0">Nama Pasien:
                        Alwi Fadli Siregar
                      </p>
                      <p class="m-b-0">Nomor Telepon:
                        081289xxxxx
                      </p>
                      <p class="m-b-0">

                      </p>
                      <p class="m-b-0">ALamat:
                        jalan yang terbaik
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
                            obat
                          </th>
                          <th>
                            tanggal berobat
                          </th>
                          <th> Status Pembayaran</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td>
                            7777
                          </td>
                          <td>
                          roy
                          </td>
                          <td>
                            kejiwaan
                          </td>
                          <td>
                            paramex 1 rp =10.000
                            bodrex 1 rp=10.000
                            autan 1 rp=10.000
                            mixagrip 1 rp=10.000
                          </td>
                          <td>
                            2018-03-1
                          </td>
                          <td>
                          Belum Lunas
                          </td>


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
                        50.0000
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


                  <a href="<?= $this->url->getStatic('detailpembayaran/update/') ?> <?= $datas->id_berobat ?>" name="konfirmasi" class="btn btn-info btn-icon btn-sm " value="lunas"  href="javascript:;" title="tombol ini berguna untuk konfirmasi status pasien">
                    <i class="material-icons">check</i>
                    Konfirmasi
                  </a>

                </div>
              </div>
