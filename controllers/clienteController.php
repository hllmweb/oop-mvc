<?php 

class clienteController extends Controller{
	public function index(){
		// echo "Oi eu sou o controller cliente";
		$this->load("cliente");
	}
}
?>