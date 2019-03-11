<?php
use Phalcon\Mvc\Controller;
use Phalcon\Mcv\View;

class AuthController extends ControllerBase
{
    public function loginAction()
    {
    }

    public function loginprosesAction()
    {
        $nik = $this->request->getPost('nik');
        $password = $this->request->getPost('password');
        $password = md5($password);
        $pengguna = Pengguna::findFirstByNik($nik);
        if ($pengguna) {
            if ($nik == $pengguna->nik && $password == $pengguna->password) {
                $this->session->set('nik', $pengguna->nik);
                $this->session->set('level_pengguna', $pengguna->level_pengguna);
                $this->session->set('nama', $pengguna->nama);
                $this->session->set('poly', $pengguna->poly);
                
                return $this->response->redirect('');
            } elseif ($nik != $pengguna->nik || $password != $pengguna->password) {
                $this->flashSession->notice('Nik Password Tidak Benar');
                return $this->response->redirect('');
            }
        } else {
            $this->flashSession->error('Nik Atau Password Tidak Ada');
            return $this->response->redirect('');
        }
    }

    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect('masuk');
    }

    public function daftarAction(){
        $this->view->pick('auth/daftar');
    }

}
