<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function blank()
    {
        $data = [
            'title' => "Blank Page",
            'description' => "Blank Page",
        ];
        $this->load->view('page/blank', $data);
    }

    public function table()
    {
        $data = [
            'title' => "Table Page",
            'description' => "Table Page",
        ];
        $this->load->view('page/table', $data);
    }

    public function form()
    {
        $data = [
            'title' => "Form Page",
            'description' => "Form Page",
        ];
        $this->load->view('page/form', $data);
    }
}
