<?php
/*
-- ---------------------------------------------------------------
-- MARKETPLACE 
-- CREATED BY : RIZKY MUSTHOFA
-- COPYRIGHT  : Copyright (c) 2020 
-- LICENSE    : http://opensource.org/licenses/MIT  MIT License
-- CREATED ON : 2020-03-18
-- UPDATED ON : V.1
-- ---------------------------------------------------------------
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller {
 	function __construct() {
	    parent::__construct(); 

	    /*Load session*/
	    // $this->load->library('session');
	    /*Model*/
	    // $this->load->model('M_account'); 
	    // $this->load->helper('login_access');
	}
	
	public function index()
	{
		$data['pages'] = 'default';
		$this->load->view('main',$data);
	}

 
 
}
