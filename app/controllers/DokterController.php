<?php

class DokterController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    	$sql1 = Pengguna::find();
        $this->view->pengguna=$sql1;

        $sql = Dokter::find();
        $this->view->dokter=$sql;

        $this->view->pick('dokter/index');
    }

    public function saveAction(){


         $pengguna = Pengguna::findFirstBynama($this->request->getPost('nama'));
         
         $user = new Dokter();
        $user->nik = $pengguna->nik;
        $user->nama = $this->request->getPost("nama");
        $user->gender = $this->request->getPost("gender");
        $user->alamat = $this->request->getPost("alamat");
        $user->poly = $pengguna->poly;
        $user->tlp = $this->request->getPost("tlp");
        
         $user->save();        
         $this->response->redirect('dokter');
       

    
    }

    public function deleteAction(){
        $nik = $this->request->getPost('nik');
        
        $pdelete=Dokter::findFirstBynik($nik);

        if ($pdelete->delete()) {
           $this->view->disable();
           $this->flashSession->success('Data Berhasil Dihapus');
           $this->response->redirect('dokter');
        }else{
            $this->view->disable();
           $this->flashSession->error('gagal');
           $this->response->redirect('dokter');
        }

    }

    public function updateAction()
    {
         $nik = $this->request->getPost('nik');
        $dokter = Dokter::findFirst($nik);
        
        $dokter->nama = $this->request->getPost('nama');
        $dokter->gender = $this->request->getPost('gender');
        $dokter->poly = $this->request->getPost('poly');
        $dokter->alamat = $this->request->getPost('alamat');
        
        if (!$dokter->save()) {
            $this->view->disable();
            $this->flash->success('tidak dapat mengubah data');
            $this->response->redirect('');
        }
        else
        {
            $this->view->disable();
            $this->flashSession->error('Berhasil mengubah data');
            $this->response->redirect('profile');
        }  
    }

    public function pasienAction($no_rm,$idberobat)
    {   
        $pasienbaru = PasienBerobat::findFirstByid_berobat($idberobat);
        $this->view->pb=$pasienbaru;
        
        $pasien = DataPasien::findFirstByno_rm($no_rm);
        $this->view->data=$pasien;
        $this->view->pick('dokter/pasien');
        
    }

    public function asesmenAction($idberobat)
    {
        if ($this->session->get('poly') == 'gigi') {
            # code...
            $asesmen = Asesmen::findFirstByid_berobat($idberobat);
            $this->view->data=$asesmen;           
            $this->view->pick('dokter/asesmengigi');

        } elseif ($this->session->get('poly') == 'VCT') {
            # code...
            $this->view->pick('dokter/asesmenVCT');
        }
    }

    public function datamedikAction($id_asesmen,$idberobat)
    {
        
        $asesmengigi = Asesmen::findFirstByid_asesmen($id_asesmen);

        $asesmengigi->id_dokter = $this->session->get('nik');
        $asesmengigi->golongandarah = $this->request->getPost('golongandarah');
        $asesmengigi->tekanandarah1 = $this->request->getPost('tekanandarah1');
        $asesmengigi->tekanandarah2 = $this->request->getPost('tekanandarah2');
        $asesmengigi->tekanandarah = $this->request->getPost('tekanandarah');
        $asesmengigi->tekananjantung = $this->request->getPost('tekananjantung');
        $asesmengigi->tjket = $this->request->getPost('tjket');
        $asesmengigi->diabetes = $this->request->getPost('diabetes');
        $asesmengigi->diabetesket = $this->request->getPost('diabetesket');
        $asesmengigi->oklusi = $this->request->getPost('oklusi');
        $asesmengigi->toruspalatinus = $this->request->getPost('toruspalatinus');
        $asesmengigi->torusmandibularis = $this->request->getPost('torusmandibularis');
        $asesmengigi->palatum = $this->request->getPost('palatum');
        $asesmengigi->supernumerary = $this->request->getPost('supernumerary');
        $asesmengigi->supernumeraryket = $this->request->getPost('supernumeraryket');
        $asesmengigi->Diastema = $this->request->getPost('Diastema');
        $asesmengigi->Diastemaket = $this->request->getPost('Diastemaket');
        $asesmengigi->Gigianomali = $this->request->getPost('Gigianomali');
        $asesmengigi->Gigianomaliket = $this->request->getPost('Gigianomaliket');
        $asesmengigi->lain = $this->request->getPost('lain');
        $asesmengigi->Keterangan = $this->request->getPost('Keterangan');
        $asesmengigi->g18 = $this->request->getPost('18');
        $asesmengigi->g28 = $this->request->getPost('28');
        $asesmengigi->g38 = $this->request->getPost('38');
        $asesmengigi->g48 = $this->request->getPost('48');
        $asesmengigi->g17 = $this->request->getPost('17');
        $asesmengigi->g27 = $this->request->getPost('27');
        $asesmengigi->g37 = $this->request->getPost('37');
        $asesmengigi->g47 = $this->request->getPost('47');
        $asesmengigi->g16 = $this->request->getPost('16');
        $asesmengigi->g26 = $this->request->getPost('26');
        $asesmengigi->g36 = $this->request->getPost('36');
        $asesmengigi->g46 = $this->request->getPost('46');
        $asesmengigi->g15g55 = $this->request->getPost('15/55');
        $asesmengigi->g25g65 = $this->request->getPost('25/65');
        $asesmengigi->g35g75 = $this->request->getPost('35/75');
        $asesmengigi->g45g85 = $this->request->getPost('45/85');
        $asesmengigi->g14g54 = $this->request->getPost('14/54');
        $asesmengigi->g24g64 = $this->request->getPost('24/64');
        $asesmengigi->g34g74 = $this->request->getPost('34/74');
        $asesmengigi->g44g84 = $this->request->getPost('44/84');
        $asesmengigi->g13g53 = $this->request->getPost('13/53');
        $asesmengigi->g23g63 = $this->request->getPost('23/63');
        $asesmengigi->g33g73 = $this->request->getPost('33/73');
        $asesmengigi->g43g83 = $this->request->getPost('43/83');
        $asesmengigi->g12g52 = $this->request->getPost('12/52');
        $asesmengigi->g22g62 = $this->request->getPost('22/62');
        $asesmengigi->g32g72 = $this->request->getPost('32/72');
        $asesmengigi->g42g82 = $this->request->getPost('42/82');
        $asesmengigi->g11g51 = $this->request->getPost('11/51');
        $asesmengigi->g21g61 = $this->request->getPost('21/61');
        $asesmengigi->g31g71 = $this->request->getPost('31/71');
        $asesmengigi->g41g81 = $this->request->getPost('41/81');

        
        $id_pasien = $asesmengigi->no_rm;
        if ($asesmengigi->save()) {
            # code...
            $this->view->disable();
            $this->flashSession->success('Data Berhasil Disimpan');
            $this->response->redirect('dokter/pasien/'.$id_pasien.'/'.$idberobat);
        } else {
            $this->view->disable();
            $this->flashSession->error('Data Tidak Tersimpan');
            $this->response->redirect('dokter/pasien/'.$id_pasien.'/'.$idberobat);
        
        }


    }

    public function diagnosaAction($no_rm)
    {
        $diagnosa = new Diagnosa();


        $tgl = date('Y-m-d H:i:s');
        var_dump($diagnosa->id_diagnosa = NULL );
        var_dump($diagnosa->id_dokter = $this->session->get('nik'));
        var_dump($diagnosa->no_rm = $no_rm );
        var_dump($diagnosa->tanggal = $tgl );
        var_dump($diagnosa->diagnosa = $this->request->getPost('diagnosa'));

        $pb = PasienBerobat::findFirstByid_berobat($this->request->getPost('pb'));
         $pb->flag = '2';

        if ($diagnosa->save() and $pb->save()) {
            # code...
            $this->view->disable();
            $this->flashSession->success('Data Berhasil Disimpan');
            $this->response->redirect('');
        } else {
            $this->view->disable();
            $this->flashSession->error('Data Tidak Tersimpan');
            $this->response->redirect('');
        }

    }

    // menu pasien
    public function caripasienAction()
    {
        $pasien = DataPasien::find();
        $this->view->data=$pasien;

        $this->view->pick('dokter/caripasien');
    }

    public function detailpasienAction($data1)
    {

        $cari = $this->request->getPost('nama');

        if ($cari != NULL) {
                # code...
            $data = $cari;
            } else {
                $data = $data1;
            }

            $nama = DataPasien::findFirstBynama_pasien($data);
            $id = $nama->no_rm;
            $no_rm = DataPasien::findFirstByno_rm($data);
            
            
            if ($data == $nama->nama_pasien) {
                # code...
                $nama = DataPasien::findBynama_pasien($data);
                $this->view->data1=$nama;

                if ($this->session->get('poly') == 'gigi' or $this->session->get('level_pengguna') == 'admin') {
                    # code...

                $asesmengigi = Asesmen::findByno_rm($id);
                $this->view->asesmen=$asesmengigi;
                $no_rm = DataPasien::findFirstByno_rm($id);
                $this->view->pasien=$no_rm;
                 $diagnosa = Diagnosa::findByno_rm($id);
                $this->view->diagnosa=$diagnosa;
            }

            } else {
                $no_rm = DataPasien::findByno_rm($data);
                $this->view->data1=$no_rm;

                if ($this->session->get('poly') == 'gigi' or $this->session->get('level_pengguna') == 'admin') {
                    # code...
                $asesmengigi = Asesmen::findByno_rm($data);
                $this->view->asesmen=$asesmengigi;
                $no_rm = DataPasien::findFirstByno_rm($data);
                $this->view->pasien=$no_rm;

                 $diagnosa = Diagnosa::findByno_rm($data);
                $this->view->diagnosa=$diagnosa;       
                    
                }
        }

        $pasien = DataPasien::find();
        $this->view->data=$pasien;
        
        $this->view->pick('dokter/datapasien');
    }
    // end menu pasien

    //datadiagnosa
    public function datadiagnosaAction()
    {
        $diagnosa = Diagnosa::findByid_dokter($this->session->get('nik'));
        $this->view->diagnosa=$diagnosa;
        $this->view->pick('dokter/datadiagnosa');
    }

    public function datadiagnosa1Action()
    {
        $diagnosa = Diagnosa::find();
        $this->view->diagnosa=$diagnosa;
        $this->view->pick('dokter/datadiagnosa');
    }


    public function editdiagnosaAction($id)
   {
    $diagnosa = Diagnosa::findFirstByid_diagnosa($id);
    $password = md5($this->request->getPost('pass'));
    $pengguna = Pengguna::findFirstBynik($this->session->get('nik'));
    
    if ($pengguna->password == $password) {
        # code...
        $diagnosa->diagnosa = $this->request->getPost('diagnosa');

    
        if ($diagnosa->save()) {
            $this->view->disable();
            $this->flashSession->success('Data Berhasil Diubah');
            $this->response->redirect('Dokter/detailpasien/'.$diagnosa->no_rm);
        } else {

            $this->view->disable();
            $this->flashSession->success('Tidak dapat Mengubah Data');
            $this->response->redirect('Dokter/detailpasien/'.$diagnosa->no_rm);
        }
    
    } else {
         $this->view->disable();
            $this->flashSession->warning('Sandi yang Anda Masukkan Salah');
            $this->response->redirect('Dokter/detailpasien/'.$diagnosa->no_rm);
    }
   } 

   //editdiagnosamenu
    public function editdiagnosa1Action($id)
   {
    $password = md5($this->request->getPost('pass'));
    $pengguna = Pengguna::findFirstBynik($this->session->get('nik'));
    if ($pengguna->password == $password) {
        # code...
        $diagnosa = Diagnosa::findFirstByid_diagnosa($id);
        $diagnosa->diagnosa = $this->request->getPost('diagnosa');

if ($this->session->get('level_pengguna') == 'admin') {
        if ($diagnosa->save()) {
            $this->view->disable();
            $this->flashSession->success('Data Berhasil Diubah');
            $this->response->redirect('Dokter/datadiagnosa1/');
        } else {

            $this->view->disable();
            $this->flashSession->success('Tidak dapat Mengubah Data');
            $this->response->redirect('Dokter/datadiagnosa1');
        }
    } else {
        if ($diagnosa->save()) {
            $this->view->disable();
            $this->flashSession->success('Data Berhasil Diubah');
            $this->response->redirect('Dokter/datadiagnosa/');
        } else {

            $this->view->disable();
            $this->flashSession->success('Tidak dapat Mengubah Data');
            $this->response->redirect('Dokter/datadiagnosa');
        }
    }
    } else {
        $this->view->disable();
            $this->flashSession->warning('Sandi yang Anda Masukkan Salah');
            $this->response->redirect('Dokter/datadiagnosa');
    }
   } 

   //laporan
   public function laporanAction()
   {    
    $tgl = date('Y-m-d');
    $nik = $this->session->get('nik');
    $hariini = PasienBerobat::findpasienday($nik,$tgl);
    $tampil = $this->modelsManager->executeQuery($hariini);
    $this->view->jmlday=$tampil;

    $semua = PasienBerobat::findBynik($nik);
    $this->view->jmlall=$semua;
    
    $diagnosa = Diagnosa::findByid_dokter($this->session->get('nik'));
    $this->view->jml=$diagnosa;
    $this->view->pick('dokter/laporan');
   }

   //edit asesmen
   public function editasesmenAction($id)
   {
        if ($this->session->get('poly') == 'gigi') {
            # code...
            $asesmen = Asesmen::findFirstByid_asesmen($id);
            $this->view->data=$asesmen;           
            $this->view->pick('dokter/editasesmen');

        } elseif ($this->session->get('poly') == 'VCT') {
            # code...
            $this->view->pick('dokter/asesmenVCT');
        }
    
   }
   public function proseseditasesmenAction($id_asesmen,$id_pasien)
   {

        $asesmengigi = Asesmen::findFirstByid_asesmen($id_asesmen);

        $asesmengigi->id_dokter = $this->session->get('nik');
        $asesmengigi->golongandarah = $this->request->getPost('golongandarah');
        $asesmengigi->tekanandarah1 = $this->request->getPost('tekanandarah1');
        $asesmengigi->tekanandarah2 = $this->request->getPost('tekanandarah2');
        $asesmengigi->tekanandarah = $this->request->getPost('tekanandarah');
        $asesmengigi->tekananjantung = $this->request->getPost('tekananjantung');
        $asesmengigi->tjket = $this->request->getPost('tjket');
        $asesmengigi->diabetes = $this->request->getPost('diabetes');
        $asesmengigi->diabetesket = $this->request->getPost('diabetesket');
        $asesmengigi->oklusi = $this->request->getPost('oklusi');
        $asesmengigi->toruspalatinus = $this->request->getPost('toruspalatinus');
        $asesmengigi->torusmandibularis = $this->request->getPost('torusmandibularis');
        $asesmengigi->palatum = $this->request->getPost('palatum');
        $asesmengigi->supernumerary = $this->request->getPost('supernumerary');
        $asesmengigi->supernumeraryket = $this->request->getPost('supernumeraryket');
        $asesmengigi->Diastema = $this->request->getPost('Diastema');
        $asesmengigi->Diastemaket = $this->request->getPost('Diastemaket');
        $asesmengigi->Gigianomali = $this->request->getPost('Gigianomali');
        $asesmengigi->Gigianomaliket = $this->request->getPost('Gigianomaliket');
        $asesmengigi->lain = $this->request->getPost('lain');
        $asesmengigi->Keterangan = $this->request->getPost('Keterangan');
        $asesmengigi->g18 = $this->request->getPost('18');
        $asesmengigi->g28 = $this->request->getPost('28');
        $asesmengigi->g38 = $this->request->getPost('38');
        $asesmengigi->g48 = $this->request->getPost('48');
        $asesmengigi->g17 = $this->request->getPost('17');
        $asesmengigi->g27 = $this->request->getPost('27');
        $asesmengigi->g37 = $this->request->getPost('37');
        $asesmengigi->g47 = $this->request->getPost('47');
        $asesmengigi->g16 = $this->request->getPost('16');
        $asesmengigi->g26 = $this->request->getPost('26');
        $asesmengigi->g36 = $this->request->getPost('36');
        $asesmengigi->g46 = $this->request->getPost('46');
        $asesmengigi->g15g55 = $this->request->getPost('15/55');
        $asesmengigi->g25g65 = $this->request->getPost('25/65');
        $asesmengigi->g35g75 = $this->request->getPost('35/75');
        $asesmengigi->g45g85 = $this->request->getPost('45/85');
        $asesmengigi->g14g54 = $this->request->getPost('14/54');
        $asesmengigi->g24g64 = $this->request->getPost('24/64');
        $asesmengigi->g34g74 = $this->request->getPost('34/74');
        $asesmengigi->g44g84 = $this->request->getPost('44/84');
        $asesmengigi->g13g53 = $this->request->getPost('13/53');
        $asesmengigi->g23g63 = $this->request->getPost('23/63');
        $asesmengigi->g33g73 = $this->request->getPost('33/73');
        $asesmengigi->g43g83 = $this->request->getPost('43/83');
        $asesmengigi->g12g52 = $this->request->getPost('12/52');
        $asesmengigi->g22g62 = $this->request->getPost('22/62');
        $asesmengigi->g32g72 = $this->request->getPost('32/72');
        $asesmengigi->g42g82 = $this->request->getPost('42/82');
        $asesmengigi->g11g51 = $this->request->getPost('11/51');
        $asesmengigi->g21g61 = $this->request->getPost('21/61');
        $asesmengigi->g31g71 = $this->request->getPost('31/71');
        $asesmengigi->g41g81 = $this->request->getPost('41/81');

        
        $id_pasien = $asesmengigi->no_rm;
        if ($asesmengigi->save()) {
            # code...
            $this->view->disable();
            $this->flashSession->success('Data Berhasil Disimpan');
            $this->response->redirect('dokter/detailpasien/'.$id_pasien);
        } else {
            $this->view->disable();
            $this->flashSession->error('Data Tidak Tersimpan');
            $this->response->redirect('dokter/detailpasien/'.$id_pasien);
        
        }
   }

   public function pasienselAction()
   {
    $pasien = PasienBerobat::findBynik($this->session->get('nik'));
    $this->view->data=$pasien;
    $this->view->pick('dokter/pasiensel');
   }

   public function pasienharAction()
   {
    $tgl = date('Y-m-d');
    $pasien = PasienBerobat::findpasienhar($tgl,$this->session->get('nik'));
            $tampil = $this->modelsManager->executeQuery($pasien);
    $this->view->data=$tampil;
    $this->view->pick('dokter/pasiensel');
   }

    public function dltdiagnosaAction(){
        $id_diagnosa = $this->request->getPost('id');
        
        $pdelete=Diagnosa::findFirstByid_diagnosa($id_diagnosa);

        if ($pdelete->delete()) {
           $this->view->disable();
           $this->flashSession->success('Data Berhasil Dihapus');
           $this->response->redirect('dokter/datadiagnosa');
        }else{
            $this->view->disable();
           $this->flashSession->error('gagal');
           $this->response->redirect('dokter/datadiagnosa');
        }

    }
}
