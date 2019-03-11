<?php

class PendaftaranController extends \Phalcon\Mvc\Controller
{

    public function insertAction()
    {
    	 $pasien = new DataPasien();
         $pasien->no_rm = $this->request->getPost("no-rm");
         $pasien->nama_pasien = $this->request->getPost("nama-pasien");
         $pasien->tanggal_lahir = $this->request->getPost("tanggal");
         $pasien->jenis_kelamin = $this->request->getPost("tes");
         $pasien->agama = $this->request->getPost("agama");
         $pasien->status = $this->request->getPost("status_pasien");
         $pasien->pendidikan = $this->request->getPost("pendidikan");
         $pasien->pekerjaan = $this->request->getPost("work");
         $pasien->bahasa_sehari = $this->request->getPost("bahasa");
         $pasien->nama_ayah = $this->request->getPost("ayah");
         $pasien->nama_ibu = $this->request->getPost("ibu");
         $pasien->budaya_suku = $this->request->getPost("suku");
         $pasien->alamat = $this->request->getPost("alamat");
         $pasien->rt = $this->request->getPost("rt");
         $pasien->rw = $this->request->getPost("rw");
         $pasien->no_telpon = $this->request->getPost("telpon");
         $pasien->perubahan_alamat = $this->request->getPost("alamat1");
         $pasien->nama_wali1 = $this->request->getPost("wali-1");
         $pasien->nama_wali2 = $this->request->getPost("wali-2");
         $pasien->hubungan = $this->request->getPost("hubungan");
         $pasien->telpn_wali = $this->request->getPost("no-wali");

       if (!$pasien->save()) {
            $this->flashSession->error('Data gagal Disimpan');
            return $this->response->redirect('');
  }
  else
  {
            $this->flashSession->success('data berasil di simpan');
             return $this->response->redirect('');
  }
         }


         public function detailAction($no_rm){
            $pasien = DataPasien::findFirstByno_rm($no_rm);
            $this->view->data=$pasien;



            $this->view->pick('pasien/detailpasien');

         }

         public function updateAction($no_rm)
         {
         $pasien = DataPasien::findFirstByno_rm($no_rm);

         $id = $no_rm;
         $pasien->nama_pasien = $this->request->getPost("nama-pasien");
         $pasien->tanggal_lahir = $this->request->getPost("tanggal");

         $pasien->jenis_kelamin = $this->request->getPost("tes");
         $pasien->agama = $this->request->getPost("agama");
         $pasien->status = $this->request->getPost("status_pasien");
         $pasien->pendidikan = $this->request->getPost("pendidikan");
         $pasien->pekerjaan = $this->request->getPost("work");
         $pasien->bahasa_sehari = $this->request->getPost("bahasa");
         $pasien->nama_ayah = $this->request->getPost("ayah");
         $pasien->nama_ibu = $this->request->getPost("ibu");
         $pasien->budaya_suku = $this->request->getPost("suku");
         $pasien->alamat = $this->request->getPost("alamat");
         $pasien->rt = $this->request->getPost("rt");
         $pasien->rw = $this->request->getPost("rw");
         $pasien->no_telpon = $this->request->getPost("telpon");
         $pasien->perubahan_alamat = $this->request->getPost("alamat1");
         $pasien->nama_wali1 = $this->request->getPost("wali-1");
         $pasien->nama_wali2 = $this->request->getPost("wali-2");
         $pasien->hubungan = $this->request->getPost("hubungan");
         $pasien->telpon_wali = $this->request->getPost("no-wali");


          if (!$pasien->save()) {
            $this->flashSession->error('Data gagal Disimpan');
            return $this->response->redirect('');
  }

         else
  {
            $this->flashSession->success('data berasil di simpan');
            return $this->response->redirect('');
  }
}


      public function ubahAction($id_berobat){

        $update = PasienBerobat::findFirstByid_berobat($id_berobat);
        $update->nik = $this->request->getPost('nama-dokter');
        $update->poly = $this->request->getPost('poly');

        if (!$update->save()){

        $this->flashSession->error('data gagal di update');
        return $this->response->redirect('');
      } else{
        $this->flashSession->success('data berasil di ubah');
        return $this->response->redirect('');
      }
        }








         }
