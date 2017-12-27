<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Community Auth - Examples Controller
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2017, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

class Seleccion extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		// Form and URL helpers always loaded (just for convenience)
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function profesionales(){
		// header('Access-Control-Allow-Origin: *');
		if($this->input->post()){
			$id = $this->input->post('id');
			$this->load->model('global_model');
			$profesionales = $this->global_model->getByEspecialidad($id);
			$this->load->view('html_response/specialties',array('profesionales' => $profesionales));		

		}
	}
}