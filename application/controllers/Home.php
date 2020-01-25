<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('posts');
		$this->load->model('users');
		$this->load->helper('url');
	}

	public function index()
	{
		$show = $this->posts->show();
		$this->load->view('layout/head');
		$this->load->view('layout/nav');
		$this->load->view('home', ['show' => $show]);
		$this->load->view('layout/footer');
	}

}