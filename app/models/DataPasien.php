<?php

class DataPasien extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=6, nullable=false)
     */
    public $no_rm;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama_pasien;

    /**
     *
     * @var string
     * @Column(type="string", length=34, nullable=true)
     */
    public $tanggal_lahir;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $jenis_kelamin;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $agama;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $pendidikan;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $pekerjaan;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $bahasa_sehari;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama_ayah;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama_ibu;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $budaya_suku;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $alamat;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    public $rt;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    public $rw;

    /**
     *
     * @var string
     * @Column(type="string", length=13, nullable=true)
     */
    public $no_telpon;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $perubahan_alamat;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama_wali1;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama_wali2;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $hubungan;

    /**
     *
     * @var string
     * @Column(type="string", length=13, nullable=true)
     */
    public $telpon_wali;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rke");
        $this->setSource("data_pasien");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'data_pasien';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DataPasien[]|DataPasien|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DataPasien|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }


}
