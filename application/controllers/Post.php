<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('posts');
		$this->load->model('users');
		$this->load->helper('url');
	}

	public function post_input()
	{
		if(empty($this->session->userdata('user'))){
			redirect(base_url().'/home'); 
			return;
		}
		$this->load->view('layout/head');
		$this->load->view('layout/nav');
		$this->load->view('post/input');
		$this->load->view('layout/footer');
	}

	public function post_input_post()
	{
		$title = $this->input->post('title');
		$content = $this->input->post('content');

		$title = htmlspecialchars(trim($title));
		$content = htmlspecialchars(trim($content));

		$this->posts->insert_post($title, $content);
		redirect(base_url().'/post/post_input'); 
	}

}