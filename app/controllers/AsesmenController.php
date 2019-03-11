<?php

class AsesmenController extends \Phalcon\Mvc\Controller
{

    public function pasienAction($no_rm,$idberobat)
    {	
    	if ($this->session->get('poly') == 'gigi') {
    		# code...
            $pasienbaru = PasienBerobat::findFirstByid_berobat($idberobat);
            $this->view->pb=$pasienbaru;

            $pasien = DataPasien::findFirstByno_rm($no_rm);
            $this->view->data=$pasien;
   	    	$this->view->pick('asesmen/gigi');

    	} elseif ($this->session->get('poly') == 'VCT') {
    		# code...
    		$this->view->pick('asesmen/vct');
    	}
    }

    public function testAction()
    {
        $pb = Pasienbaru::findanalisis($this->session->get('poly'),'0');
        $tampil = $this->modelsManager->executeQuery($pb);
        $this->view->data=$tampil;
        $result = array();

        var_dump(array_push($result,array('no_rm' => $tampil->no_rm , 'poly' => $tampil->poly, 'id_dokter' => $tampil->id_dokter )));
        echo json_encode(array("result" => $result));

    }

    public function gigiAction($no_rm)
    {
        $gigi = new Asesmen();
        $date = date('Y-m-d');

        $gigi->id_asesmen = NULL ;
        $gigi->id_berobat = $this->request->getPost('idberobat');
        $gigi->id_perawat = $this->session->get('nik');
        $gigi->no_rm = $no_rm;
        $gigi->tanggal = $date;
        $gigi->nyeri = $this->request->getPost('nyeri');
        $gigi->skala = $this->request->getPost('skala');
        $gigi->lokasi = $this->request->getPost('lokasi');
        $gigi->durasi = $this->request->getPost('durasi');
        $gigi->frekuensi = $this->request->getPost('frekuensi');
        $gigi->nyeri_hilang = $this->request->getPost('nyerihilang');
        $gigi->info = $this->request->getPost('info');
        $gigi->pukul = $this->request->getPost('pukul');
        $gigi->umur = $this->request->getPost('umur');
        $gigi->gender = $this->request->getPost('gender');
        $gigi->diagnosis = $this->request->getPost('diagnosis');
        $gigi->gangguankognitif = $this->request->getPost('gangguankognitif');
        $gigi->faktorlingkungan = $this->request->getPost('faktorlingkungan');
        $gigi->responoperasi = $this->request->getPost('responoperasi');
        $gigi->penggunaanobat = $this->request->getPost('penggunaanobat');
        $gigi->riwayatjatuh1 = $this->request->getPost('riwayatjatuh1');
        $gigi->diagnosissekunder = $this->request->getPost('diagnosasekunder');
        $gigi->alatbantu = $this->request->getPost('alatbantu');
        $gigi->obativ = $this->request->getPost('obativ');
        $gigi->gayaberjalan = $this->request->getPost('gayaberjalan');
        $gigi->statusmental1 = $this->request->getPost('statusmental1');
        $gigi->usia = $this->request->getPost('usia');
        $gigi->statusmental = $this->request->getPost('statusmental');
        $gigi->eliminasi = $this->request->getPost('eliminasi');
        $gigi->pengobatan = $this->request->getPost('pengobatan');
        $gigi->diagnosis2 = $this->request->getPost('diagnosis2');
        $gigi->ambulasi = $this->request->getPost('ambulasi');
        $gigi->nutrisi = $this->request->getPost('nutrisi');
        $gigi->gangguanpolatidur = $this->request->getPost('gangguanpolatidur');
        $gigi->riwayatjatuh = $this->request->getPost('riwayatjatuh');
        $gigi->riwayatjatuh2 = $this->request->getPost('riwayatjatuh2');
        $gigi->sekunder = $this->request->getPost('sekunder');
        $gigi->alatbantu1 = $this->request->getPost('alatbantu1');
        $gigi->terpasanginfus = $this->request->getPost('terpasanginfus');
        $gigi->gayaberjalan1 = $this->request->getPost('gayaberjalan1');
        $gigi->statusmental3 = $this->request->getPost('statusmental3');
        $gigi->usia1 = $this->request->getPost('usia1');
        $gigi->statusmental2 = $this->request->getPost('statusmental2');
        $gigi->eliminasi1 = $this->request->getPost('eliminasi1');
        $gigi->pengobatan1 = $this->request->getPost('pengobatan1');
        $gigi->diagnosa = $this->request->getPost('diagnosa');
        $gigi->ambulasi1 = $this->request->getPost('ambulasi1');
        $gigi->nutrisi1 = $this->request->getPost('nutrisi1');
        $gigi->polatidur = $this->request->getPost('polatidur');
        $gigi->jatuh = $this->request->getPost('jatuh');

        $f = '1';
        $flag = PasienBerobat::findFirstByid_berobat($this->request->getPost('idberobat'));
            $flag->flag = $f;
            
        if ( $flag->save() and $gigi->save()) {
            # code...
                $this->view->disable();
                $this->flashSession->success('Data Berhasil Disimpan');
                $this->response->redirect('');
           
        } else {
            $this->view->disable();
            $this->flashSession->error('Data tidak Berhasil Disimpan');
            $this->response->redirect('');
        }

    }

    public function asesmenhariiniAction()
    {
        $tgl = date('Y-m-d');
        $asesmen = Asesmen::findBytanggal($tgl);
        $this->view->data=$asesmen;
        $this->view->pick('asesmen/index');
    }


