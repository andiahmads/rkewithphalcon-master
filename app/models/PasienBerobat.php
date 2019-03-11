<?php

class PasienBerobat extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_berobat;

    /**
     *
     * @var integer
     * @Column(type="integer", length=6, nullable=true)
     */
    public $no_rm;

    /**
     *
     * @var integer
     * @Column(type="integer", length=18, nullable=true)
     */
    public $nik;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $poly;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tanggal_berobat;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $total_pembayaran;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=false)
     */
    public $status;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rke");
        $this->setSource("pasien_berobat");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pasien_berobat';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PasienBerobat[]|PasienBerobat|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PasienBerobat|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }


    public static function finddokter($poly,$flag,$nik)
    {
        return "SELECT * FROM PasienBerobat where poly = '$poly' and flag ='$flag' and nik='$nik' ";
    }
    public static function findperawat($poly,$flag)
    {
        return "SELECT * FROM PasienBerobat where poly = '$poly' and flag ='$flag'";
    }
        public static function findpasienday($nik,$tgl)
    {
        return "SELECT * FROM PasienBerobat Where nik = '$nik' and tanggal_berobat = '$tgl'";
    }



    public static function findpasienhar($tgl,$nik)
    {
       return "SELECT * FROM PasienBerobat where tanggal_berobat = '$tgl' and nik = '$nik' ";
    }
}
