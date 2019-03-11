<?php

class Asesmen extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_asesmen;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_berobat;

    /**
     *
     * @var integer
     * @Column(type="integer", length=20, nullable=true)
     */
    public $id_dokter;

    /**
     *
     * @var integer
     * @Column(type="integer", length=20, nullable=true)
     */
    public $id_perawat;

    /**
     *
     * @var integer
     * @Column(type="integer", length=6, nullable=true)
     */
    public $no_rm;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tanggal;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $nyeri;

    /**
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=true)
     */
    public $skala;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $lokasi;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $durasi;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $frekuensi;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $nyeri_hilang;

    /**
     *
     * @var string
     * @Column(type="string", length=11, nullable=true)
     */
    public $info;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $pukul;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $umur;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $gender;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $diagnosis;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $gangguankognitif;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $faktorlingkungan;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $responoperasi;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $penggunaanobat;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $riwayatjatuh1;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $diagnosissekunder;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $alatbantu;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $obativ;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $gayaberjalan;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $statusmental1;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $usia;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $statusmental;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $eliminasi;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $pengobatan;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $diagnosis2;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $ambulasi;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $nutrisi;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $gangguanpolatidur;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $riwayatjatuh;

    /**
     *
     * @var string
     * @Column(type="string", length=5, nullable=true)
     */
    public $riwayatjatuh2;

    /**
     *
     * @var string
     * @Column(type="string", length=5, nullable=true)
     */
    public $sekunder;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $alatbantu1;

    /**
     *
     * @var string
     * @Column(type="string", length=5, nullable=true)
     */
    public $terpasanginfus;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $gayaberjalan1;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $statusmental3;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $usia1;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $statusmental2;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $eliminasi1;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $pengobatan1;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $diagnosa;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $ambulasi1;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nutrisi1;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $polatidur;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $jatuh;

    /**
     *
     * @var string
     * @Column(type="string", length=2, nullable=true)
     */
    public $golongandarah;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    public $tekanandarah1;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    public $tekanandarah2;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    public $tekanandarah;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $tekananjantung;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tjket;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $diabetes;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $diabetesket;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=true)
     */
    public $oklusi;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $toruspalatinus;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $torusmandibularis;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $palatum;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $supernumerary;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $supernumeraryket;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $diastema;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $diastemaket;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $gigianomali;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $gigianomaliket;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $lain;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $keterangan;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g18;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g28;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g38;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g48;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g17;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g27;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g37;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g47;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g16;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g26;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g36;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g46;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g15g55;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g25g65;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g35g75;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g45g85;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g14g54;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g24g64;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g34g74;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g44g84;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g13g53;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g23g63;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g33g73;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g43g83;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g12g52;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g22g62;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g32g72;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g42g82;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g11g51;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g21g61;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g31g71;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $g41g81;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rke");
        $this->setSource("asesmen");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'asesmen';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Asesmen[]|Asesmen|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Asesmen|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
