<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academico_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function personas()
	{
		$this->load->database();
        $query=$this->db->query("select * from persona");
        return $query->result(); 
	}
    public function persona($id)
	{
		$this->load->database();
        $query=$this->db->query("select * from persona where ci=".$id);
        return $query->result(); 
	}
	public function eliminar($id){
		$this->load->database();
        $query=$this->db->query("delete from persona where ci=".$id);
       	$query->result();
	}
	public function editar($id){
		
	}
}
