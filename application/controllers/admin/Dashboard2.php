<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard2 extends CI_Controller {
	public function __construct(){
		 parent::__construct();
	}
	public function index()
	{
    $this->load->view('admin/guest/header.php');

    $this->load->view('admin/guest/aside.php');

		$this->load->view('admin/dashboard2/index.php');



	}

}
