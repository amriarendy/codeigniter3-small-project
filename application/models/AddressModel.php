<?php

class AddressModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function getProvinces()
    {
        $result = $this->db->get('master_provinces');
        return $result;
    }

    public function getDistricts()
    {
        $result = $this->db->get('master_disctricts');
        return $result;
    }

    public function getRegencies()
    {
        $result = $this->db->get('master_regencies');
        return $result;
    }

    public function getVillages()
    {
        $result = $this->db->get('master_villages');
        return $result;
    }
}
