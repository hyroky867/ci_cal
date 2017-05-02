<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculate extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->library('Input', $this->input->post(), 'calc_input');

		$operator_classname = $this->calc_input->getOperatorClassname();

		$operator = new $operator_classname;

		$data['calculator'] = new Calculation($operator);
		$data['input'] = $this->calc_input;
		$this->load->view('calculator', $data);
	}
}
