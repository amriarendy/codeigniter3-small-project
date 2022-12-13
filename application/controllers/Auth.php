<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		$data = [
			'title' => "Login",
			'description' => "This master apps for codeigniter",
		];
		$this->load->view('auth/login', $data);
	}

	public function register()
	{
		$model = $this->MainModel;
		$validation = $this->form_validation;
		$flashData = $this->session;
		$data = [
			'title' => "Registratsi",
			'description' => "This master apps for codeigniter",
		];
		$validation->set_rules(
			'fullName',
			'Full Name',
			'required',
			[
				'required' => 'This value is required'
			]
		);
		$validation->set_rules(
			'email',
			'email',
			'required|trim|valid_email|is_unique[users.email]',
			[
				'required' => 'This value is required',
				'valid_email' => 'Email not',
				'is_unique' => 'Email has been used'
			]
		);
		$validation->set_rules(
			'password',
			'password',
			'required',
			[
				'required' => 'This value is required'
			]
		);
		if ($validation->run() != false) {
			$model->registration();
			$flashData->set_flashdata([
				'status' => true,
				'msg' => 'Registration Success!',
			]);
			redirect('login');
		} else {
			$this->load->view('auth/register', $data);
		}
	}
}
