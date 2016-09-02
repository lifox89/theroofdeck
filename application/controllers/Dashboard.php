<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Dashboard extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
		$this->load->helper('url_helper');
		$this->load->library('session');
	}

	public function index()
	{	

		// Set Menu Types & Food
		$data['type']		= $this->dashboard_model->f_get_menu_type();
		$data['food']   	= $this->dashboard_model->f_get_menu();		
			
		usort($data['type'], function($a, $b) { return $a['foodtp'] - $b['foodtp']; });
		usort($data['food'], function($a, $b) { return $a['foodtp'] - $b['foodtp']; });

		$this->load->view('templates/header');
		$this->load->view('templates/dashboard_body', $data);
		$this->load->view('templates/footer');

	}
}