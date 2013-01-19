<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Todo_model');
		$this->load->helper('url');
        //$this->load->library('session');
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

	public function add()
    {   
        $this->load->library('form_validation');
 
        // validation rules
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'max_length[255]');
 
 
        if ($this->form_validation->run())
        {
            $todo = array(
                    'name'=>$this->input->post('title'),
                    'description'=>$this->input->post('description')
                    );
            $this->Todo_model->add($todolist);
 
            $this->session->set_flashdata('message', 'Done. You have added new task.');            
            redirect('/');
        }
        else
        {
            $this->load->view('todo/add');
        }
    }

}

/* End of file todo.php */
/* Location: ./application/controllers/todo.php */