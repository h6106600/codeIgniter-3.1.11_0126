<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('posts');
		$this->load->model('users');
		$this->load->helper('url');
	}

	public function index()
	{
        redirect(base_url().'/home'); 
	}

	public function user_sign_in()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/nav');
		$this->load->view('user/sign_in');
		$this->load->view('layout/footer');
	}

	public function user_sign_in_post()
	{
		$usr = $this->input->post('usr');
		$pwd = $this->input->post('pwd');
		$result = $this->users->sign_in_check($usr,$pwd);
		if(empty($result)){
			$this->session->set_flashdata('error_msg', '帳號密碼輸入錯誤');
            redirect(base_url().'/user/user_sign_in'); 
            return;
		}
		$this->session->set_userdata('user', $usr);
		redirect(base_url().'/home'); 
		
	}

	public function user_sign_up()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/nav');
		$this->load->view('user/sign_up');
		$this->load->view('layout/footer');
	}

	public function user_sign_up_post()
	{
		$email = $this->input->post('email');
		$username = $this->input->post('usr');
		$password = $this->input->post('pwd');
		$password2 = $this->input->post('pwd2');

		$input_check_msg = $this->sign_up_input_check($email, $username, $password, $password2);
		if(!empty($input_check_msg)){
			$this->session->set_flashdata('error_msg', $input_check_msg);
			redirect(base_url().'/user/user_sign_up'); 
			return;
		}
		$this->users->sign_up_input($email, $username, $password);
		$this->session->set_userdata('user', $usr);
		redirect(base_url().'/home'); 
	}

	private function sign_up_input_check($email, $username, $password, $password2)
	{
		if($password !== $password2){
			return '確認密碼輸入錯誤';
		}
		$check_email = $this->users->sign_up_check($email, $username, $password);
		if(!empty($check_email)){
			return '此電子信箱已註冊';
		}
		return null;
	}

	public function user_sign_out()
	{
		$this->session->unset_userdata('user');
		redirect(base_url().'/home'); 
	}

}