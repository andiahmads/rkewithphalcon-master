<?php

class Dokter extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $nik;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $gender;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $alamat;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $poly;

    /**
     *
     * @var string
     * @Column(type="string", length=13, nullable=true)
     */
    public $tlp;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rke");
        $this->setSource("dokter");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'dokter';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Dokter[]|Dokter|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Dokter|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
