<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Controllername
*/

class Process extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	}

    public function index()
    {
      	$this->load->view('process/home');
        $this->load->view('snippet/nav.php');
    }

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */

/*this file is for my php project!!*/