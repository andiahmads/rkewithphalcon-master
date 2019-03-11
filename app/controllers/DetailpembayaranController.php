<?php

class DetailpembayaranController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {


        $lunas = PasienBerobat::findBystatus('lunas');
        $this->view->lunas=$lunas;
        $this->view->pick('kasir/history');

    }
    public function detailAction($idberobat)
    {

      $berobat = PasienBerobat::findFirstByid_berobat($idberobat);
      $no_rm = $berobat->no_rm;
      $pasien = DataPasien::findFirstByno_rm($no_rm);
      $this->view->data=$pasien;
      $data = PasienBerobat::findByid_berobat($idberobat);
      $this->view->datas=$data;
      $this->view->pick('kasir/detailpembayaran');


      }

      public function updateAction($id_berobat)
      {
        $update = PasienBerobat::findFirstByid_berobat($id_berobat);
        $update->status = 'lunas';

        $this->session->set('st','lunas');

        if(!$update->save()) {
          $this->flashSession->error('status gagal dikonfirmasi');
          return $this->response->redirect('');
        }
        else{
          $this->flashSession->success('status berasil di konfirmasi');
          return $this->response->redirect('Detailpembayaran/detail/'.$id_berobat);
        }

      }
      public function berobatAction(){
        $this->view->pick('kasir/bayarberobat');
      }




}
