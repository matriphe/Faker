<?php

namespace Faker\Provider\id_ID;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{lastName}} {{companySuffix}}',
    );

    /**
     * @link http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
    protected static $companyPrefix = array('PT', 'CV', 'UD', 'PD', 'Perum');

    /**
     * @link http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
    protected static $companySuffix = array('(Persero) Tbk', 'Tbk');

    /**
     * Get company prefix.
     *
     * @return string company prefix
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * Get company suffix.
     *
     * @return string company suffix
     */
    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }

    /**
     * @link http://www.gaikindo.or.id/wp-content/uploads/2015/05/PerPres-39_2014-lampiran-negative-list.pdf
     */
    protected static $business = array(
        'Pertanian', 'Kehutanan', 'Kelautan dan Perikanan',
        'Energi dan Sumber Daya Mineral', 'Perindustrian',
        'Pertahanan dan Keamanan', 'Pekerjaan Umum',
        'Perdagangan', 'Pariwisata dan Ekonomi Kreatif',
        'Perhubungan', 'Komunikasi dan Informatika', 'Keuangan', 'Perbankan',
        'Tenaga Kerja dan Transmigrasi', 'Pendidikan dan Kebudayaan',
        'Kesehatan'
    );

    /**
     * Get company business fields.
     *
     * @return string company business field
     */
    public static function business()
    {
        return static::randomElement(static::$business);
    }

}