    public function dataasesmenAction()
    {
        $asesmen = Asesmen::find();
        $this->view->data=$asesmen;
        $this->view->pick('asesmen/dataasesmen');
    }
    
    //edit asesmen
    public function editasesmenAction($idasesmen,$no_rm,$flag = NULL)
    {   
        if ($flag == NULL) {
            # code...
        $pasien = DataPasien::findFirstByno_rm($no_rm);
        $this->view->data=$pasien;

        $asesmen = Asesmen::findFirstByid_asesmen($idasesmen);
        $this->view->datas=$asesmen;
        $this->view->pick('asesmen/editasesmen');
        } else {
        $pasien = DataPasien::findFirstByno_rm($no_rm);
        $this->view->data=$pasien;

        $asesmen = Asesmen::findFirstByid_asesmen($idasesmen);
        $this->view->datas=$asesmen;
        $this->view->pick('asesmen/asesmenhariini');

        }

    }
    public function proseseditasesmenAction($id,$flag)
    {
        $gigi = Asesmen::findFirstByid_asesmen($id);

        $gigi->nyeri = $this->request->getPost('nyeri');
        $gigi->skala = $this->request->getPost('skala');
        $gigi->lokasi = $this->request->getPost('lokasi');
        $gigi->durasi = $this->request->getPost('durasi');
        $gigi->frekuensi = $this->request->getPost('frekuensi');
        $gigi->nyeri_hilang = $this->request->getPost('nyerihilang');
        $gigi->info = $this->request->getPost('info');
        $gigi->pukul = $this->request->getPost('pukul');
        $gigi->umur = $this->request->getPost('umur');
        $gigi->gender = $this->request->getPost('gender');
        $gigi->diagnosis = $this->request->getPost('diagnosis');
        $gigi->gangguankognitif = $this->request->getPost('gangguankognitif');
        $gigi->faktorlingkungan = $this->request->getPost('faktorlingkungan');
        $gigi->responoperasi = $this->request->getPost('responoperasi');
        $gigi->penggunaanobat = $this->request->getPost('penggunaanobat');
        $gigi->riwayatjatuh1 = $this->request->getPost('riwayatjatuh1');
        $gigi->diagnosissekunder = $this->request->getPost('diagnosasekunder');
        $gigi->alatbantu = $this->request->getPost('alatbantu');
        $gigi->obativ = $this->request->getPost('obativ');
        $gigi->gayaberjalan = $this->request->getPost('gayaberjalan');
        $gigi->statusmental1 = $this->request->getPost('statusmental1');
        $gigi->usia = $this->request->getPost('usia');
        $gigi->statusmental = $this->request->getPost('statusmental');
        $gigi->eliminasi = $this->request->getPost('eliminasi');
        $gigi->pengobatan = $this->request->getPost('pengobatan');
        $gigi->diagnosis2 = $this->request->getPost('diagnosis2');
        $gigi->ambulasi = $this->request->getPost('ambulasi');
        $gigi->nutrisi = $this->request->getPost('nutrisi');
        $gigi->gangguanpolatidur = $this->request->getPost('gangguanpolatidur');
        $gigi->riwayatjatuh = $this->request->getPost('riwayatjatuh');
        $gigi->riwayatjatuh2 = $this->request->getPost('riwayatjatuh2');
        $gigi->sekunder = $this->request->getPost('sekunder');
        $gigi->alatbantu1 = $this->request->getPost('alatbantu1');
        $gigi->terpasanginfus = $this->request->getPost('terpasanginfus');
        $gigi->gayaberjalan1 = $this->request->getPost('gayaberjalan1');
        $gigi->statusmental3 = $this->request->getPost('statusmental3');
        $gigi->usia1 = $this->request->getPost('usia1');
        $gigi->statusmental2 = $this->request->getPost('statusmental2');
        $gigi->eliminasi1 = $this->request->getPost('eliminasi1');
        $gigi->pengobatan1 = $this->request->getPost('pengobatan1');
        $gigi->diagnosa = $this->request->getPost('diagnosa');
        $gigi->ambulasi1 = $this->request->getPost('ambulasi1');
        $gigi->nutrisi1 = $this->request->getPost('nutrisi1');
        $gigi->polatidur = $this->request->getPost('polatidur');
        $gigi->jatuh = $this->request->getPost('jatuh');

    if ($flag == NULL ){
        if ($gigi->save()) {
            # code...
                $this->view->disable();
                $this->flashSession->success('Data Berhasil Diedit');
                $this->response->redirect('asesmen/dataasesmen');
           
        } else {
            $this->view->disable();
            $this->flashSession->error('Data tidak Berhasil Diedit');
            $this->response->redirect('asesmen/dataasesmen');
        }
    } else {
            if ($gigi->save()) {
            # code...
                $this->view->disable();
                $this->flashSession->success('Data Berhasil Diedit');
                $this->response->redirect('asesmen/asesmenhariini');
           
        } else {
            $this->view->disable();
            $this->flashSession->error('Data tidak Berhasil Diedit');
            $this->response->redirect('asesmen/asesmenhariini');
        }
    
    }


    }


    public function dltasesmenAction()
    {
          $id_asesmen = $this->request->getPost('id');
        
        var_dump($pdelete = Asesmen::findFirstByid_asesmen($id_asesmen));

        if ($pdelete->delete()) {
           $this->view->disable();
           $this->flashSession->success('Data Berhasil Dihapus');
           $this->response->redirect('asesmen/dataasesmen');
        }else{
            $this->view->disable();
           $this->flashSession->error('gagal');
           $this->response->redirect('asesmen/dataasesmen');
        }
    }

}

