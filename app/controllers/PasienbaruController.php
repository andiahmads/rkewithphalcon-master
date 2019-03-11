<?php

class PasienbaruController extends \Phalcon\Mvc\Controller
{


    public function insertAction(){
      $total = 15000;
      $tgl = date('Y-m-d');
      $pasienbaru = new PasienBerobat();
      $pasienbaru->no_rm= $this->request->getPost('no-rm');
      $pasienbaru->nik= $this->request->getPost('nama-dokter');
      $pasienbaru->poly= $this->request->getPost('poly-berobat');
      $pasienbaru->tanggal_berobat= $tgl;
      $pasienbaru->total_pembayaran= $total;


      if(!$pasienbaru->save()){
        $this->flashSession->error('data gagal Disimpan');
        return $this->response->redirect('');

      }
      else {
        $this->flashSession->success('data berasil disimpan');
        return $this->response->redirect('');

      }




    }


}
