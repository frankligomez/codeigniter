<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model("datosModel");
		$this->load->helper(array('form', 'url'));

	}

	public function index()
	{
		$info["titulo"] = "Registra datos";
		$this->load->view('datos/index', $info);
	}

	public function registrar()
	{
		$nombre = $this->input->post("nombre"); // o también se puede hacer $_POST["nombre"];
		$telefono = $this->input->post("telefono"); // o también se puede hacer $_POST["telefono"];
		$email = $this->input->post("email"); // o también se puede hacer $_POST["email"];

		$resultado = $this->datosModel->registro($nombre, $telefono, $email);

		if($resultado){
			redirect("datos/correcto");
			} else {
			$this->index();
		}
	}

	public function correcto()
	{
		$info["titulo"] = "correcto";
		$this->load->view('datos/correcto', $info);
		echo "El registro ha sido almancenado"; 
	}
}

?>