<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Controllername
*/

class Single_New_Doc extends CI_Controller {

	public function __construct()
	{
	   parent::__construct();
	   //Do your magic here
	}

    public function index()
    {
      	$this->load->view('snippet/header');
  		  $this->load->view('snippet/nav');
        $this->load->view('snippet/panel');
      	$this->load->view('project/single_new_docs');
  		  $this->load->view('snippet/footer');
    }

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */

/*this file is for my php project!!*/