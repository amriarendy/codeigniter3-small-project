<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function index()
    {
        $userModel = $this->UsersModel;
        $data = [
            'title' => "List Users",
            'description' => "Users",
            // data
            'userSession' => $userModel->getSession()->row_array(),
            'fetchAllUsers' => $userModel->getAll()->result(),
        ];
        $this->load->view('users/index', $data);
    }

    public function add()
    {
        $userModel = $this->UsersModel;
        $data = [
            'title' => "List Users",
            'description' => "Users",
            // data
            'userSession' => $userModel->getSession()->row_array(),
        ];
        $this->load->view('users/add', $data);
    }

    public function edit()
    {
        $userModel = $this->UsersModel;
        $data = [
            'title' => "List Users",
            'description' => "Users",
            // data
            'userSession' => $userModel->getSession()->row_array(),
            'fetchAllUsers' => $userModel->getAll()->result(),
        ];
        $this->load->view('users/index', $data);
    }

    public function delete()
    {
        $userModel = $this->UsersModel;
        $data = [
            'title' => "List Users",
            'description' => "Users",
            // data
            'userSession' => $userModel->getSession()->row_array(),
            'fetchAllUsers' => $userModel->getAll()->result(),
        ];
        $this->load->view('users/index', $data);
    }
}
