<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $userModel = $this->UsersModel;
        $data = [
            'title' => "Dashboard",
            'description' => "Dashboard page",
            // data
            'userSession' => $userModel->getSession()->row_array(),
        ];
        $this->load->view('dashboard', $data);
    }

    public function logOut()
    {
        $flashData = $this->session;
        session_unset();
        session_destroy();
        $flashData->set_flashdata('status', 'success');
        $flashData->set_flashdata('msg', 'Logout Success!');
        redirect('login');
    }
}
