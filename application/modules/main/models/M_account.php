<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_account extends CI_Model{
	
	function __construct()
    {
         parent::__construct();
         $this->load->library('session');
    }

	function getAll(){ 
		return TRUE;
	}

	function getWhere(){ 
		return TRUE;
	}
 

}
?>