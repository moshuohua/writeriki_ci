<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Todo_model');
		$this->load->helper('url');
        $this->load->library('session');
	}

	public function index()
	{
		$this->load->view('templates/header');
  		$this->load->view('nav');
  		$data['flash_message'] = $this->session->flashdata('message');
  		$data['todo_list'] = $this->Todo_model->getNextTodo();
        $data['completed_list'] = $this->Todo_model->getCompletedTodo();
        $this->load->view('todo/index', $data);
  		$this->load->view('templates/footer');
		
	}

}

/* End of file todo.php */
/* Location: ./application/controllers/todo.php */