<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
	}

	public function login()
	{
		$mainModel = $this->MainModel;
		$post = $this->input->post();
		$validation = $this->form_validation;
		$flashData = $this->session;
		$data = [
			'title' => "Login",
			'description' => "This master apps for codeigniter",
		];
		$validation->set_rules(
			'email',
			'Email',
			'required',
			[
				'required' => 'This value is required'
			]
		);
		$validation->set_rules(
			'password',
			'Password',
			'required',
			[
				'required' => 'This value is required'
			]
		);
		if ($validation->run() != false) {

			$email = strip_tags($post['email']);
			$password = strip_tags($post['password']);
			$user = $mainModel->loginCheck($email, $password)->row_array();

			if ($user) {

				if ($user['access'] == 'actived') {

					if (password_verify($password, $user['password'])) {
						$data = [
							'id' => $user['id'],
							'email' => $user['email'],
							'access' => $user['access'],
						];
						$this->session->set_userdata($data);
						if ($user) {
							$logEmail = $user['email'];
							// $mainModel->log($logEmail);
							$flashData->set_flashdata('status', 'success');
							$flashData->set_flashdata('msg', 'Login Success!');
							redirect('dashboard');
						}
					} else {
						$flashData->set_flashdata('status', 'error');
						$flashData->set_flashdata('msg', 'Email or Password Incorect!');
						redirect('login');
					}
				} else {
					$flashData->set_flashdata('status', 'error');
					$flashData->set_flashdata('msg', 'Your account not actived!');
					redirect('login');
				}
			} else {
				$flashData->set_flashdata('status', 'error');
				$flashData->set_flashdata('msg', 'Your account not registered!');
				redirect('login');
			}
		} else {
			$this->load->view('auth/login', $data);
		}
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
			'full_name',
			'Full Name',
			'required',
			[
				'required' => 'This value is required!'
			]
		);
		$validation->set_rules(
			'email',
			'email',
			'required|trim|valid_email|is_unique[users.email]',
			[
				'required' => 'This value is required!',
				'valid_email' => 'Email not valid!',
				'is_unique' => 'Email has been used!'
			]
		);
		$validation->set_rules(
			'password',
			'password',
			'required',
			[
				'required' => 'This value is required!'
			]
		);
		if ($validation->run() != false) {
			$model->registration();
			$flashData->set_flashdata([
				'status' => "success",
				'msg' => 'Registration Success!',
			]);
			redirect('login');
		} else {
			$this->load->view('auth/register', $data);
		}
	}
}
