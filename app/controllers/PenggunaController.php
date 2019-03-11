<?php

class PenggunaController extends ControllerBase
{

    public function indexAction()
    {

        $user = Pengguna::find(['oder'=>'nik']);
        $this->view->data=$user;




    }


   public function createAction(){
    $user = new Pengguna();
        $user->nik = $this->request->getPost("nik") ;
        $user->username = $this->request->getPost("username");
        $user->password =md5($this->request->getPost("password"));
        $user->nama = $this->request->getPost("nama");
        $user->level_pengguna = $this->request->getPost("level");
        $user->poly= $this->request->getPost("poly"); 
        $user->save();        
        $this->response->redirect('pengguna');
       

    }
    public function updateAction()
    {
        $a = $this->request->getPost('id');
        $pengguna = Pengguna::findFirstBynik($a);
        
        $pengguna->nik = $this->request->getPost('nikk');
        $pengguna->password = $this->request->getPost('password');
        $pengguna->nama = $this->request->getPost('nama');
        $pengguna->level_pengguna = $this->request->getPost('level_pengguna');
        
        if (!$pengguna->save()) {
            $this->view->disable();
            $this->flash->error('tidak dapat mengubah data');
            $this->response->redirect('pengguna');
        }
        else
        {
            $this->view->disable();
            $this->flashSession->success('Berhasil mengubah data');
            $this->response->redirect('pengguna');
        }
    }

    public function deleteAction(){
        $nik = $this->request->getPost('nik');
        
        $pdelete=Pengguna::findFirstBynik($nik);

        if ($pdelete->delete()) {
           $this->view->disable();
           $this->flashSession->success('Data Berhasil Dihapus');
           $this->response->redirect('pengguna');
        }else{
            $this->view->disable();
           $this->flashSession->error('gagal');
           $this->response->redirect('pengguna');
        }

    }


    public function laporanAction()
    {
        $pasien = DataPasien::find();
        $this->view->pasien=$pasien;
        $pb = PasienBerobat::findBystatus('lunas');
        $this->view->pb=$pb;
        $diagnosa = Diagnosa::find();
        $this->view->diagnosa=$diagnosa;
        $asesmen = Asesmen::find();
        $this->view->asesmen=$asesmen;

        $this->view->pick('admin/laporan');
    }


}

?>