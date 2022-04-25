<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function indexi()
	{
		$this->load->view('indexinfo');
	}
	public function indexf()
	{
		$this->load->view('indexfis');
	}
	public function indexq()
	{
		$this->load->view('indexqmc');
	}
	public function indexabc(){
		$this->load->model("Academico_model");
		$filas = $this->Academico_model->personas();
		$datos["filas"]=$filas;
		$this->load->view('indexabc',$datos);
	}
	public function eliminar(){
		
		$this->load->model("Academico_model");
		$this->Academico_model->eliminar($_GET['id']);
		$filas = $this->Academico_model->personas();
		$datos["filas"]=$filas;
		$this->load->view('indexabc',$datos);
	}
}
