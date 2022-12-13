<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function provinces()
    {
        $data = [
            'title' => "Master Provinces",
            'description' => "Dashboard page",
        ];
        $this->load->view('master/provinces', $data);
    }

    public function addProvinces()
    {
        $data = [
            'title' => "Master Provinces",
            'description' => "Dashboard page",
        ];
        $this->load->view('master/provinces', $data);
    }

    public function editProvinces()
    {
        $data = [
            'title' => "Master Provinces",
            'description' => "Dashboard page",
        ];
        $this->load->view('master/provinces', $data);
    }

    public function deleteProvinces()
    {
        $data = [
            'title' => "Master Provinces",
            'description' => "Dashboard page",
        ];
        $this->load->view('master/provinces', $data);
    }
}
