<?php

class ProfileController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	if ($this->session->get('level_pengguna') == 'dokter') {
    		# code...
    	$sql = Pengguna::findFirstBynik($this->session->get('nik'));
    	$this->view->pengguna=$sql;

    	$sql1 = Dokter::findFirstBynik($this->session->get('nik'));
    	$this->view->dokter=$sql1;
    	
    	}else{

    		
    	}
    	$this->view->pick('profile/index');

    	
    }
    public function penggunaAction()
    {
        $sql = Pengguna::findFirstBynik($this->session->get('nik'));

        $sql->password = md5($this->request->getPost('password'));

        if ($sql->save()) {
            $this->view->disable();
            $this->flashSession->success('Password Berhasil Diubah');
            $this->response->redirect('Profile');
        }
        else {
            $this->view->disable();
            $this->flash->error('Gagal Mengubah Password');
            $this->response->redirect('Profile');
        }
        
    }

    public function updateAction()
    {

        $dokter = Dokter::findFirstBynik($this->session->get('nik'));
        
        $dokter->nama = $this->request->getPost('nama');
        $dokter->gender = $this->request->getPost('gender');
        $dokter->alamat = $this->request->getPost('alamat');
        $dokter->poly = $this->request->getPost('poly');
        
        if (!$dokter->save()) {
            $this->view->disable();
            $this->flashSession->error('tidak dapat mengubah data');
            $this->response->redirect('');
        }
        else
        {
            $this->view->disable();
            $this->flashSession->success('Berhasil mengubah data');
            $this->response->redirect('profile');
        }  
    }
    

}

