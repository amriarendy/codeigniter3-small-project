<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function users()
    {
        $data = [
            'title' => "Users",
            'description' => "Users",
        ];
        $this->load->view('users', $data);
    }

    public function addUsers()
    {
        $data = [
            'title' => "Users",
            'description' => "Users",
        ];
        $this->load->view('users', $data);
    }

    public function editUsers()
    {
        $data = [
            'title' => "Users",
            'description' => "Users",
        ];
        $this->load->view('users', $data);
    }

    public function deleteUsers()
    {
        $data = [
            'title' => "Users",
            'description' => "Users",
        ];
        $this->load->view('users', $data);
    }
}
