<?php

class GuideController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	if ($this->session->get('level_pengguna') == 'dokter') {
    		# code...
            $poly = $this->session->get('poly');
            $nik = $this->session->get('nik');
		     $pb = PasienBerobat::finddokter($poly,'1',$nik);
             $tampil = $this->modelsManager->executeQuery($pb);

		     $this->view->data=$tampil;

    	}
    	elseif ($this->session->get('level_pengguna') == 'perawat') {
    		# code...
    		$pb = PasienBerobat::findperawat($this->session->get('poly'),'0');
            $tampil = $this->modelsManager->executeQuery($pb);
    		$this->view->data=$tampil;
    		
    	}
        elseif ($this->session->get('level_pengguna') == 'pendaftaran') {

      $pasien = DataPasien::find();
      $this->view->pasien=$pasien;
      $dokter = Dokter::find();
      $this->view->dokter=$dokter;
      $berobat = PasienBerobat::find(['order'=>'tanggal_berobat DESC ']);
      $this->view->pasienbaru=$berobat;
      $dokter = Dokter::find();
      $this->view->dok=$dokter;

      } elseif($this->session->get('level_pengguna') == 'kasir'){

      $bayar = PasienBerobat::findBystatus('belum_lunas');
      $this->view->bayar=$bayar;

      }
     
     $this->view->pick('guide/index');

    }

    

    


}

