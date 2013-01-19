<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* todolist page use ajax
* create by buxiangshuo
*/

class Todo extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	}

    public function index()
    {
      $this->load->view('templates/header');
  		$this->load->view('nav/nav');
      $this->load->view('todolist');
  		$this->load->view('templates/footer');
    }

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */

/*this file is for my php project!!*/