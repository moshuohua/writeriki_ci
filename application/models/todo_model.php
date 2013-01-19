<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getCompletedTodo()
    {
        $query = $this->db->get_where('todolist', array('status' => '0'));		
        return $query->result();
    }
 
    function getNextTodo()
    {
        $query = $this->db->get_where('todolist', array('status' => '1'));	
        return $query->result();
    }

    function add($data)
    {
        $this->db->insert('todolist', $data); 
    }
	
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */