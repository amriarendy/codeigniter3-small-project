<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        $this->load->model('AddressModel');
    }
    public function provinces()
    {
        $userModel = $this->UsersModel;
        $addressModel = $this->AddressModel;
        $data = [
            'title' => "List Provinces",
            'description' => "Master Provinces",
            // data
            'userSession' => $userModel->getSession()->row_array(),
            'fetchProvinces' => $addressModel->getProvinces()->result(),
        ];
        $this->load->view('master/address/provinces', $data);
    }

    public function districts()
    {
        $userModel = $this->UsersModel;
        $addressModel = $this->AddressModel;
        $data = [
            'title' => "Master Districts",
            'description' => "Master Provinces",
            // data
            'userSession' => $userModel->getSession()->row_array(),
            'fetchDistricts' => $addressModel->getDistricts()->result(),
        ];
        $this->load->view('master/address/districts', $data);
    }

    public function regencies()
    {
        $userModel = $this->UsersModel;
        $addressModel = $this->AddressModel;
        $data = [
            'title' => "Master Regencies",
            'description' => "Master Regencies",
            // data
            'userSession' => $userModel->getSession()->row_array(),
            'fetchRegencies' => $addressModel->getRegencies()->result(),
        ];
        $this->load->view('master/address/regencies', $data);
    }

    public function villages()
    {
        $userModel = $this->UsersModel;
        $addressModel = $this->AddressModel;
        $data = [
            'title' => "Master villages",
            'description' => "Master villages",
            // data
            'userSession' => $userModel->getSession()->row_array(),
            'fetchVillages' => $addressModel->getVillages()->result(),
        ];
        $this->load->view('master/address/villages', $data);
    }
}
