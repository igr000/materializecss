<?php
/********************************************************************************
--- Materialize_Basic controller class loads the view pages. --------------------
---------------------------------------------------------------------------------
--- Author: Irene Gayle Roque ---------------------------------------------------
********************************************************************************/
class Materialize_Basic extends Ci_Controller{
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
	    //loads materializecss_header page
		$this->load->view('materializecss_header');
		//loads materializecss_basic page
		$this->load->view('materializecss_basic');
		//loads materializecss_footer page
		$this->load->view('materializecss_footer');
	}
}
?>